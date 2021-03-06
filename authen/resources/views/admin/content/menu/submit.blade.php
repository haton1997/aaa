@extends('admin.layouts.glance')
@section('title')
   Nội dung menu
@endsection
@section('content')
    <h1>Nội dung menu</h1>
    <div class="row">
        <div class="form-three widget-shadow">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form name="menu" action="{{url('admin/menu')}}" method="post" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Tên menu </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="name" value="{{old('name')}}" id="focusedinput" placeholder="Default Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Slug</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="slug" value="{{old('slug')}}" id="focusedinput" placeholder="Default Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label">Mô tả ngắn</label>
                    <div class="col-sm-8"><textarea name="desc" id="txtarea1" cols="50" rows="4" class="form-control1" >{{old('desc')}}</textarea></div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Location</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="location" value="{{old('location')}}" id="focusedinput" placeholder="Default Input">
                    </div>
                </div>
                <div class="col-sm-offset-2"> <button type="submit" class="btn btn-success">Thêm</button> </div>
            </form>
        </div>
    </div>
@endsection

