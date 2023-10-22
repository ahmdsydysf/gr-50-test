<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'cat_id';
    protected $fillable = ['name' , 'cat_id' , 'parent_category_id'];

    public function Products()
    {
        return $this->hasMany(Product::class, 'category_id', 'cat_id');
    }

    public function Children()
    {
        return $this->hasMany(Category::class, 'parent_category_id', 'cat_id');
    }
    public function Parent()
    {
        return $this->belongsTo(Category::class, 'parent_category_id', 'cat_id')->withDefault(['name' => 'Main Parent']);
    }
}
