<?php

namespace Database\Seeders;

use App\Models\ShoppingCart;
use App\Models\ShoppingCartItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShoppingCartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cartItems = [
            [
                'product_id' => 1,
                'quantity' => 2,
            ],
            [
                'product_id' => 2,
                'quantity' => 3,
            ],
            // Add more cart items as needed
        ];

        // Insert cart items into database
        foreach ($cartItems as $cartItem) {
            ShoppingCart::create($cartItem);
        }
    }
}
