<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FCategorieController;
use App\Http\Controllers\FProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

//******************    Start Back Office       **************//

Route::get('/admin/dashboard',[DashboardController::class,'index'])->name("admin.dashboard");

Route::resource('admin/users',UserController::class)->except(['show']);
Route::resource('admin/categories',CategorieController::class)->except(['show']);
Route::resource('admin/products',ProductController::class);
Route::resource('admin/comments',CommentController::class)->except(['create','store','show']);


//******************   End Back Office          **************//



//******************   Start Front Office       **************//

Route::get('/',[HomeController::class,'index'])->name('index');


Route::get('/welc', function () {
    return view('welcome');
});


Route::get('/category/{id}',[FCategorieController::class,'show'])->name("categorie-page");


Route::get('/product/{id}',[FProductController::class,'show'])->name("product-page");

Route::get('/cart',[CartController::class,'index'])->name("cart.index");
Route::post('/cart',[CartController::class,'create'])->name("cart.create");
Route::delete('/cart/{id}/delete',[CartController::class,'delete'])->name("cart.delete");


Route::get('/create_product', function () {
    return view('create_product');
});
Route::get('/edit_product', function () {
    return view('edit_product');
});



Route::get('/profile',[ProfileController::class,'index'])->name("profile")->middleware('auth');

Route::get('/logout',[ProfileController::class,'logout'])->name("logout")->middleware('auth');









//******************   End Front Office        **************//


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
