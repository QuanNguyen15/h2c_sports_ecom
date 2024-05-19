<?php

namespace App\Http\Controllers\admin;

use App\Models\Orders;
use Illuminate\Routing\Controller;
use ConsoleTVs\Charts\Charts;


use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class StatisticalsController extends Controller
{
    const PATH_VIEW = 'admins.statisticals.';
    public function index()
    {
        $title = 'Quản lí thống kê';
        $products = DB::table('product')->count();

        $orders = DB::table('orders')->count();
        $revenue = DB::table('orders')->sum('total_pay');


    return view(self::PATH_VIEW.__FUNCTION__, compact('products', 'orders', 'revenue','title'));

    }
}
