<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function User()
    {
        return $this->hasOne(User::class, 'car_id', 'id');
    }
    public function Mechanic()
    {
        return $this->belongsTo(Mechanic::class, 'mechanic_id', 'id');
    }
}
