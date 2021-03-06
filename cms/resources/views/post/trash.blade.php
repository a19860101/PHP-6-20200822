@extends('template.master')
@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>標題</th>
                    <th>分類</th>
                    <th>動作</th>
                </tr>
                @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->category->title}}</td>
                    <td>
                        <form action="{{route('trash.delete',['id'=>$post->id])}}" method="post" class="d-inline-block">
                            @csrf
                            @method('delete')
                            <input type="submit" value="永久刪除" class="btn btn-danger" onclick="return confirm('刪除之後無法還原，確定要刪除？')">
                        </form>
                        <a href="{{route('trash.restore',['id'=>$post->id])}}" class="btn btn-success">還原</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection