<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Post</h1>
    @foreach($posts as $post)
    <form action="" method="post">
        @csrf
        @method('update')
        <div>
            <label for="">標題</label>
            <input type="text" name="title" value="{{$post->title}}">
        </div>
        <div>
            <label for="">內容</label>
            <textarea name="content"  cols="30" rows="10">{{$post->content}}</textarea>
        </div>
        <input type="submit" value="更新文章">
    </form>
    @endforeach
</body>
</html>