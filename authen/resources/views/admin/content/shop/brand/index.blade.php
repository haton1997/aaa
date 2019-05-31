@extends('admin.layouts.glance')
@section('title')
    Quản trị Nhãn hiệu
@endsection
@section('content')
<h1>Quản trị Nhãn hiệu </h1>
<div style="margin: 20px">
    <a href="{{url('admin/shop/brand/create')}}" class="btn btn-success">Thêm Nhà vận chuyển</a>
</div>
<div class="tables">
    <div class="table-responsive bs-example widget-shadow">
        <h4>Tổng số:</h4>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>STT</th>
                <th>Tên brands</th>
                <th>Ảnh</th>
                <th>Link</th>
                <th>Mô tả ngắn</th>
                <th>Mô tả</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($brands as $brand)
                <tr>
                    <th scope="row">{{$brand->id}}</th>
                    <td>{{$brand->name}}</td>
                    <td>{{$brand->images}}</td>
                    <td>{{$brand->link}}</td>
                    <td>{{$brand->intro}}</td>
                    <td>{{$brand->desc}}</td>
                    <td>
                        <a href="{{url('admin/shop/brand/'.$brand->id.'/edit')}}" class="btn btn-success">Sửa</a>
                        <a href="{{url('admin/shop/brand/'.$brand->id.'/delete ')}}" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $brands->links() }}
    </div>

</div>
@endsection
