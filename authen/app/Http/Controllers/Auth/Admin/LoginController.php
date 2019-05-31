<?php

namespace App\Http\Controllers\Auth\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
    /*
     * PT tra về view dung để đăng nhập admin*/
    public function login()
    {
        return view('admin.auth.login');

    }
    /*
     * Phương thức đăng nhập admin
     * LẤy thông tin từ form có method là POST
     * */
    public function loginAdmin(Request $request){
        $this->validate($request,array(
           'email'=>'required|email',
           'password'=>'required|min:6',
        ));
        // Đăng nhập
        if (Auth::guard('admin')->attempt(
            ['email' => $request->email, 'password' => $request->password],  $request->remember
        )) {
            // nếu đăng nhập thành công thì chuyển hướng về view dashboard của admin
            return redirect()->intended(route('admin.dasboard'));
        }

        // nếu đăng nhập thất bại thì quay trở về form đăng nhập
        // với giá trị của 2 ô input cũ là email và remember
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
    /**
     * Phương thức đăng xuất
     */
    public function logoutAdmin(){
        Auth::guard('admin')->logout();

        // chuyển hướng về trang login của admin
        return redirect()->route('admin.auth.login');
    }

}
