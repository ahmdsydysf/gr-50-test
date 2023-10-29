<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Car;
use App\Models\Mechanic;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function Profile()
    {
        return $this->hasOne(Profile::class, 'user_id', 'id');
    }

    public function Products()
    {
        return $this->belongsToMany(Product::class, 'product_user', 'user_id', 'product_id', 'id', 'id');
    }

    // public function Mechanic()
    // {
    //     return $this->hasOneThrough(Mechanic::class, Car::class, 'mechanic_id', 'car_id', 'id', 'id');
    // }


    public function Car()
    {
        return $this->belongsTo(Car::class, 'car_id', 'id');
    }

    public function Country()
    {
        return $this->belongsTo(Country::class);
    }

    public function Posts()
    {
        return $this->hasMany(Post::class);
    }

    public function Image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function latestImage()
    {
        return $this->morphOne(Image::class, 'imageable')->latestOfMany();
    }
}
