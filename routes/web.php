<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PayOrderController;

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
Route::get('/payment',[PayOrderController::class,'store']);
Route::get('/home/{name?}', [HomeController::class,'index'])->name('home.indexs ');
Route::get('/posts', [ClientController::class,'getAllClients'])->name('posts.getAllClients ');

Route::get('/posts', [PostController::class,'getAllPosts']);
Route::post('/add-post', [PostController::class,'addPost'])->name('post.add');
