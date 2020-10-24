@extends('template.master')
@section('page-title')
-- {{$post->title}}
@endsection
@section('main')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-10">
            <h2>show #{{$post->id}} {{$post->title}}</h1>
            <hr>
            <div>作者:{{$post->user->name}}</div>
            <hr>
            <div>分類:{{$post->category->title}}</div>
            <div>標籤:{{$post->toTagString()}}</div>
            <hr>
            <div class="py-3">
                {!! $post->content !!}
            </div>
            <hr>
            <div class="pb-3">
                最後更新時間 {{$post->updated_at}}
            </div>
            @if($post->user->id === Auth::id())
            <!-- Auth::id(), Auth::user()->id -->
            <form action="{{route('post.destroy',['id'=>$post->id])}}" method="post" class="d-inline-block">
                @csrf
                @method('delete')
                <input type="submit" value="刪除" onclick="return confirm('確認刪除？')" class="btn btn-danger">
            </form>
            <a href="{{route('post.edit',['id'=>$post->id])}}" class="btn btn-success">編輯</a>
            @endif
            <a href="{{route('post.index')}}" class="btn btn-primary">文章列表</a>
        </div>
    </div>
</div>
@endsection