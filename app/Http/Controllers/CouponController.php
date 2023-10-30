<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CouponItem;

class CouponController extends Controller
{
    public function index()
    {
        $coupons = CouponItem::all();
        return view('coupons', ['coupons' => $coupons]);
    }
}
