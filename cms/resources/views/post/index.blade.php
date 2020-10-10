@extends('template.master')
@section('main')
<div class="container">
    <div class="row justify-content-center">
        @foreach($posts as $post)
        <div class="col-lg-8 col-12 border my-3 py-3">
            <img src="" alt="">
            <h2>{{$post->title}}</h2>
            <hr>
            <div>
                {{$post->content}}
                <a href="{{route('post.show',['id'=>$post->id])}}" class="btn btn-primary">繼續閱讀</a>
            </div>
            <hr>
            <div>
                建立時間:{{$post->created_at}}
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection