<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserAccount;
use Illuminate\Http\RedirectResponse;
use Validator;


class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function postLoginAdmin(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'account' => 'required|string',
            'password' => 'required|string',
        ]);

        // Thêm điều kiện 'role' vào mảng credentials
        $credentials['roleID'] = 1;

        // Tìm người dùng dựa trên tên tài khoản được cung cấp
        $user = UserAccount::where('account', $credentials['account'])
                           ->where('roleID', $credentials['roleID'])
                           ->first();

        // Kiểm tra nếu người dùng tồn tại và mật khẩu khớp
        if ($user && $user->password === $credentials['password']) {
            // Xác thực người dùng bằng cách thủ công
            Auth::login($user);

            $request->session()->regenerate();

            return redirect()->route('admin.dashboard');
        }

        // Nếu xác thực thất bại, chuyển hướng lại với thông báo lỗi
        return back()->with('fail', 'Account not exist!');
    }



    public function dashboard()
    {
        return view('admin.layout.index');
    }

    // public function logout()
    // {
    //     Auth::logout(); // Đăng xuất người dùng

    //     return redirect()->route('login'); // Chuyển hướng về trang đăng nhập ban đầu
    // }


}
