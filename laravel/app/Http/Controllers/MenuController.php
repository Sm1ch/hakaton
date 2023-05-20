<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\View\View;

class MenuController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function list(): View
    {
        return view('test', ['menus' => Menu::all()]);
    }
}
