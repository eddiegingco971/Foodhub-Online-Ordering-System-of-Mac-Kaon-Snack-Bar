<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'product_quantity',
        'total_amount'
    ];

    public function customers(){
        return $this->belongsTo(Customer::class);
    }
}
