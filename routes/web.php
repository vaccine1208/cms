<?php

use App\Models\intel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomePagesController;
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
Route::get('/about',[HomePagesController::class,'about'])->name('pages.about');
Route::get('/contact',[ContactController::class,'contact'])->name('pages.contact');
Route::post('/send-message',[ContactController::class,'sendEmail'])->name('contact.send');
Route::get('/services',[HomePagesController::class,'services'])->name('pages.services');
Route::get('/bags',[PagesController::class,'bags'])->name('subpages.bags');
Route::get('/glasses',[PagesController::class,'glasses'])->name('subpages.glasses');
Route::get('/shoes',[PagesController::class,'shoes'])->name('subpages.shoes');
Route::get('/kits',[PagesController::class,'kits'])->name('subpages.kits');
Route::get('/watch',[PagesController::class,'shoes'])->name('subpages.watch');
Route::get('/devices',[PagesController::class,'devices'])->name('subpages.devices');
Route::get('/search',[HomePagesController::class,'search'])->name('pages.search');
Route::post('/FilesUpload',[FilesController::class,'upload']);
Route::get('/FilesUpload',[HomePagesController::class,'files'])->name('pages.fileupload');
Route::post('/home',[HomePagesController::class,'store']);
Route::get('/',[HomePagesController::class,'index'])->name('home');
Route::get('/logout',[HomePagesController::class,'logout']);
Route::get('/home', [App\Http\Controllers\HomePagesController::class, 'index'])->name('home');

Auth::routes();
