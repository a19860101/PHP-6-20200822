<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    // php artisan make:controller PostController;
    function show(){
        return view('post');
    }
    function detail($id){
        return view('detail',compact('id'));
    }
}
