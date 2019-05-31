@extends('admin.layouts.glance')
@section('title')
   menuitems
@endsection
@section('content')
    <h1>menuitems</h1>
    <div style="margin: 20px">
        <a href="{{url('admin/menuitems/create')}}" class="btn btn-success">Thêm menuitems</a>
    </div>
    <div class="tables">
        <div class="table-responsive bs-example widget-shadow">
            <h4>Tổng số:</h4>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Type</th>
                    <th>Params</th>
                    <th>link</th>
                    <th>icon</th>
                    <th>desc</th>
                    <th>parent_id</th>
                    <th>menu_id</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($menuitems as $menuitem)
                    <tr>
                        <th scope="row">{{$menuitem->id}}</th>
                        <td>{{$menuitem->name}}</td>
                        <td>{{$menuitem->type}}</td>
                        <td>{{$menuitem->params}}</td>
                        <td>{{$menuitem->link}}</td>
                        <td>{{$menuitem->icon}}</td>
                        <td>{{$menuitem->desc}}</td>
                        <td>{{$menuitem->parent_id}}</td>
                        <td>{{$menuitem->menu_id}}</td>

                        <td>
                            <a href="{{url('admin/menuitems/'.$menuitems->id.'/edit')}}" class="btn btn-success">Sửa</a>
                            <a href="{{url('admin/menuitems/'.$menuitems->id.'/delete ')}}" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $menuitems->links() }}
        </div>

    </div>
@endsection
