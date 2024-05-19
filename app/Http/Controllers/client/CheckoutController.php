<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Shipping;
use Auth;


class CheckoutController extends Controller
{
    public function index(Cart $cart)
    {
        // dd($cart->list());
        // $cartItems = $cart->list();
        // dd($cartItems);
        $totalProductPrice = $cart->getTotalProductPrice(); // Giả sử $cart là đối tượng giỏ hàng của bạn
        $shippingFee = $cart->getShippingFee($totalProductPrice);


        return view('user.checkout', compact('cart','totalProductPrice','shippingFee'));

    }

    public function placeOrder(Request $request, Cart $cart)
    {
        // dd($cart);
        if (empty($cart)) {
            return redirect()->route('user.category-boxed')->with('error', 'Your cart is empty!');
        }

        // DB::beginTransaction();

        // try {
        //     $shipping = Shipping::create([
        //         'full_name' => $request->input('full_name'),
        //         'address' => $request->input('address'),
        //         'phone_num' => $request->input('phone_num'),
        //         'email' => $request->input('email'),
        //         'note' => $request->input('note')
        //     ]);

        //     $order = Order::create([
        //         'userID' => Auth::id(),
        //         // 'total_pay' => array_sum(array_column($cartItems, 'total')),
        //         'total_pay' => array_sum(array_column($cart, 'total')),
        //         // 'pay_method' => $request->input('pay_method'),
        //         'pay_method' => 'COD',
        //         'status' => 'pending',
        //         'shipID' => $shipping->id
        //     ]);

        //     foreach ($cart as $item) {
        //         OrderDetail::create([
        //             'orderID' => $order->id,
        //             'productID' => $item['product_id'],
        //             'sizeID' => $item['size_id'],
        //             'colorID' => $item['color_id'],
        //             'discountID' => $item['discount_id'],
        //             'quantity' => $item['quantity'],
        //             'sale_price' => $item['price']
        //         ]);
        //     }
        //     dd($shipping);



        //     DB::commit();
        //     session()->forget('cart');
        //     return "Đặt hàng thành công";
        //     // return redirect()->route('orders.show', $order)->with('success', 'Order placed successfully!');
        // } catch (\Exception $e) {
        //     DB::rollBack();
        //     return redirect()->route('checkout.index')->with('error', 'Something went wrong, please try again.');
        // }


        // Bắt đầu transaction
        try {
            // Tạo bản ghi Shipping
            $shipping = Shipping::create([
                'full_name' => $request->input('full_name'),
                'address' => $request->input('address'),
                'phone_num' => $request->input('phone_num'),
                'email' => $request->input('email'),
                'note' => $request->input('note')
            ]);

            // dd($shipping);

            $userId = Auth::id() ?? null; // Kiểm tra nếu không có Auth::id() thì gán null

            $totalProductPrice = $cart->getTotalProductPrice(); // Giả sử $cart là đối tượng giỏ hàng của bạn
            $shippingFee = $cart->getShippingFee($totalProductPrice);
            $total_pay = $totalProductPrice + $shippingFee;

            // Tạo bản ghi Order
            $order = Order::create([
                'userID' => $userId,
                'total_pay' => $total_pay,
                'pay_method' => 'COD',
                'status' => 'pending',
                'shipID' => $shipping->id,
                'updated_at' => null
            ]);

            // Tạo các bản ghi OrderDetail
            foreach ($cart->list() as $key => $value) {
                $para = OrderDetail::create([
                    'orderID' => $order->id,
                    'productID' => $value['product_id'],
                    'sizeID' => $value['size_id'],
                    'colorID' => $value['color_id'],
                    'discountID' => $value['discount_id'] ?? null,
                    'quantity' => $value['quantity'],
                    'sale_price' => $value['price']
                ]);
                dd($para);

            }

            // Commit transaction

        } catch (\Exception $e) {
            // Rollback transaction nếu có lỗi
            dd($e->getMessage());
        }


    }



}
