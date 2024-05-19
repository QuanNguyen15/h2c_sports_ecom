<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Shipping;
use Illuminate\Support\Facades\DB; // Add this line
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

        DB::beginTransaction();

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
                OrderDetail::create([
                    'orderID' => $order->id,
                    'productID' => $value['productID'],
                    'sizeID' => $value['size_id'],
                    'colorID' => $value['color_id'],
                    // 'discountID' => $value['discount_id'] ?? null,
                    // 'discountID' => '0',
                    'quantity' => $value['quantity'],
                    'sale_price' => $value['price']
                ]);

            }

            DB::commit();
            session()->forget('cart');
            // dd($order);
            return redirect()->route('order.success',['order' => $order])->with('success', 'Order placed successfully!');
            // return redirect()->view('user.order-success', compact('order'))->with('success', 'Order placed successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('checkout.index')->with('error', 'Something went wrong, please try again.');
        }

    }



}
