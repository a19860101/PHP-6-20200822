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
    @endforeach
</body>
</html>