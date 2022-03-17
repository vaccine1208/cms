<?php

use App\Models\intel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FilesController;
use App\Http\Controllers\ContactController;

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
 return view('pages.index',['intel'=> $intel,]);
});
Route::get('/about',[HomeController::class,'about'])->name('pages.about');
Route::get('/contact',[ContactController::class,'contact'])->name('pages.contact');
Route::post('/send-message',[ContactController::class,'sendEmail'])->name('contact.send');
Route::get('/services',[HomeController::class,'services'])->name('pages.services');
Route::get('/homepage',[HomeController::class,'home'])->name('pages.homepage');
Route::get('/search',[HomeController::class,'search'])->name('pages.search');
Route::post('/FilesUpload',[FilesController::class,'upload']);
Route::get('/FilesUpload',[HomeController::class,'files'])->name('pages.fileupload');
Route::post('/home',[HomeController::class,'store']);
Route::get('/home',[HomeController::class,'home'])->name('pages.home');
Route::get('/logout',[HomeController::class,'logout']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
