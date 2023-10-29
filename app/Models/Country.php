<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Users()
    {
        return $this->hasMany(User::class);
    }

    public function Postat()
    {
        return $this->hasManyThrough(Post::class, User::class);
    }
}
