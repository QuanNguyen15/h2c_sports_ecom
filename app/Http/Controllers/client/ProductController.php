<?php

namespace App\Http\Controllers\client;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {

        // $products = Product::all(); // Lấy tất cả sản phẩm từ model Product
        $product = new Product();
        $products = $product->getAll();

        return view('user.products', compact('products')); // Truyền dữ liệu sản phẩm đến view viewproduct
    }




}


