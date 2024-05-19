<?php

namespace App\Http\Controllers\client;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;


class ProductController extends Controller
{

    public function index($title)
    {
        $products = [];
        // $products = Product::all(); // Lấy tất cả sản phẩm từ model Product
        if(isset($title)){
           if($title === 'san-pham'){
            $title = "Cửa hàng";
            $products = Product::paginate(12);
           }

           else{
           
            $category = Categories::where('category', $title)->first();

            // Nếu tìm thấy category, lấy tất cả sản phẩm thuộc category đó và phân trang 12 sản phẩm mỗi trang
            if ($category) {

                $products = $category->product()->paginate(12);
            } else {
             
                $products = collect(); // Trả về một collection rỗng nếu không tìm thấy category
            }
        }
     
        }
      

        return view('user.category-boxed', compact('products','title')); // Truyền dữ liệu sản phẩm đến view viewproduct
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