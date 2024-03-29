<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[MainController::class,'mainPage']);
Route::get('/posts',[MainController::class,'index'])->name('posts');
Route::get('/posts/create',[MainController::class,'createPosts']);
Route::post('/posts/insert',[MainController::class,'insertPosts']);
Route::get('/posts/edit/{id}',[MainController::class,'editPosts']);
Route::post('/posts/update/{id}',[MainController::class,'updatePosts']);
Route::get('/posts/delete/{id}',[MainController::class,'deletePosts']);
Route::get('/posts/truncate',[MainController::class,'deleteAllPosts']);

