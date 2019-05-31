@extends('admin.layouts.glance')
@section('title')
   Xóa menu
@endsection
@section('content')
    <h1> Xóa menu {{$menu->id.':'.$menu->name}}</h1>
    <div class="row">
        <h3 class="title1"></h3>
        <div class="form-three widget-shadow">
            <form name="content" action="{{url('admin/menu/'.$menu->id.'/delete')}}" method="post" class="form-horizontal">
                @csrf
                <div class="col-sm-offset-2"> <button type="submit" class="btn btn-danger">Xóa</button> </div>
            </form>
        </div>
    </div>
@endsection

