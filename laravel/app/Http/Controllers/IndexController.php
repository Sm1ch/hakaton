<?php

namespace App\Http\Controllers;

use App\Models\Goods;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function index():View
    {
        return view('index', ['goods' => Goods::all(),'menus' => Menu::all()]);
    }

}
