@extends('admin.layouts.glance')
@section('title')
  Sửa Tag
@endsection
@section('content')
    <h1>Sửa Tag {{$tag->id.':'.$tag->name}}</h1>
    <div class="row">
        <h3 class="title1"></h3>
        <div class="form-three widget-shadow">
            <form name="tag" action="{{url('admin/content/tag/'.$tag->id)}}" method="post" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Tên Tag </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="name" id="focusedinput" value="{{$tag->name}}" placeholder="Default Input">
                    </div>
                </div>

                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Slug</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="slug" id="focusedinput" value="{{$tag->slug}}" placeholder="Default Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Images</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="images" id="focusedinput" value="{{$tag->images}}" placeholder="Default Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label">Mô tả ngắn</label>
                    <div class="col-sm-8"><textarea name="intro" id="txtarea1" cols="50" rows="4" class="form-control1 mytinymce">{{$tag->intro}}</textarea></div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Tác giả</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="author_id" value="{{$tag->author_id}}" id="focusedinput" placeholder="Default Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">View</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="view" value="{{$tag->view}}" id="focusedinput" placeholder="Default Input">
                    </div>
                </div>
                <div class="col-sm-offset-2"> <button type="submit" class="btn btn-success">Sua</button> </div>
            </form>
        </div>
    </div>
@endsection

