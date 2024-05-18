<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Kiểm tra xem người dùng đã đăng nhập và có vai trò là admin hay không
        if (Auth::check() && Auth::user()->roleID == 1) {
            // Nếu là admin, tiếp tục thực thi request
            // dd("đã xác thực là đăng nhập");
            return $next($request);
        }
        // Nếu không phải admin hoặc chưa đăng nhập, chuyển hướng về trang đăng nhập
        // dd("xác thực là cần đăng nhập");
        return redirect()->route('login');
    }

}
