<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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
    return view('posts.index');
});

Route::get('/contact',[RegisterController::class,'contact'])->name('posts.contact');
Route::get('/services',[RegisterController::class,'services'])->name('posts.services');
Route::get('/home',[RegisterController::class,'home'])->name('posts.home');

