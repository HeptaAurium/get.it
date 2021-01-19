<?php

use App\Http\Controllers\CartsController;
use App\Http\Controllers\CronController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrdersController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('move_images', [CronController::class, 'move_images']);
Route::get('products/{name}/{id}', [HomeController::class, 'view']);
Route::resource('orders', OrdersController::class);
Route::get('/items/in/cart', [OrdersController::class, 'cart_count']);

Route::resource('/cart', CartsController::class);
