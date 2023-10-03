<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $table = 'producten';
    protected $fillable = ['naam', 'beschrijving', 'prijs', 'vegan', 'uitverkocht', 'afbeeldingnaam'];
}
