<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'image'];
    protected $guarded = ['id', 'created_at', 'updated_at', 'delete_at'];
    protected $table = 'categories';
}