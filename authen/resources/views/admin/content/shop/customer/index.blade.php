@extends('admin.layouts.glance')
@section('title')
    Khách hàng
@endsection
@section('content')
<h1>Khách hàng</h1>
<div style="margin: 20px">
    <a href="{{url('admin/shop/customer/create')}}" class="btn btn-success">Thêm User</a>
</div>
<div class="tables">
    <div class="table-responsive bs-example widget-shadow">
        <h4>Tổng số:</h4>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>STT</th>
                <th>Tên Users</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a href="{{url('admin/shop/customer/'.$user->id.'/edit')}}" class="btn btn-success">Sửa</a>
                        <a href="{{url('admin/shop/customer/'.$user->id.'/delete ')}}" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    </div>

</div>
@endsection
