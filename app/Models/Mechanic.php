<?php

namespace App\Models;

use App\Models\Car;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mechanic extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Owner()
    {
        return $this->hasOneThrough(User::class, Car::class, 'mechanic_id', 'car_id', 'id', 'id');
    }

    public function Car()
    {
        return $this->hasOne(Car::class, 'mechanic_id', 'id');
    }
}
