@extends('admin.layouts.glance')
@section('title')
   Quản trị Tag
@endsection
@section('content')
    <h1>Quản trị Tag</h1>
    <div style="margin: 20px">
        <a href="{{url('admin/content/tag/create')}}" class="btn btn-success">Thêm Tag</a>
    </div>
    <div class="tables">
        <div class="table-responsive bs-example widget-shadow">
            <h4>Tổng số:</h4>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên sản phẩm</th>
                    <th>ảnh</th>
                    <th>Author</th>
                    <th>view</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tags as $tag)
                    <tr>
                        <th scope="row">{{$tag->id}}</th>
                        <td>{{$tag->name}}</td>
                        <td>{{$tag->images}}</td>
                        <td>{{$tag->author_id}}</td>
                        <td>{{$tag->view}}</td>

                        <td>
                            <a href="{{url('admin/content/tag/'.$tag->id.'/edit')}}" class="btn btn-success">Sửa</a>
                            <a href="{{url('admin/content/tag/'.$tag->id.'/delete ')}}" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $tags->links() }}
        </div>

    </div>
@endsection
