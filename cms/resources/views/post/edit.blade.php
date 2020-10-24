@extends('template.master')
@section('page-title')
編輯文章
@endsection
@section('main')

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-10">
            <h2>編輯文章</h2>
            <hr>
            <form action="{{route('post.update',['id'=>$post->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="title">文章標題</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{$post->title}}">
                </div>
                <div class="form-group">
                    <label for="tag">標籤</label>
                    <input type="text" name="tag" id="tag" class="form-control" value="{{$post->toTagString()}}">
                </div>
                <div class="form-group">
                    <label for="content">文章內容</label>
                    <textarea name="content" id="content" rows="10" class="form-control">{{$post->content}}</textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="更新文章">
                <input type="button" class="btn btn-danger" value="取消" onclick="history.back()">
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.15.0/full/ckeditor.js"></script>
<script>
     CKEDITOR.replace( 'content' );
</script>
@endsection
