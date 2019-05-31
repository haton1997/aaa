<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin\ConfigModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ConfigController extends Controller
{
    public function index(){

        $items = DB::table('global_settings')->paginate(2);
        /**
         *Đây là biến truyền từ Controller xuống view
         */
        $data=array();
        $data['configs']=$items;
        return view('admin.content.config.index',$data);
    }
    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required',
            'value' => 'required',
            'default' => 'required',

        ]);

        $input=$request->all();

        $item=new ConfigModel();

        $item->name=$input['name'];
        $item->value=$input['value'];
        $item->default=$input['default'];
        $item->save();
        return redirect('admin/content/config');

    }
}
