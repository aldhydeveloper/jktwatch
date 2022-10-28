<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\c_type;
use App\Http\Controllers\c_dials;
use App\Http\Controllers\c_models;
use App\Http\Controllers\c_brand;
use App\Http\Controllers\c_products;
use App\Http\Controllers\c_watch;

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

Route::get('/dashboard',[MainController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/products',[MainController::class, 'product'])->name('products');
Route::get('/create_product',[MainController::class, 'create_product'])->name('create_product');

// Route::get('/category',[MainController::class, 'category'])->name('category');
// Route::get('/category',[CategoryController::class, 'index'])->name('category');
Route::resource('category', CategoryController::class)->middleware(['auth']);
Route::resource('size', SizeController::class)->middleware(['auth']);
Route::resource('collections', CollectionController::class)->middleware(['auth']);
Route::resource('type', c_type::class)->middleware(['auth']);
Route::resource('dial', c_dials::class)->middleware(['auth']);
Route::resource('models', c_models::class)->middleware(['auth']);
Route::resource('brand', c_brand::class)->middleware(['auth']);
Route::resource('product', c_products::class);
Route::resource('watch', c_watch::class);

Route::resource('collections.category', CollectionController::class)->shallow();
Route::get('collections/form/{id}', [CollectionController::class, 'form'])->middleware(['auth']);
Route::get('watch/form/{id}', [c_watch::class, 'form']);

// Route::get('collection/all', [CollectionController::class, 'getCollection']);
// Route::get('collections/form/$1', CollectionController::class, 'form')->middleware(['auth']);
// Route::get('/collections/{cat_id}',[CollectionController::class, 'category']);

//collections
// Route::get('/all_collections',[MainController::class, 'all_collections'])->name('collections');
// Route::get('/create_collection',[MainController::class, 'create_collection'])->name('create_collection');


Route::get('/register', function () {
    return view('auth.register');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// });
