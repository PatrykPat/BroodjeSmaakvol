<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;

class MenuItem extends Model
{
    protected $table = 'producten';
    protected $fillable = ['naam','id', 'beschrijving', 'prijs', 'vegan', 'uitverkocht', 'afbeeldingnaam'];

    public function carts()
    {
        return $this->belongsToMany(Cart::class, 'product_cart');
    }
}

