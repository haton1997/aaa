<?php

namespace App\Http\Controllers;

use App\Model\SellerModel;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    /**
     * Hàm khởi tạo của class chay ngay khi khởi tạo đối tương;
     * Hàm này luôn chạy trước các hàm khác trong class
     * sellerController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth:seller')->only('index');
    }
    /**
     *  Phương thức trả về view khi đăng nhập seller thành công
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index(){


        return view('seller.dasboard');
    }
    /**
     * Phuowng thức trả về view dung để đăng kí tài khoản seller
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(){
        return view('seller.auth.register');
    }
    public function store(Request $request )
    {
//        validate dữ liệu đc gửi từ form gửi đi
        $this->validate($request,array(
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ));
//        Khởi tạo model để lưu admin mới
        $sellerModel=new SellerModel();
        $sellerModel->name=$request->name;
        $sellerModel->email=$request->email;
        $sellerModel->password=bcrypt($request->password) ;
        $sellerModel->save();

        return redirect()->route('seller.auth.login');
    }
}
