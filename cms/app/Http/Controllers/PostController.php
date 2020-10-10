<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $posts = Post::all();
        // $posts = Post::get();
        $posts = Post::orderBy('id','DESC')->get();

        return view('post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //方法一
        // $post = new Post;
        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->save();

        //方法二
        $post = new Post;
        $post->fill($request->all());
        // $post->fill([
        //     'title' => $request->title,
        //     'content' => $request->content
        // ]);
        $post->save();

        //方法三
        // Post::create([
            //     'title' => $request->title,
            //     'content' => $request->content
        // ]);
        // Post::create($request->all());

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        // $post = Post::find($post->id);
        // $post = Post::findOrFail($post->id);
        // $post = Post::where('id',$post->id)->first();
        // return view('post.show',compact('post'));

        return view('post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        return view('post.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //方法一
        // $post = Post::findOrFail($post->id);
        // $post->fill([
        //     'title'     => $request->title,
        //     'content'   => $request->content,
        // ]);
        // $post->save();
        
        //方法二
        // $post = Post::findOrFail($post->id);
        // $post->fill($request->all());
        // $post->save();
        
        //方法三
        $post->fill($request->all());
        $post->save();

        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
