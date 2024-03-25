<?php

namespace App\Http\Controllers;


use App\Models\ShoppingCartItem;
use Illuminate\Http\Request;

class CartController
{
    public function index()
    {
        $shoppingCartItems = ShoppingCartItem::all();

        // Calcula el subtotal y el total
        $subtotal = 0;
        foreach ($shoppingCartItems as $item) {
            $subtotal += $item->price;
            $sub = '$' . $subtotal;
        }
        $total = $subtotal * 1.16; // Aplica un i

        $totalString = '$' . $total;

        return view('admin.home.cart', compact('shoppingCartItems', 'totalString', 'sub'));
    }

    public function delete($product_Id){
        $cartItem = ShoppingCartItem::where('product_id', $product_Id)->first();
        if ($cartItem) {
            $cartItem->delete();
            return response()->json(['message' => 'CartItem eliminado correctamente'], 200);
        } else {
            return response()->json(['message' => 'CartItem no encontrado'], 404);
        }
    }
}
