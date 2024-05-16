<?php

namespace App\Http\Controllers\admin;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Validator;

class LogoutAdmin extends Controller
{
    public function logout(Request $request)
    {
        Auth::logout();
        // Xóa toàn bộ dữ liệu người dùng trong Auth
        // Xóa phiên làm việc của người dùng
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Chuyển hướng người dùng về trang đăng nhập
        return redirect()->route('login');

    }

}
