<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItems;
use App\Models\Goods;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CartController extends Controller
{
    public function getLast() {
        return view('cart', ['carts' => Cart::query()->where('isClosed', '=', 'false')->get()]);
    }

    public function getOrderList(): View{
        return view('cart',['carts' => Cart::query()->where('isClosed', '=','true')->get()]);
    }

    public function addItem(int $goodId) {    
        $cart = Cart::query()->where('isClosed', '=','false')->orderBy('id','DESC')->first();
    
        $good = Goods::query()->where('id', '=',$goodId)->first();
     
        if (empty($cart)) {
            $cart = Cart::query()->insert([
            'price' => $good->price,
                'userId' =>  auth('web')->user()->id,
                'isClosed' => false,
            ]);
        }
        
        CartItems::query()->insert(['cart_id' => $cart->id, 'good_id' => $goodId, 'good_type' => 1, 'good_ingredients' => '{}', 'price' => $good->price]);
        return redirect()->back();
    }
}