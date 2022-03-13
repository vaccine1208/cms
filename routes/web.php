<?php

use App\Models\intel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FilesController;

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
Route::get('/about',[HomeController::class,'about'])->name('posts.about');
Route::get('/contact',[HomeController::class,'contact'])->name('posts.contact');
Route::get('/services',[HomeController::class,'services'])->name('posts.services');
Route::get('/homepage',[HomeController::class,'home'])->name('posts.homepage');
Route::get('/search',[HomeController::class,'search'])->name('posts.search');
Route::post('/FilesUpload',[FilesController::class,'upload']);
Route::get('/FilesUpload',[HomeController::class,'files'])->name('posts.fileupload');
Route::post('/home',[HomeController::class,'store']);
Route::get('/home',[HomeController::class,'home'])->name('posts.home');
Route::get('/logout',[HomeController::class,'logout']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
