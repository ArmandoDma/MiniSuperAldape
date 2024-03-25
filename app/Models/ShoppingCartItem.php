<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCartItem extends Model
{
    protected $table = 'shopping_cart_items';

    protected $primaryKey = 'product_id';


    protected $fillable = [
        'name_product', 'departamento', 'price', 'description', 'weight', 'pzas'
    ];

    public function register(){
        return $this->belongsTo(ShoppingCart::class);
    }
}
