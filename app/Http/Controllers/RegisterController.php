<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller{
public function services(){
    return view('posts.services');}

    public function contact(){
    return view('posts.contact');
}
public function home(){
    return view('posts.home');
}
}

