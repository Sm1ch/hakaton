<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CartController extends Controller
{
    public function getLast(): View
    {
        return view('cart', ['carts' => Cart::query()->where('isClosed', '=', 'false')->get()]);
    }

    public function getOrderList(){
        return view('cart',['carts' => Cart::query()->where('isClosed', '=','true')->get()]);
    }
}