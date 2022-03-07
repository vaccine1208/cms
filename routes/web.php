<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Models\intel;
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
    $intel = intel::orderBy('name', 'asc')->get();
 return view('posts.index',['intel'=> $intel,]);
});
Route::get('/categories',[RegisterController::class,'categories'])->name('posts.categories');
Route::get('/contact',[RegisterController::class,'contact'])->name('posts.contact');
Route::get('/services',[RegisterController::class,'services'])->name('posts.services');
Route::post('/home',[RegisterController::class,'store']);
Route::get('/home',[RegisterController::class,'home'])->name('posts.home');


