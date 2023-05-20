<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\View\View;

class MenuController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function list(): View
    {
        return view('user.profile', [
            'user' => User::findOrFail()
        ]);
    }
}
