<?php

namespace App\Helper;


class Cart
{
    private $items = [];
    private $total_quantity = 0;
    private $total_price = 0;

    public function __construct()
    {
        $this->items = session('cart') ? session('cart') : [];

    }

    // lấy danh sách sản phẩm trong giỏ hàng
    public function list()
    {
        return $this->items;
    }

    // thêm sản phẩm mới vào giỏ hàng
    // public function add($product, $colors, $sizes, $quantity = 1)
    public function add($product, $color, $size, $quantity = 1)
    {
        $item = [
            'productID' => $product->ID,
            'name' => $product->name,
            'category' => $product->category->category,
            'price' => $product->price,
            'image' => $product->image,
            'quantity' => $quantity,
            'color' => $color->color,
            'size' => $size->size
        ];

        // dd($item);

        $this->items[$product->ID] = $item;
        session(['cart'=>$this->items]);
    }


    // cập nhật giỏ hàng

    // xóa sản phẩm khỏi giỏ hàng

    // xóa hết sản phẩm khỏi giỏ hàng

    // phương thức lấy tổng tiền
    public function getTotalProductPrice()
    {
        $totalProductPrice = 0;
        foreach($this->items as $item)
        {
            $totalProductPrice += $item['price']*$item['quantity'];
        }
        return $totalProductPrice;
    }

    public function getShippingFee($totalProductPrice)
    {
        if ($totalProductPrice >= 1000000) {
            return 0; // Miễn phí vận chuyển
        }
        return 30000; // Phí vận chuyển 30000 đồng
    }

    public function getTotalQuantity()
    {
        $totalQuantity = 0;
        foreach($this->items as $item)
        {
            $totalQuantity += $item['quantity'];
        }

        return $totalQuantity;

    }



}