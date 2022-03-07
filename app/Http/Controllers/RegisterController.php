<?php

namespace App\Http\Controllers;

use App\Models\intel;
use Illuminate\Http\Request;

class RegisterController extends Controller{

public function services(){
    $intel = intel::where('id',1)->get();

    return view('posts.services',[
        'intel'=> $intel,
    ]);
}

    public function contact(){
    return view('posts.contact');
}
public function home(){
    return view('posts.home');
}
public function categories(){
    
        return view('posts.categories');
}
public function store(){
    
    $intel = new intel();

    $intel->name = request('name');
    $intel->type = request('type');

    $intel->save();

    return redirect('/');
}
}

