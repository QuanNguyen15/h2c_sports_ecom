<?php

namespace App\Http\Controllers\admin;

use Illuminate\Routing\Controller;


use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AccountController extends Controller
{
    const PATH_VIEW = 'admins.accounts.';

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Quản lí tài khoản';
        $data = DB::table('users')->where('roleID',2)->orderBy('ID', 'desc')->paginate(5);
        return view(self::PATH_VIEW.__FUNCTION__,compact('data','title'));

    }

    public function destroy(string $id)
    {
        $cate = DB::table('users')->where('ID', $id)->delete();
        return back()->with('msg', 'Xóa thành công');
    }
}