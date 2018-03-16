<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Item;
use App\Category;
use App\Tag;

class ItemController extends Controller
{
    protected $_categoriesFilterItems;

    protected $_queryFilterItems;

    protected $_items;

    protected $_qtyItemsByPage = 10;

    public function index(Request $request)
    {
        $categories = Category::orderBy('name', 'asc');

        $this->_categoriesFilterItems = $request->input('c');
        
        $this->_queryFilterItems = $request->input('q');

        $this->_items = $this->_getItems();

        $nextPageUrl = $this->_getPageUrl('nextPageUrl');
        $previousPageUrl = $this->_getPageUrl('previousPageUrl');

        return view('items.index', [
            'total' => $this->_items->count(),
            'queryFilterItems' => $this->_queryFilterItems,
            'categories' => $categories->pluck('name', 'id'),
            'items' => $this->_items,
            'pagination' => [
                'total' => $this->_items->total(),
                'currentPage' => $this->_items->currentPage(),
                'nextPageUrl' => $nextPageUrl,
                'previousPageUrl' => $previousPageUrl,
                'lastPage' => $this->_items->lastPage()
            ]
        ]);
    }

    protected function _getItems()
    {

        if (is_array($this->_categoriesFilterItems) && count($this->_categoriesFilterItems) > 0 && strlen($this->_queryFilterItems) > 0) {
            return $this->_filterItemsByCategoryAndName();
        }

        if (is_array($this->_categoriesFilterItems) && count($this->_categoriesFilterItems) > 0) {
            return $this->_filterItemsByCategory();
        }

        if (strlen($this->_queryFilterItems) > 0) {
            return $this->_filterItemsByName();
        }
        
        return $this->_listItems();
    }

    protected function _filterItemsByCategoryAndName()
    {
        $categories = $this->_categoriesFilterItems;

        return Item::whereHas('tags', function ($query) use ($categories) {
                        $query->where('tags.category_id', $categories);
                    })
                   ->where('name', 'like', '%' . $this->_queryFilterItems . '%')
                   ->orderBy('name', 'asc')
                   ->paginate($this->_qtyItemsByPage);
    }

    protected function _filterItemsByCategory()
    {
        $categories = $this->_categoriesFilterItems;

        return Item::whereHas('tags', function ($query) use ($categories) {
                        $query->where('tags.category_id', $categories);
                    })
                   ->orderBy('name', 'asc')
                   ->paginate($this->_qtyItemsByPage);
    }

    protected function _filterItemsByName()
    {
        return Item::where('name', 'like', '%' . $this->_queryFilterItems . '%')
                   ->orderBy('name', 'asc')
                   ->paginate($this->_qtyItemsByPage);
    }

    protected function _listItems()
    {
        return Item::orderBy('name', 'asc')
                   ->paginate($this->_qtyItemsByPage);
    }

    protected function _getPageUrl($type)
    {
        $pageUrl = $this->_items->$type();

        if (strlen($this->_queryFilterItems) > 0)  {
            if (strlen($pageUrl) <= 0) {
                $pageUrl = '?';

            } else {
                $pageUrl .= '&';
            }

            $pageUrl .= 'q=' . $this->_queryFilterItems;
        }

        return $pageUrl;
    }
  
    public function create()
    {
        $categories = Category::orderBy('name', 'asc');

        return view('items.create', [
            'categories' => $categories->pluck('name', 'id')
        ]);
    }
  
    public function store()
    {
        $rules = [
            'name' => 'required',
            'description' => 'nullable'
        ];

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('items/create')->withErrors($validator);
        }

        $item = new Item;
        $item->name = Input::get('name');
        $item->description = Input::get('description');
        $item->image = 0;
        $item->save();

        $id = $item->id;

        $selectedTags = Input::get('tags');

        if (is_array($selectedTags) && count($selectedTags) > 0) {
            $tags = Tag::where('item_id', $id);
            $tags->delete();

            foreach ($selectedTags as $categoryId) {
                $tag = new Tag;
                $tag->category_id = $categoryId;
                $tag->item_id = $id;
                $tag->save();
            }
        }

        $file = Input::file('image');

        if ($file) {
            $image = 'item' . $id . '.' . $file->getClientOriginalExtension();

            $path = Storage::putFileAs(
                'public', 
                $file,
                $image
            );

            $item->image = 1;
            $item->save();
        }

        return redirect()->route('items.index')->with('success', 'Produto adicionado com sucesso!');
    }
  
    public function edit($id)
    {
        $item = Item::findOrFail($id);

        $categories = Category::orderBy('name', 'asc');

        $tags = Item::find($id)->tags();

        return view('items.edit', [
            'item' => $item,
            'categories' => $categories->pluck('name', 'id'),
            'tags' => $tags->pluck('category_id')
        ]);
    }
  
    public function update($id)
    {
        $rules = [
            'name' => 'required',
            'description' => 'nullable',
            'tags' => 'required|array'
        ];

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('items/' . $id . '/edit')->withErrors($validator);

        }

        $item = Item::find($id);
        $item->name = Input::get('name');
        $item->description = Input::get('description');

        $selectedTags = Input::get('tags');

        if (is_array($selectedTags) && count($selectedTags) > 0) {
            $tags = Tag::where('item_id', $id);
            $tags->delete();

            foreach ($selectedTags as $categoryId) {
                $tag = new Tag;
                $tag->category_id = $categoryId;
                $tag->item_id = $id;
                $tag->save();
            }
        }

        $file = Input::file('image');
        
        if ($file) {
            $image = 'item' . $id . '.' . $file->getClientOriginalExtension();

            $path = Storage::putFileAs(
                'public', 
                $file, 
                $image
            );
        
            $item->image = 1;

        } else if (Input::get('deleteImage')) {
            $pathDirImage = public_path() . '/storage/';

            foreach (glob($pathDirImage . 'item' . $id . '.*') as $pathImage) {
                if (file_exists($pathImage)) {
                    unlink($pathImage);
                }
            }

            $item->image = 0;
        }

        $item->save();

        return redirect()->route('items.index')->with('success', 'Propduto atualizado com sucesso!');
    }
  
    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();

        return redirect()->route('items.index')->with('success','Produto apagado com sucesso!');
    }
}
