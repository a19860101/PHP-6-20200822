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
    function show($id){
        $posts = DB::select('SELECT * FROM posts WHERE id = ?',[$id]);
        return view('post.show',compact('posts'));
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
    function destroy($id){
        DB::delete('DELETE FROM posts WHERE id = ?',[$id]);
        return redirect(route('post.index'));
    }
    function edit($id){
        $posts = DB::select('SELECT * FROM posts WHERE id = ?',[$id]);
        return view('post.edit',compact('posts'));
    }
    function update($id){

    }
}
