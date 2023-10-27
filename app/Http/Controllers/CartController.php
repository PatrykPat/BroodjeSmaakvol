<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\MenuItem;

class CartController extends Controller

{
    public function showMenuItems(Cart $cart, MenuItem $item)
{
    $producten = $cart->items;
    return view('cart', ['products' => $producten]);
}

public function addToCart(Cart $cart, MenuItem $item)
{
    $cart->items()->attach($item);
}

}
