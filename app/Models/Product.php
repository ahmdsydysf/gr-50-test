<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // protected $with = ['Category']
    protected $fillable = ['name' , 'price' , 'category_id'];

    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'cat_id');
    }

    public function Users()
    {
        return $this->belongsToMany(User::class, 'product_user', 'product_id', 'user_id', 'id', 'id');
    }
}
