@extends('admin.layouts.glance')
@section('title')
    Nhà cung cấp
@endsection
@section('content')
<h1>Nhà cung cấp</h1>
<div style="margin: 20px">
    <a href="{{url('admin/shop/seller/create')}}" class="btn btn-success">Thêm Nhà cung cấp</a>
</div>
<div class="tables">
    <div class="table-responsive bs-example widget-shadow">
        <h4>Tổng số:</h4>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>STT</th>
                <th>Tên sellers</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sellers as $seller)
                <tr>
                    <th scope="row">{{$seller->id}}</th>
                    <td>{{$seller->name}}</td>
                    <td>{{$seller->email}}</td>
                    <td>
                        <a href="{{url('admin/shop/seller/'.$seller->id.'/edit')}}" class="btn btn-success">Sửa</a>
                        <a href="{{url('admin/shop/seller/'.$seller->id.'/delete ')}}" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $sellers->links() }}
    </div>

</div>
@endsection
