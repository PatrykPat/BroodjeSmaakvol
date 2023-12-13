<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;

class MenuItem extends Model
{
    protected $table = 'producten';
    protected $fillable = ['id','naam', 'beschrijving', 'prijs', 'vegan', 'uitverkocht', 'afbeeldingnaam'];

    public function cart()
    {
        return $this->belongsToMany(Cart::class, 'product_cart','cart_id','product_id','naam' );
    }
    
}

