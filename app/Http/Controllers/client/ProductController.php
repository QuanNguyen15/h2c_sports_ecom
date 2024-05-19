<?php

namespace App\Http\Controllers\client;

use App\Models\product;
use App\Models\ProductColor;
use App\Models\ProductSize;
use App\Models\ProductInventory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ProductController extends Controller
{

    public function index()
    {
        // $products = Product::all(); // Lấy tất cả sản phẩm từ model Product
        $product = new product();
        $products = product::paginate(12);

        return view('user.category-boxed', compact('products')); // Truyền dữ liệu sản phẩm đến view viewproduct
    }

    public function productDetail($id)
    {
        $para = new product();
        $product = $para->getById($id);

        $para1 = new ProductInventory();
        $inventory = $para1->getByProductID($id);

        $para2 = new ProductInventory();
        $colors = $para2->getDistinctColorsByProductID($id);

        $para3 = new ProductInventory();
        $sizes = $para3->getDistinctSizesByProductID($id);
        // dd($sizes);

        return view('user.product-sidebar', compact('product', 'inventory', 'colors', 'sizes'));
        // return view('user.testProduct', compact('product', 'inventory', 'colors', 'sizes'));

    }
    public function productBestSale(){
        $productbestsale = product::where('featured', '1')->get();


        return view('user.trangchu', compact('productbestsale'));
    }

}
