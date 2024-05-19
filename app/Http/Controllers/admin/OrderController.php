<?php

namespace App\Http\Controllers\admin;

use App\Models\Orders;
use Illuminate\Routing\Controller;


use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    const PATH_VIEW = 'admins.orders.';
    public function index(Request $request)
    {
        $title = 'Quản lí đơn hàng';

        $data = Orders::query()->latest()->paginate(5);
        $query = $request->input('query');

        if ($query) {

            $data = Orders::query()->whereDate('created_at', $query)->latest()->paginate(5);
        } else {

            $data = Orders::query()->latest()->paginate(5);
        }
        $shippingData = [];
        foreach($data as $datas){
            // dd($datas);
            $shipping = DB::table('shipping')->where('ID',$datas->shipID)->first();
            if ($shipping) {
                $shippingData[] = $shipping;
            }
        }


        if ($request->has('status')) {
            if($request->status == 0){
                $data = Orders::query()->where('status', $request->status)->latest()->paginate(5);
            } elseif ($request->status == 1) {
                $data = Orders::query()->where('status', $request->status)->latest()->paginate(5);
            } elseif ($request->status == 2) {
                $data = Orders::query()->where('status', $request->status)->latest()->paginate(5);
            } else {
                $data = Orders::query()->latest()->paginate(5);
            }
        }
        return view(self::PATH_VIEW.__FUNCTION__,compact('data','title','shippingData'));

    }
    public function update(Request $request, $id)
    {
        $product = orders::find($id);

        if ($product) {
            if ($product->status == 0) {
                $product->status = $request->status;
                DB::table('orders')->where('ID', $id)->update(['status' => $product->status]);

                return redirect()->back()->with('success', 'Cập nhật trạng thái sản phẩm thành công');
            } else {
                return redirect()->back()->with('error', 'Không thể cập nhật trạng thái sản phẩm');
            }
        } else {
            return redirect()->back()->with('error', 'Không tìm thấy sản phẩm');
        }

    }

    public function show(string $id)
    {
        $title = 'Quản lí đơn hàng';


        $order = orders::where('id',$id)->get()[0];
        // dd($order);
        // $data = DB::table('order_detail')->where('orderID',$oder->id)->get();
        if ($order) {
            $data = DB::table('order_detail')->where('orderID', $order->ID)->get();
            // dd($data);
            $products = [];
            foreach ($data as $detail) {
                $product = DB::table('product')->where('ID', $detail->productID)->first();
                if ($product) {
                    $product->totalPrice = $detail->quantity * $product->price; // Tính tổng tiền của từng sản phẩm
                    $products[] = $product;
                }
            }

            return view(self::PATH_VIEW . __FUNCTION__, compact('data', 'title', 'products'));
        } else {
            return redirect()->back()->with('error', 'Không tìm thấy đơn hàng');
        }


        return view(self::PATH_VIEW.__FUNCTION__,compact('data','title'));

    }
}
