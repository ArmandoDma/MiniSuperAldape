<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    protected $table = 'shopping_cart';

    protected $fillable = [
        'product_id', 'quantity'
    ];

    public function shoppincart(){
        return $this->hasOne(ShoppingCartItem::class);
    }
}
