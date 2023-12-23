<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Users;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function postLogin(Request $request){
        $email = $request->email;
        $password = $request->password;
        $remember = $request->has('remember') ? true : false;
    
        $credentials = [
            'email' => $email,
            'password' => $password,
        ];
    
        // Login admin success
        if (auth()->attempt($credentials) && auth()->user()->role === 'admin') {
            session(['loginAdmin' => true]);
            return redirect('/admin');
        }
        // Login user success
        else if (auth()->attempt($credentials)) {
            $user = DB::table('users')->where('email', $email)->first();
            session(['user' => $user]);
            session(['loginUser' => true]);
            return redirect('/');
        }
        // Login fail
        else {
            return redirect('/login')->with('loginError', 'Thông tin đăng nhập không chính xác.');
        }
    }
    
    

    public function register(){
        return view('register');
    }
    public function postRegister(Request $request){

        $existingUser = Users::where('email', $request->email)->first();
        if ($existingUser !== null) {
            // dd('Email đã tồn tại!');
            return redirect()->back()->with('failRegiter', 'Email đã tồn tại!')->withInput();
        }
        // Tạo một người dùng mới trong cơ sở dữ liệu
        $user = new Users();
        $user->email = $request->email;
        $user->password = bcrypt($request->password); // Băm mật khẩu trước khi lưu
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->save();
        // Chuyển hướng người dùng sau khi đăng ký thành công
        return redirect('/login')->with('successRegiter', 'Đăng ký thành công!');
    }


    public function logout()
    {
        Auth::logout();
        session(['user' => false]);
        session(['loginAdmin' => false]);
        return redirect('/login');
    }
}
