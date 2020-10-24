<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Tag;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
        $category = Category::all();
        return view('post.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $request->file('cover') 暫存
        // $request->file('cover')->store('images'); 上傳到 storage/app/ 檔名系統產生
        // $request->file('cover')->store('images','public'); 上傳到 storage/app/public 檔名系統產生
        // $request->file('cover')->storeAs('public/images','123'); 上傳到 storage/app/public/image 檔名自訂
        // $request->file('cover')->getClientOriginalName(); 取得原始檔名
        // $request->file('cover')->getClientOriginalExtension(); 取得副檔名
        
        // $request->validate([
        //     'title'     => 'required | max:200',
        //     'content'   => 'required'
        // ]);
        //
        //方法一
        // $post = new Post;
        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->save();
        if($request->file('cover')){
            $ext = $request->file('cover')->getClientOriginalExtension();
            $cover = Str::uuid().'.'.$ext;
            $request->file('cover')->storeAs('public/images',$cover);
        }else{
            $cover = '';
        }
        
        //方法二
        $post = new Post;
        $post->fill($request->all());
        // $post->fill([
            // 'title' => $request->title,
            // 'content' => $request->content
        // ]);
        $post->user_id = Auth::id();
        $post->cover = $cover;
        $post->category_id = $request->category_id;
        $post->save();

        $tags = explode(',',$request->tag);
        // dd($tags);
        foreach($tags as $tag){
            $tagModel = Tag::firstOrCreate(['title'=>$tag]);
            // Tag::create(['title'=>$tag]);
            // echo $tagModel->id."<br>";
            $post->tags()->attach($tagModel->id);

        }

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
       
        $post->tags()->detach();

        $tags = explode(',',$request->tag);
        foreach($tags as $tag){
            $tagModel = Tag::firstOrCreate(['title'=>$tag]);
            // Tag::create(['title'=>$tag]);
            // echo $tagModel->id."<br>";
            $post->tags()->attach($tagModel->id);

        }
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
        //方法一
        // $post = Post::findOrFail($post->id);
        // $post->delete();
        // return redirect()->route('post.index');
        //方法二
        // $post->delete();
        // return redirect()->route('post.index');
        //方法三
        Post::destroy($post->id);
        return redirect()->route('post.index');
    }

    public function trash(){
        $posts = Post::onlyTrashed()->get();
        // $posts = Post::withTrashed()->get();
        return view('post.trash',compact('posts'));
    }
    public function restore($id){
        Post::onlyTrashed()->find($id)->restore();
        return redirect()->route('trash.index');
    }
    public function delete($id){
        $cover = Post::onlyTrashed()->find($id)->cover;
        // return Storage::download('public/images/'.$cover);
        // return Storage::get('public/images/'.$cover);
        Storage::delete('public/images/'.$cover);
        Post::onlyTrashed()->find($id)->forceDelete();
        return redirect()->route('trash.index');

    }
}
