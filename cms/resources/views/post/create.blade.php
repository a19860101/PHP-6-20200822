<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Post</h1>
    <form action="{{route('post.store')}}" method="post">
        @csrf
        <div>
            <label for="">標題</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="">內容</label>
            <textarea name="content"  cols="30" rows="10"></textarea>
        </div>
        <input type="submit" value="新增文章">
        <input type="button" value="取消" onclick="history.back()">
    </form>
</body>
</html>