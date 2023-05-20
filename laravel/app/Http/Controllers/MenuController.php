<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Goods;
use App\Models\Menu;
use Illuminate\View\View;

class MenuController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function list(): View
    {
        return view('menu', ['menus' => Menu::all()]);
    }

    public function getMenu(int $id): View
    {
        return view('menu_goods', [
            'goods' => Goods::query()->where('menu_id', '=', $id)->get(),
            'menus' => Menu::all()
        ]);
    }
}
