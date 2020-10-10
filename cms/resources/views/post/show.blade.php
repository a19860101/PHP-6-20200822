<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($posts as $post)
    <h1>show #{{$post->id}} {{$post->title}}</h1>
    <div>
        {{$post->content}}
    </div>
    <div>
        最後更新時間 {{$post->updated_at}}
    </div>
    <form action="{{route('post.destroy',['id'=>$post->id])}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="刪除">
    </form>
    <a href="{{route('post.edit',['id'=>$post->id])}}">編輯</a>
    @endforeach
</body>
</html>