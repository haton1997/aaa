<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin\AdminModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminManagerController extends Controller
{
    public function index(){

        $items = DB::table('admins')->paginate(2);
        /**
         *Đây là biến truyền từ Controller xuống view
         */
        $data=array();
        $data['admins']=$items;
        return view('admin.content.users.index',$data);
    }
    public function create(){
        /**
         *Đây là biến truyền từ Controller xuống view
         */
        $data=array();
        return view('admin.content.users.submit',$data);
    }
    public function edit($id){
        /**
         *Đây là biến truyền từ Controller xuống view
         */
        $item=AdminModel::find($id);
        $data['admin']=$item;

        return view('admin.content.users.edit',$data);
    }
    public function delete($id){
        /**
         *Đây là biến truyền từ Controller xuống view
         */
        $data=array();
        $item=AdminModel::find($id);
        $data['admin']=$item;

        return view('admin.content.users.delete',$data);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $input=$request->all();

        $item=new AdminModel();

        $item->name=$input['name'];
        $item->email=$input['email'];

        $item->save();
        return redirect('admin/users');

    }
    public function update(Request $request,$id){
//        $validatedData = $request->validate([
//            'name' => 'required',
//            'email' => 'required',
//
//
//        ]);
//
//        $input=$request->all();
//
//        $item=AdminModel::find($id);
//        $item->name=$input['name'];
//        $item->email=$input['email'];
//
//
//        $item->save();
//        return redirect('admin/users');
    }
    public function destroy($id){
//        $item=AdminModel::find($id);
//        $item->delete();
//        return redirect('admin/users');
    }
}
