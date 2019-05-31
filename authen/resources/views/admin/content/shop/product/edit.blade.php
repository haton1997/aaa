@extends('admin.layouts.glance')
@section('title')
    Sửa sản phẩm
@endsection
@section('content')
    <h1>Sửa sản phẩm {{$product->id.':'.$product->name}}</h1>
    <div class="row">
        <h3 class="title1"></h3>
        <div class="form-three widget-shadow">
            <form name="category" action="{{url('admin/shop/category/'.$product->id)}}" method="post" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Tên sản phẩm</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="name" id="focusedinput" value="{{$product->name}}" placeholder="Default Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Danh mục sản phẩm</label>
                    <div class="col-sm-8">
                        <select name="cat_id">
                            <option value="0">Không có danh mục</option>
                            @foreach($cats as $cat)
                                <option value="{{$cat->id}}"<?php echo ($product->cat_id==$cat->id)?'selected':'' ?>>{{$cat->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Slug</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="slug" id="focusedinput" value="{{$product->slug}}" placeholder="Default Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Images</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="images" id="focusedinput" value="{{$product->images}}" placeholder="Default Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Giá niêm yết</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="priceCore" id="focusedinput" value="{{$product->priceCore}}"placeholder=" ">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Giá bán</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="priceSale" id="focusedinput" value="{{$product->priceSale}}"placeholder=" ">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Tồn kho</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="stock" id="focusedinput"value="{{$product->stock}}" placeholder=" ">
                    </div>
                </div>
                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label">Mô tả ngắn</label>
                    <div class="col-sm-8"><textarea name="intro" id="txtarea1" cols="50" rows="4" class="form-control1 mytinymce">{{$product->intro}}</textarea></div>
                </div>
                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label">Mô tả</label>
                    <div class="col-sm-8"><textarea name="desc" id="txtarea1" cols="50" rows="4" class="form-control1 mytinymce">{{$product->desc}}</textarea></div>
                </div>
                <div class="col-sm-offset-2"> <button type="submit" class="btn btn-success">Sua</button> </div>
            </form>
        </div>
    </div>
@endsection
