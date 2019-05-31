@extends('admin.layouts.glance')
@section('title')
   Menu
@endsection
@section('content')
    <h1>Menu</h1>
    <div style="margin: 20px">
        <a href="{{url('admin/menu/create')}}" class="btn btn-success">Thêm menu</a>
    </div>
    <div class="tables">
        <div class="table-responsive bs-example widget-shadow">
            <h4>Tổng số:</h4>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Slug</th>
                    <th>desc</th>
                    <th>Location</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($menus as $menu)
                    <tr>
                        <th scope="row">{{$menu->id}}</th>
                        <td>{{$menu->name}}</td>
                        <td>{{$menu->slug}}</td>
                        <td>{{$menu->desc}}</td>
                        <td>{{$menu->location}}</td>

                        <td>
                            <a href="{{url('admin/menu/'.$menu->id.'/edit')}}" class="btn btn-success">Sửa</a>
                            <a href="{{url('admin/menu/'.$menu->id.'/delete ')}}" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $menus->links() }}
        </div>

    </div>
@endsection
