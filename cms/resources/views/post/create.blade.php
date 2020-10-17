@extends('template.master')
@section('page-title')
新增文章
@endsection
@section('main')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-10">
            <h2>新增文章</h2>
            <hr>
            <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">文章標題</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}">
                </div>
                <div class="form-group">
                    <label for="category_id">分類</label>
                    <select name="category_id" id="category_id" class="form-control">
                        @foreach($category as $cate)
                        <option value="{{$cate->id}}">{{$cate->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="cover">文章封面</label>
                    <input type="file" name="cover" id="cover">
                </div>
                <div class="form-group">
                    <label for="content">文章內容</label>
                    <textarea name="content" id="content" rows="10" class="form-control">{{old('content')}}</textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="新增文章">
                <input type="button" class="btn btn-danger" value="取消" onclick="history.back()">
            </form>
        </div>
    </div>
</div>
@if($errors->any())
    @foreach($errors->all() as $error)
    <div class="alert alert-danger mx-5" role="alert">
        {{$error}}
    </div>
    @endforeach
@endif
<script src="https://cdn.ckeditor.com/4.15.0/full/ckeditor.js"></script>
<script>
     CKEDITOR.replace( 'content' );
</script>
@endsection

