<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CouponItem extends Model
{
    protected $table = 'coupons';
    protected $fillable = ['naam','id', 'beschrijving', 'procent', 'afbeeldingnaam'];
}

