<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin\MenuItemsModel;
use App\Model\Admin\MenuModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MenuItemsController extends Controller
{
    public function index(){

        $items = DB::table('menu_items')->paginate(2);
        /**
         *Đây là biến truyền từ Controller xuống view
         */
        $data=array();
        $data['menuitems']=$items;
        return view('admin.content.menuitems.index',$data);
    }
    public function create(){
        /**
         *Đây là biến truyền từ Controller xuống view
         */
        $data=array();
        $data['types']=MenuItemsModel::getTypeMenuItem();
        $data['menu_items']=MenuModel::all();
        return view('admin.content.menuitems.submit',$data);
    }
    public function edit($id){
        /**
         *Đây là biến truyền từ Controller xuống view
         */
        $item=MenuItemsModel::find($id);
        $data['menuitem']=$item;

        return view('admin.content.menuitems.edit',$data);
    }
    public function delete($id){
        /**
         *Đây là biến truyền từ Controller xuống view
         */
        $data=array();
        $item=MenuItemsModel::find($id);
        $data['menuitem']=$item;

        return view('admin.content.menuitems.delete',$data);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'menu_id' => 'required',
        ]);

        $input=$request->all();

        $item=new MenuModel();

        $item->name=$input['name'];
        $item->type=isset($input['type'])?$input['type']:'';
        $item->params=isset($input['params'])?$input['params']:'';
        $item->link=isset($input['link'])?$input['link']:'';
        $item->icon=isset($input['icon'])?$input['icon']:'';;
        $item->desc=$input['desc'];
        $item->parent_id =isset($input['parent_id'])?$input['parent_id']:'';
        $item->menu_id=isset($input['menu_id'])?$input['menu_id']:'';

        $item->save();
        return redirect('admin/menuitems');

    }
    public function update(Request $request,$id){
        $validatedData = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'params' => 'required',
            'desc' => 'required',
            'menu_id' => 'required',

        ]);

        $input=$request->all();

        $item=MenuItemsModel::find($id);
        $item->name=$input['name'];
        $item->type=isset($input['type'])?$input['type']:'';
        $item->params=isset($input['params'])?$input['params']:'';
        $item->link=isset($input['link'])?$input['link']:'';
        $item->icon=isset($input['icon'])?$input['icon']:'';;
        $item->desc=$input['desc'];
        $item->parent_id =isset($input['parent_id'])?$input['parent_id']:'';
        $item->menu_id=isset($input['menu_id'])?$input['menu_id']:'';

        $item->save();
        return redirect('admin/menuitems');
    }
    public function destroy($id){
        $item=MenuItemsModel::find($id);
        $item->delete();
        return redirect('admin/menuitems');
    }}
