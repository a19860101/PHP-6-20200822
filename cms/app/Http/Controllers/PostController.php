<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    function index(){
        return view('post.index');
    }
    function create(){
        return view('post.create');
    }
}
