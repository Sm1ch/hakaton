<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @param CartItems[] $cartItems
 */
class Goods extends Model
{
    use HasFactory;
    protected $table = 'goods';
    protected $fillable = [
        'name',
        'count',
        'image_path',
        'description',
];
}
