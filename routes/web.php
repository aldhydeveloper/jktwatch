<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/watches',[HomeController::class, 'watches'])->name('watches');
Route::get('/about',[HomeController::class, 'about'])->name('about');

Route::get('/dashboard',[MainController::class, 'index'])->name('dashboard');
Route::get('/products',[MainController::class, 'product'])->name('products');
Route::get('/create_product',[MainController::class, 'create_product'])->name('create_product');

// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// });
