<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{    
    use SoftDeletes;
    protected $fillable = ['name', 'image', 'description'];
    protected $guarded = ['id', 'created_at', 'updated_at', 'delete_at'];
    protected $table = 'items';

    public function tags()
    {
        return $this->belongsToMany('App\Category', 'tags');
    }
}
