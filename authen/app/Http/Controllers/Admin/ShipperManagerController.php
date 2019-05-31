<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin\ShipperModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ShipperManagerController extends Controller
{
    public function index(){

        $items = DB::table('shippers')->paginate(2);
        /**
         *Đây là biến truyền từ Controller xuống view
         */
        $data=array();
        $data['shippers']=$items;
        return view('admin.content.shop.shipper.index',$data);
    }
    public function create(){
        /**
         *Đây là biến truyền từ Controller xuống view
         */
        $data=array();
        return view('admin.content.shop.shipper.submit',$data);
    }
    public function edit($id){
        /**
         *Đây là biến truyền từ Controller xuống view
         */
        $item=ShipperModel::find($id);
        $data['shipper']=$item;

        return view('admin.content.shop.shipper.edit',$data);
    }
    public function delete($id){
        /**
         *Đây là biến truyền từ Controller xuống view
         */
        $data=array();
        $item=shipperModel::find($id);
        $data['shipper']=$item;

        return view('admin.content.shop.shipper.delete',$data);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'email',
        ]);

        $input=$request->all();

        $item=new shipperModel();

        $item->name=$input['name'];
        $item->email=$input['email'];
        $item->save();
        return redirect('admin/shop/shipper');

    }
    public function update(Request $request,$id){
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'email',

        ]);

        $input=$request->all();

        $item=ShipperModel::find($id);
        $item->name=$input['name'];
        $item->email=$input['email'];

        $item->save();
        return redirect('admin/shop/shipper');
    }
    public function destroy($id){
        $item=ShipperModel::find($id);
        $item->delete();
        return redirect('admin/shop/shipper');
    }
}
