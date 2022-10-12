<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'customer_id',
        'product_id',
        'order_id',
        'price',
        'quantity',
        'total_amount',
        'status'
    ];

    public function customers(){
        return $this->belongsTo(Customer::class, 'customer_id');
    }
    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
    public function orders(){
        return $this->belongsTo(Order::class,'order_id');
    }
}
