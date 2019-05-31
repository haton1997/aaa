<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin\SellerModel;
use App\Model\Admin\ShipperModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SellerManagerController extends Controller
{
    public function index(){

        $items = DB::table('sellers')->paginate(2);
        /**
         *Đây là biến truyền từ Controller xuống view
         */
        $data=array();
        $data['sellers']=$items;
        return view('admin.content.shop.seller.index',$data);
    }
    public function create(){
        /**
         *Đây là biến truyền từ Controller xuống view
         */
        $data=array();
        return view('admin.content.shop.seller.submit',$data);
    }
    public function edit($id){
        /**
         *Đây là biến truyền từ Controller xuống view
         */
        $item=SellerModel::find($id);
        $data['seller']=$item;

        return view('admin.content.shop.seller.edit',$data);
    }
    public function delete($id){
        /**
         *Đây là biến truyền từ Controller xuống view
         */
        $data=array();
        $item=SellerModel::find($id);
        $data['seller']=$item;

        return view('admin.content.shop.seller.delete',$data);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'email',
        ]);

        $input=$request->all();

        $item=new SellerModel();

        $item->name=$input['name'];
        $item->email=$input['email'];
        $item->save();
        return redirect('admin/shop/seller');

    }
    public function update(Request $request,$id){
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'email',

        ]);

        $input=$request->all();

        $item=SellerModel::find($id);
        $item->name=$input['name'];
        $item->email=$input['email'];

        $item->save();
        return redirect('admin/shop/seller');
    }
    public function destroy($id){
        $item=SellerModel::find($id);
        $item->delete();
        return redirect('admin/shop/seller');
    }
}
