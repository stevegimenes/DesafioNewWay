<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Category;

class CategoryController extends Controller
{
    protected $_queryFilterCategories;

    protected $_categories;

    protected $_qtyCategoriesByPage = 10;

    public function index(Request $request)
    {
        $this->_queryFilterCategories = $request->input('q');

        $this->_categories = $this->_getCategories();

        $nextPageUrl = $this->_getPageUrl('nextPageUrl');
        $previousPageUrl = $this->_getPageUrl('previousPageUrl');

        return view('categories.index', [
            'total' => $this->_categories->count(),
            'queryFilterCategories' => $this->_queryFilterCategories,
            'categories' => $this->_categories,
            'pagination' => [
                'total' => $this->_categories->total(),
                'currentPage' => $this->_categories->currentPage(),
                'nextPageUrl' => $nextPageUrl,
                'previousPageUrl' => $previousPageUrl,
                'lastPage' => $this->_categories->lastPage()
            ]
        ]);
    }

    protected function _getCategories()
    {
        if (strlen($this->_queryFilterCategories) > 0) {
            return $this->_filterCategoriesByName($this->_queryFilterCategories);
        }
        
        return $this->_listCategories();
    }

    protected function _filterCategoriesByName()
    {
        return Category::where('name', 'like', '%' . $this->_queryFilterCategories . '%')->
                        orderBy('name', 'asc')->paginate($this->_qtyCategoriesByPage);
    }

    protected function _listCategories()
    {
        return Category::orderBy('name', 'asc')->paginate($this->_qtyCategoriesByPage);
    }

    protected function _getPageUrl($type)
    {
        $pageUrl = $this->_categories->$type();

        if (strlen($this->_queryFilterCategories) > 0)  {
            if (strlen($pageUrl) <= 0) {
                $pageUrl = '?';

            } else {
                $pageUrl .= '&';
            }

            $pageUrl .= 'q=' . $this->_queryFilterCategories;
        }

        return $pageUrl;
    }
  
    public function create()
    {
        return view('categories.create');
    }
  
    public function store()
    {
        $rules = [
            'name' => 'required'
        ];

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('categories/create')->withErrors($validator);
        }

        $category = new Category;
        $category->name = Input::get('name');
        $category->save();

        $id = $category->id;

        $file = Input::file('image');

        if ($file) {
            $image = 'category' . $id . '.' . $file->getClientOriginalExtension();

            $path = Storage::putFileAs(
                'public', 
                $file,
                $image
            );

            $category->image = $image;
            $category->save();
        }

        return redirect()->route('categories.index')->with('success', 'Categoria adicionada com sucesso!');
    }
  
    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view('categories.edit', [
            'category' => $category
        ]);
    }
  
    public function update($id)
    {
        $rules = [
            'name' => 'required'
        ];

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('categories/' . $id . '/edit')->withErrors($validator);

        }

        $category = Category::find($id);
        $category->name = Input::get('name');

        $file = Input::file('image');
        if ($file) {
            $image = 'category' . $id . '.' . $file->getClientOriginalExtension();

            $path = Storage::putFileAs(
                'public', 
                $file, 
                $image
            );
        
            $category->image = $image;

        } else if (Input::get('deleteImage')) {
            $pathImage = public_path() . '/storage/' . $category->image;
            
            if (file_exists($pathImage)) {
                unlink($pathImage);
            }

            $category->image = '';
        }

        $category->save();

        return redirect()->route('categories.index')->with('success', 'Categoria atualizada com sucesso!');
    }
  
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')->with('success','Categoria apagada com sucesso!');
    }
}
