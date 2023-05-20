<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Goods;
use Illuminate\View\View;

class GoodsController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function goods(): View
    {
        // dd(Goods::all());
        return view('goods', ['goods' => Goods::all()]);
    }
}