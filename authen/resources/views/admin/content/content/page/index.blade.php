@extends('admin.layouts.glance')
@section('title')
    Quản trị trang
@endsection
@section('content')
    <h1>Quản trị trang</h1>
    <div style="margin: 20px">
        <a href="{{url('admin/content/page/create')}}" class="btn btn-success">Thêm bài viết</a>
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
                @foreach($pages as $page)
                    <tr>
                        <th scope="row">{{$page->id}}</th>
                        <td>{{$page->name}}</td>
                        <td>{{$page->images}}</td>
                        <td>{{$page->author_id}}</td>
                        <td>{{$page->view}}</td>

                        <td>
                            <a href="{{url('admin/content/page/'.$page->id.'/edit')}}" class="btn btn-success">Sửa</a>
                            <a href="{{url('admin/content/page/'.$page->id.'/delete ')}}" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $pages->links() }}
        </div>

    </div>
@endsection
