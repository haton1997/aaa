@extends('admin.layouts.glance')
@section('title')
   Nhà vận chuyển
@endsection
@section('content')
<h1>Nhà vận chuyển</h1>
<div style="margin: 20px">
   <a href="{{url('admin/shop/shipper/create')}}" class="btn btn-success">Thêm Nhà vận chuyển</a>
</div>
<div class="tables">
   <div class="table-responsive bs-example widget-shadow">
      <h4>Tổng số:</h4>
      <table class="table table-bordered">
         <thead>
         <tr>
            <th>STT</th>
            <th>Tên shippers</th>
            <th>Email</th>
            <th>Action</th>
         </tr>
         </thead>
         <tbody>
         @foreach($shippers as $shipper)
            <tr>
               <th scope="row">{{$shipper->id}}</th>
               <td>{{$shipper->name}}</td>
               <td>{{$shipper->email}}</td>
               <td>
                  <a href="{{url('admin/shop/shipper/'.$shipper->id.'/edit')}}" class="btn btn-success">Sửa</a>
                  <a href="{{url('admin/shop/shipper/'.$shipper->id.'/delete ')}}" class="btn btn-danger">Xóa</a>
               </td>
            </tr>
         @endforeach
         </tbody>
      </table>
      {{ $shippers->links() }}
   </div>

</div>
@endsection
