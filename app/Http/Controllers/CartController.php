<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\MenuItem;

class CartController extends Controller
{

    public function showMenuItems($cart_id)
    {
        $authUserId = Auth::id();

        if ($authUserId == $cart_id) {
            $cart = Cart::find($cart_id);
            $products = $cart ? $cart->producten : [];

            $popProducts = MenuItem::where('populair', true)->limit(2)->get();

            return view('cart', ['products' => $products, 'popProducts' => $popProducts]);
        }

        return abort(403); // Forbidden
    }

    public function addToCart(Request $request, $cart_id, $productId)
{
    $authUserId = Auth::id();

    if ($authUserId == $cart_id) {
        $cart = Cart::find($cart_id);

        if (!$cart) {
            // If the cart doesn't exist, create a new one
            $cart = new Cart();
            $cart->id = $cart_id;
            $cart->save();
        }

        // Now you can add the product to the cart
        $quantity = $request->input('quantity', 1);
        $cart->producten()->attach($productId, ['quantity' => $quantity]);

        return redirect()->back()->with('success', 'Product added to cart successfully.');
    }

    return redirect()->back()->with('error', 'Cart not found or unauthorized access.');
}

    public function deleteFromCart($cart_id, $productId)
    {
        $authUserId = Auth::id();

        if ($authUserId == $cart_id) {
            $cart = Cart::find($cart_id);
            if ($cart) {
                $cart->producten()->detach($productId);

                return redirect()->back()->with('success', 'Product removed from cart successfully.
                ');
            }
        }

        return redirect()->back()->with('error', 'Cart not found or unauthorized access.');
    }
}