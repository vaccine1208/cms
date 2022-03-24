<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function services(){
        $intel = intel::where('id',1)->get();
    
        return view('pages.services',[
            'intel'=> $intel,
        ]);
    }    

    public function home(){
        return view('pages.home');
    }
    public function homepage(){
        return view('pages.homepage');
    }
    public function about(){
        
            return view('pages.about');
    }
    public function search(Request $request){
        //creating a search function
        if (isset($_GET['query'])) {
            $search = $_GET['query'];
        //choosing a file name in the DB that is matching with the search query
            $searchName = DB::table('files')->where('name','LIKE','%'.$search.'%')->paginate(2);
            return view('pages.search',['files'=>$searchName]);
        }
        else {
            return redirect('/');
        }
}
    public function store(){
        
        $intel = new intel();
    
        $intel->name = request('name');
        $intel->type = request('file');
    
        $intel->save();
    
        return redirect('/');
    }
    
    public function logout () {
        //logout user
        auth()->logout();
        // redirect to homepage
        return redirect('/');
    }
    public function index()
    {
        return view('pages.home');
    }
    public function files()
    {
        return view('pages.fileupload');
    }
}
