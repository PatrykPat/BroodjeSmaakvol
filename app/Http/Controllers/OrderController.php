<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\ProductCart;
use App\Models\Order;

class OrderController extends Controller
{
    public function moveData()
    {
        DB::statement('
            INSERT INTO orders (id, product_id, cart_id, created_at, updated_at)
            SELECT id, product_id, cart_id, created_at, updated_at
            FROM product_cart
        ');

        // Delete data from product_cart table
        ProductCart::truncate();

        return redirect()->route('cart')->with('success', 'Data moved successfully and deleted from product_cart!');
    }
}
