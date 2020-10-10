<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>post</h1>
    <nav>
        <a href="post/create">新增文章</a>
        <a href="{{route('post.create')}}">新增文章</a>
    </nav>
    @foreach($posts as $post)
    <h2>{{$post->title}}</h2>
    <div>
        {{$post->content}}
        <a href="{{route('post.show',['id'=>$post->id])}}">繼續閱讀</a>
    </div>
    <div>
        建立時間:{{$post->created_at}}
    </div>
    @endforeach
</body>
</html>