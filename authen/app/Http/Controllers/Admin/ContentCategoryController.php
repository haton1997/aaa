<?php

namespace App\Http\Controllers\Admin;
use App\Model\Admin\ContentCategoryModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ContentCategoryController extends Controller
{
    public function index(){

        $items = DB::table('content_category')->paginate(2);
        /**
         *Đây là biến truyền từ Controller xuống view
         */
        $data=array();
        $data['cats']=$items;
        return view('admin.content.content.category.index',$data);
    }
    public function create(){
        /**
         *Đây là biến truyền từ Controller xuống view
         */
        $data=array();
        return view('admin.content.content.category.submit',$data);
    }
    public function edit($id){
        /**
         *Đây là biến truyền từ Controller xuống view
         */
        $item=ContentCategoryModel::find($id);
        $data['cat']=$item;
        return view('admin.content.content.category.edit',$data);
    }
    public function delete($id){
        /**
         *Đây là biến truyền từ Controller xuống view
         */
        $data=array();
        $item=ContentCategoryModel::find($id);
        $data['cat']=$item;
        return view('admin.content.content.category.delete',$data);
    }
    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'images' => 'required',
            'intro' => 'required',
            'desc' => 'required',
        ]);

        $input=$request->all();

        $item=new ContentCategoryModel();

        $item->name=$input['name'];
        $item->slug=$input['slug'];
        $item->images=$input['images'];
        $item->intro=$input['intro'];
        $item->desc=$input['desc'];
        $item->save();
        return redirect('admin/content/category');

    }
    public function update(Request $request,$id){

        $validatedData = $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'images' => 'required',
            'intro' => 'required',
            'desc' => 'required',
        ]);


        $input=$request->all();

        $item=ContentCategoryModel::find($id);

        $item->name=$input['name'];
        $item->slug=$input['slug'];
        $item->images=$input['images'];
        $item->intro=$input['intro'];
        $item->desc=$input['desc'];
        $item->save();
        return redirect('admin/content/category');
    }
    public function destroy($id){
        $item=ContentCategoryModel::find($id);
        $item->delete();
        return redirect('admin/content/category');

    }

}
