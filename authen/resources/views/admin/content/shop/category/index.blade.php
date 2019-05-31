@extends('admin.layouts.glance')
@section('title')
   Quản trị danh mục sản phẩm
@endsection
@section('content')
   <h1>Quản trị danh mục sản phẩm</h1>
   <div style="margin: 20px">
       <a href="{{url('admin/shop/category/create')}}" class="btn btn-success">Thêm danh mục</a>
   </div>
   <div class="tables">
      <div class="table-responsive bs-example widget-shadow">
         <h4>Tổng số:</h4>
         <table class="table table-bordered">
            <thead>
            <tr>
               <th>STT</th>
               <th>Tên danh mục</th>
               <th>Tên</th>
               <th>ảnh</th>
               <th>Mô tả ngắn</th>
               <th>Mô tả</th>
               <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cats as $cat)
               <tr>
                  <th scope="row">{{$cat->id}}</th>
                  <td>{{$cat->name}}</td>
                  <td>{{$cat->slug}}</td>
                  <td>{{$cat->images}}</td>
                  <td>{{$cat->intro}}</td>
                  <td>{{$cat->desc}}</td>
                  <td>
                     <a href="{{url('admin/shop/category/'.$cat->id.'/edit')}}" class="btn btn-success">Sửa</a>
                     <a href="{{url('admin/shop/category/'.$cat->id.'/delete ')}}" class="btn btn-danger">Xóa</a>
                  </td>
               </tr>
            @endforeach
            </tbody>
         </table>
         {{ $cats->links() }}
      </div>

   </div>
@endsection
