<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MenuItem;


class Cart extends Model
{
protected $table = 'product_cart';
protected $fillable = ['product_id', 'vegan', 'naam', 'beschrijving', 'prijs', 'vegan', 'uitverkocht', 'afbeeldingnaam'];    

public function user()
{
    return $this->belongsTo(User::class);
}

public function products()
{
    return $this->belongsToMany(MenuItem::class, 'product_cart');
}
public function productInfo()
{
    return MenuItem::where('id', $this->product_id)->value('naam');
    
}


// public function addToCart()
//     {
//         return $this->belongsToMany(product_cart::class,'product_cart', 'product_id', 'cart_id');
//     }
}
