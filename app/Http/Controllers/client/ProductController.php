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
        $products = Product::paginate(12);

        return view('user.category-boxed', compact('products')); // Truyền dữ liệu sản phẩm đến view viewproduct
    }

    public function productDetail($id)
    {
        $para = new Product();
        $product = $para->getById($id);
        return view('user.product-sidebar', compact('product'));
    }
    public function productBestSale(){
        $productbestsale = Product::where('featured', '1')->get();
    
       
        return view('user.trangchu', compact('productbestsale'));
    }
 
}