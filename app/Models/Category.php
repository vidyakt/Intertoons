<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function categories()
    {
       return $this->hasMany(Category::class, 'parent_id');
    }

    public function childrenCategories()
    {
       return $this->hasMany(Category::class, 'parent_id')->with('categories');
    }
}
