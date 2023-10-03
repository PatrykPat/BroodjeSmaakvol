<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem; // Import the MenuItem model

class MenuController extends Controller
{
    public function index()
    {
        $producten = MenuItem::all();
        return view('menu', ['products' => $producten]);
    }
}
