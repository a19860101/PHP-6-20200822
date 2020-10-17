@extends('template.master')
@section('page-title')
新增分類
@endsection
@section('main')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-10">
            <h2>新增分類</h2>
            <hr>
            <form action="{{route('category.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">分類標題</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}">
                </div>
                <div class="form-group">
                    <label for="cover">slug</label>
                    <input type="text" name="slug" id="slug"  class="form-control" value="{{old('slug')}}">
                </div>
                <input type="submit" class="btn btn-primary" value="新增分類">
                <input type="button" class="btn btn-danger" value="取消" onclick="history.back()">
            </form>
        </div>
    </div>
</div>
@endsection