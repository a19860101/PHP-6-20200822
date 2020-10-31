@extends('template.master')
@section('main')
<div class="container">
    <div class="row justify-content-center">
        @foreach($posts as $post)
        <div class="col-lg-8 col-12 border my-3 py-3">
            @if($post->cover != '')
            <img src="{{ asset('storage/images/'.$post->cover)}}" class="w-100">
            @else
            <img src="https://via.placeholder.com/800x400/?text=no-pic" class="w-100">
            @endif
            <h2>{{$post->title}}</h2>
            <span>分類:{{$post->category->title}}</span>
            <hr>
            
            <div>
                {!! Str::limit(strip_tags($post->content),200) !!}
                <br>
                <a href="{{route('post.show',['id'=>$post->id])}}" class="btn btn-primary">繼續閱讀</a>
            </div>
            <hr>
            <div>
                作者: {{$post->user->name}}
            </div>
            <hr>
                @foreach($post->tags as $tag)
                    <a href="#" class="badge badge-info">{{$tag->title}}</a>
                @endforeach
            <hr>
            <div>
                建立時間:{{$post->created_at}} <br>
                @php Carbon\Carbon::setLocale('zh_TW') @endphp
                建立時間{{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }} <br>
                更新時間{{ Carbon\Carbon::parse($post->updated_at)->diffForHumans() }}
            </div>
        </div>
        @endforeach
        <div class="col-lg-8 col-12 my-3">
        {{$posts->links()}}
        </div>
    </div>
</div>
@endsection