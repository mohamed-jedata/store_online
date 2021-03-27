<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommentController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin/dashboard', function () {
    return view("admin.dashboard");
})->name("admin.dashboard");

Route::resource('admin/users',UserController::class)->except(['show']);
Route::resource('admin/categories',CategorieController::class)->except(['show']);
Route::resource('admin/products',ProductController::class);
Route::resource('admin/comments',CommentController::class)->except(['create','store','show']);

