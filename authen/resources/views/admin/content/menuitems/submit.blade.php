@extends('admin.layouts.glance')
@section('title')
   Nội dung menuitems
@endsection
@section('content')
    <h1>Nội dung menuitems</h1>
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

            <form name="menuitems" action="{{url('admin/menuitems')}}" method="post" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Tên menuitems </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="name" value="{{old('name')}}" id="focusedinput" placeholder="Default Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">type</label>
                    <div class="col-sm-8">
                        <select name="type">
                            @foreach($types as $type_id =>$value)
                                <option value="{{$type_id}}">{{$value}}</option>
                            @endforeach
                        </select>

                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">params</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="params" value="{{old('params')}}" id="focusedinput" placeholder="Default Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">link</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="link" value="{{old('link')}}" id="focusedinput" placeholder="Default Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">icon</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="icon" value="{{old('icon')}}" id="focusedinput" placeholder="Default Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label">Mô tả ngắn</label>
                    <div class="col-sm-8"><textarea name="desc" id="txtarea1" cols="50" rows="4" class="form-control1" >{{old('desc')}}</textarea></div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">parent_id</label>
                    <div class="col-sm-8">
                        <select name="parent_id">
                            <option value="0">Mặc định</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">menu_id</label>
                    <div class="col-sm-8">
                        <select name="menu_id">
                            @foreach($menu_items as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-offset-2"> <button type="submit" class="btn btn-success">Thêm</button> </div>
            </form>
        </div>
    </div>
@endsection

