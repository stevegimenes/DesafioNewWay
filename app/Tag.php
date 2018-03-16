<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{    
    protected $fillable = [];
    protected $guarded = ['id', 'category_id', 'item_id'];
    protected $table = 'tags';
    public $timestamps = false;
}
