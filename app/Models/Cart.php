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
        return $this->belongsTo(Customer::class);
    }
    public function products()
    {
        return $this->belongsTo(Product::class);
    }
    public function orders(){
        return $this->belongsTo(Order::class);
    }
}
