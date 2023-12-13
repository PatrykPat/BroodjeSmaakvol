<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MenuItem;


class Cart extends Model
{
protected $table = 'product_cart';
protected $fillable = ['id','product_id','cart_id'];    

public function user()
{
    return $this->belongsTo(User::class);
}

public function producten()
    {
        return $this->belongsToMany(MenuItem::class, 'product_cart', 'cart_id', 'product_id')
            ->withPivot('quantity');
    }
public function productInfo()
{
    return MenuItem::where('cart_id', $this->product_id)->value('naam');
    
}};
