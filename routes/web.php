<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FCategorieController;
use App\Http\Controllers\FProductController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/category/{id}',[FCategorieController::class,'show']);


Route::get('/product/{id}',[FProductController::class,'show'])->name("product-page");


Route::get('/create_product', function () {
    return view('create_product');
});
Route::get('/edit_product', function () {
    return view('edit_product');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/profile', function () {
    return view('profile');
});
Route::get('/sign_in', function () {
    return view('sign_in');
});
Route::get('/create_account', function () {
    return view('create_account');
});





//******************   End Front Office        **************//

