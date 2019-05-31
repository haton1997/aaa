@extends('admin.layouts.glance')
@section('title')
  Sửa menu
@endsection
@section('content')
    <h1>Sửa menu {{$menu->id.':'.$menu->name}}</h1>
    <div class="row">
        <h3 class="title1"></h3>
        <div class="form-three widget-shadow">
            <form name="menu" action="{{url('admin/menu/'.$menu->id)}}" method="post" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Tên menu </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="name" id="focusedinput" value="{{$menu->name}}" placeholder="Default Input">
                    </div>
                </div>

                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Slug</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="slug" id="focusedinput" value="{{$menu->slug}}" placeholder="Default Input">
                    </div>
                </div>

                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label">Mô tả ngắn</label>
                    <div class="col-sm-8"><textarea name="desc" id="txtarea1" cols="50" rows="4" class="form-control1">{{$menu->desc}}</textarea></div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Location</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="location" value="{{$menu->location}}" id="focusedinput" placeholder="Default Input">
                    </div>
                </div>
                <div class="col-sm-offset-2"> <button type="submit" class="btn btn-success">Sửa</button> </div>
            </form>
        </div>
    </div>
@endsection

