<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use JetBrains\PhpStorm\NoReturn;
use Ramsey\Uuid\Rfc4122\Validator;
use mysql_xdevapi\Session;

class LoginAdmin extends Controller
{
    public function login(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
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

//            $user = $request;
            // dd($user);
//            return redirect()->route('admin.dashboard');
            return view('admin.layout.index', compact('user'));

        }

        return redirect()->back()->with('error', 'Sai thông tin');
    }


    #[NoReturn] public function dashboard(Request $request): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $user = $request->session()->get('user');
//         dd($user);

        return view('admin.layout.index', compact('user'));
    }

}
