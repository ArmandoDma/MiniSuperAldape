<?php

namespace Database\Seeders;

use App\Models\ShoppingCartItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShoppingCartItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'name_product' => 'Manzana Golden',
                'departamento' => 'Frutas y Verduras',
                'price' => 10.99,
                'description' => 'Manzana Roja Con Buen Sabor!',
                'weight' => '1kg',
                'pzas' => 1300,
                'image_product'=>'https://images.unsplash.com/photo-1591735179859-a049994205de?q=80&w=1780&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
            ],
            [
                'name_product' => 'Rib Eye',
                'departamento' => 'Carnicería',
                'price' => 105.49,
                'description' => 'La mejor carne que puedes comprar',
                'weight' => '1 g',
                'pzas' => 1780,
                'image_product'=>'https://images.unsplash.com/photo-1623241899289-e9a64b02150d?q=80&w=2021&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
            ],
            // Add more items as needed
        ];

        // Insert items into database
        foreach ($items as $item) {
            ShoppingCartItem::create($item);
        }
    }
}
