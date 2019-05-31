<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin\CustomerModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CustomerManagerController extends Controller
{
    public function index(){

        $items = DB::table('users')->paginate(2);
        /**
         *Đây là biến truyền từ Controller xuống view
         */
        $data=array();
        $data['users']=$items;
        return view('admin.content.shop.customer.index',$data);
    }
    public function create(){
        /**
         *Đây là biến truyền từ Controller xuống view
         */
        $data=array();
        return view('admin.content.shop.customer.submit',$data);
    }
    public function edit($id){
        /**
         *Đây là biến truyền từ Controller xuống view
         */
        $item=CustomerModel::find($id);
        $data['user']=$item;

        return view('admin.content.shop.customer.edit',$data);
    }
    public function delete($id){
        /**
         *Đây là biến truyền từ Controller xuống view
         */
        $data=array();
        $item=CustomerModel::find($id);
        $data['user']=$item;

        return view('admin.content.shop.customer.delete',$data);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'email',
        ]);

        $input=$request->all();

        $item=new CustomerModel();

        $item->name=$input['name'];
        $item->email=$input['email'];
        $item->save();
        return redirect('admin/shop/customer');

    }
    public function update(Request $request,$id){
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'email',

        ]);

        $input=$request->all();

        $item=CustomerModel::find($id);
        $item->name=$input['name'];
        $item->email=$input['email'];

        $item->save();
        return redirect('admin/shop/customer');
    }
    public function destroy($id){
        $item=CustomerModel::find($id);
        $item->delete();
        return redirect('admin/shop/customer');
    }
}
