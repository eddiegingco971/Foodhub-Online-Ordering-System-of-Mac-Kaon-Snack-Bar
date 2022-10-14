<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_photo',
        'product_name',
        'quantity',
        'price',
        'category_id'
    ];

    public function categories(){
        return $this->belongsTo(Category::class);
    }
}
