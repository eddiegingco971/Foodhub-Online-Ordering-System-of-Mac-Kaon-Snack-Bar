<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'lastname',
        'firstname',
        'middlename',
        'email',
        'password',
        'age',
        'sex',
        'address',
        'barangay',
        'phone_number',
        'profile_image',
        'customer_status',
    ];
     
    public function users(){
        return $this->belongsTo(User::class);
    }
    public function carts(){
        return $this->hasMany(Cart::class);
    }
    public function orders(){
        return $this->hasMany(Order::class);
    }
}
