@extends('admin.layouts.glance')
@section('title')
    Admin users
@endsection
@section('content')
<h1>Admin users </h1>
<div style="margin: 20px">
    <a href="{{url('admin/users/create')}}" class="btn btn-success">Thêm Admin</a>
</div>
<div class="tables">
    <div class="table-responsive bs-example widget-shadow">
        <h4>Tổng số:</h4>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>STT</th>
                <th>Tên Admin</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($admins as $admin)
                <tr>
                    <th scope="row">{{$admin->id}}</th>
                    <td>{{$admin->name}}</td>
                    <td>{{$admin->email}}</td>

                    <td>
                        <a href="{{url('admin/users/'.$admin->id.'/edit')}}" class="btn btn-success">Sửa</a>
                        <a href="{{url('admin/users/'.$admin->id.'/delete ')}}" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $admins->links() }}
    </div>

</div>
@endsection
