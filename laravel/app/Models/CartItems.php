<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CartItems extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'cart_id',
        'good_id',
        'good_type',
        'good_ingredients',
        'price',
    ];

    public function good(): BelongsTo
    {
        return $this->belongsTo(Goods::class);
    }
}
