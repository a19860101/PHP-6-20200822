<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    function index(){
        // return view('post.index');
        $posts = DB::select('SELECT * FROM posts');
        return view('post.index',compact('posts'));
    }
    function create(){
        return view('post.create');
    }
    function store(Request $request){
        DB::insert('INSERT INTO posts(title, content, created_at, updated_at)VALUES(?,?,?,?)',[
            $request->title,
            $request->content,
            now(),
            now()
        ]);
        // return redirect('post');
        return redirect(route('post.index'));
    }
}
