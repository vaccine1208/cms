<?php

namespace App\Http\Controllers;
use App\Models\files;
use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function upload(request $request){

        $files = new files();

         $files->name = request('name');
         $files->file = request('img');
         $files->price = request('price');
         //saving files to database
         $files->save();
    
        return redirect('/');
    }
}
