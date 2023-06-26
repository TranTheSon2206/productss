<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Đăng nhập thành công, chuyển hướng đến view admin
            return redirect()->route('admin');
        } else {
            // Đăng nhập thất bại, hiển thị thông báo lỗi
            return redirect()->back()->with('error', 'Incorrect username or password');
        }
    }
}
?>