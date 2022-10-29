<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'user_pic',
        'age',
        'gender',
        'address',
        'barangay',
        'phone_number'
    ];

}
