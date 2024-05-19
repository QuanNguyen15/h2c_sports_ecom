<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\Cart;
use App\Models\product;
use App\Models\productInventory;
use App\Models\productColor;
use App\Models\productSize;


class CartController extends Controller
{
    public function index(Cart $cart)
    {
        // dd($cart->list());
        // $cartItems = $cart->list();
        // dd($cartItems);
        $totalProductPrice = $cart->getTotalProductPrice(); // Giả sử $cart là đối tượng giỏ hàng của bạn
        $shippingFee = $cart->getShippingFee($totalProductPrice);


        return view('user.cart', compact('cart','totalProductPrice','shippingFee'));

    }

    public function cartInMenu(Cart $cart)
    {
        return view('user.index-21', compact('cart'));
    }



    public function add(Request $request, Cart $cart)
    {
        // dd($request->all());
        // $para = new Product();
        // $product = $para->getById($request->id);
        $product = Product::with('category')->findOrFail($request->id);

        $para2 = new ProductColor();
        $color = $para2->getById($request->color);

        $para3 = new ProductSize();
        $size = $para3->getById($request->size);

        $quantity = $request->quantity;
        // $cart->add($product, $colors, $sizes, $quantity);
        $cart->add($product, $color, $size, $quantity);

        // dd($cart);


        return redirect()->route('cart.index');
    }


}