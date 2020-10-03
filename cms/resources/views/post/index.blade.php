<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>post</h1>

    @foreach($posts as $post)
    <h2>{{$post->title}}</h2>
    <div>
        {{$post->content}}
    </div>
    <div>
        建立時間:{{$post->created_at}}
    </div>
    @endforeach
</body>
</html>