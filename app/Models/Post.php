<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
