<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItems extends Model
{
    use HasFactory;
    protected $fillable = [
        'cart_id',
        'good_id',
        'good_type',
        'good_ingredients',
        'price',
    ];
}
