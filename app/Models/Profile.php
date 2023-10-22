<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id' , 'first_name' , 'mobile'
    ];
    protected $primaryKey = 'user_id';
    public $incrementing = false;
    public $timestamps = false;
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
