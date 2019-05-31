@extends('admin.layouts.glance')
@section('title')
   Quản trị bài viết
@endsection
@section('content')
    <h1>Quản trị bài viết</h1>
    <div style="margin: 20px">
        <a href="{{url('admin/content/post/create')}}" class="btn btn-success">Thêm bài viết</a>
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
                @foreach($posts as $post)
                    <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td>{{$post->name}}</td>
                        <td>{{$post->images}}</td>
                        <td>{{$post->author_id}}</td>
                        <td>{{$post->view}}</td>

                        <td>
                            <a href="{{url('admin/content/post/'.$post->id.'/edit')}}" class="btn btn-success">Sửa</a>
                            <a href="{{url('admin/content/post/'.$post->id.'/delete ')}}" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $posts->links() }}
        </div>

    </div>
@endsection
