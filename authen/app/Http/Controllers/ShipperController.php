<?php

namespace App\Http\Controllers;
use App\Model\ShipperModel;
use Illuminate\Http\Request;

class ShipperController extends Controller
{
    /**
     * Hàm khởi tạo của class chay ngay khi khởi tạo đối tương;
     * Hàm này luôn chạy trước các hàm khác trong class
     * sellerController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth:shipper')->only('index');
    }
    /**
     *  Phương thức trả về view khi đăng nhập seller thành công
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index(){


        return view('shipper.dasboard');
    }
    /**
     * Phuowng thức trả về view dung để đăng kí tài khoản seller
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(){
        return view('shipper.auth.register');
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
        $shipperModel=new ShipperModel();
        $shipperModel->name=$request->name;
        $shipperModel->email=$request->email;
        $shipperModel->password=bcrypt($request->password) ;
        $shipperModel->save();

        return redirect()->route('shipper.auth.login');
    }
}
