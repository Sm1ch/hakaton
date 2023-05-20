<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/menu', [MenuController::class, 'list']);

Route::get('/cart', [CartController::class, 'getLast']);

Route::get('/cart/orderList', [CartController::class, 'getOrderList']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [IndexController::class, 'index']);

Route::get('/goods', [App\Http\Controllers\GoodsController::class, 'goods']);

Route::get('/getMenu/{id?}', [MenuController::class, 'getMenu'])->name("getMenu");

Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile'])->name("profile");

Route::post('/cart',);

Route::get('addItem/{id?}', [CartController::class,'addItem'])->name("addItem");
