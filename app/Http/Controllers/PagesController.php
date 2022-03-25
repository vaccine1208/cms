<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function bags(){
        return view('pages\subpages.bags');
    }
    public function shoes(){
        return view('pages\subpages.shoes');
    }
    public function glasses(){
        return view('pages\subpages.glasses');
    }
    public function devices(){
        return view('pages\subpages.devices');
    }
    public function Watch(){
        return view('pages\subpages.watch');
    }
    public function kits(){
        return view('pages\subpages.kits');
    }
}
