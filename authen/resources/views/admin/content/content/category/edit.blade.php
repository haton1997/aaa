@extends('admin.layouts.glance')
@section('title')
  Sửa danh mục bài viết
@endsection
@section('content')
    <h1>Sửa danh mục bài viết {{$cat->id.':'.$cat->name}}</h1>
    <div class="row">
        <h3 class="title1"></h3>
        <div class="form-three widget-shadow">
            <form name="category" action="{{url('admin/content/category/'.$cat->id)}}" method="post" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Tên danh mục</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="name" id="focusedinput" value="{{$cat->name}}" placeholder="Default Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Slug</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="slug" id="focusedinput" value="{{$cat->slug}}" placeholder="Default Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Images</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="images" id="focusedinput" value="{{$cat->images}}" placeholder="Default Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label">Mô tả ngắn</label>
                    <div class="col-sm-8"><textarea name="intro" id="txtarea1" cols="50" rows="4" class="form-control1 mytinymce">{{$cat->intro}}</textarea></div>
                </div>
                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label">Mô tả</label>
                    <div class="col-sm-8"><textarea name="desc" id="txtarea1" cols="50" rows="4" class="form-control1 mytinymce">{{$cat->desc}}</textarea></div>
                </div>
                <div class="col-sm-offset-2"> <button type="submit" class="btn btn-success">Sua</button> </div>
            </form>
        </div>
    </div>
@endsection

