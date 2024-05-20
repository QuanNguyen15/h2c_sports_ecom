<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class LoginAdmin extends Controller
{
    public function login()
    {
        return view('admins.login');
    }

    public function postLoginAdmin(Request $request)
    {
        if(Auth::attempt(['account' => $request->account, 'password' => $request->password, 'roleID' => 1]))
        {
            // Đăng nhập thành công, lấy thông tin người dùng từ Auth
            $user = Auth::user();

            // Đặt loginID và user trong session
            $request->session()->put('loginID', $user->id);
            $request->session()->put('user', $user);

            $user = $request;
            // dd($user);
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()->with('error', 'Sai thông tin');
    }


    public function dashboard(Request $request)
    {
        $user = $request->session()->get('user');
        // dd($user);

        return view('admin.layout.index', compact('user'));

    }

}
