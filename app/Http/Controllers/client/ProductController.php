<?php

namespace App\Http\Controllers\client;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Pagination\Paginator;


class ProductController extends Controller
{
  
    public function index()
    {
      $products = collect();
      $title = "Cửa hàng";

      $products = Product::paginate(12); // Lấy tất cả sản phẩm từ model Product
        
        
        return view('user.category-boxed', compact('products','title')); 


      
        

   
    
        
        
        
        




           
        
       
     
        
      

    }
    public function Giay(){
         
       
            $title = "Giày bóng đá";
            $categories_brand = ['Puma', 'Nike', 'Adidas','Mizuno'];

            
            $products = Product::whereHas('category', function ($query) use ($categories_brand) {
                $query->whereIn('category', $categories_brand);
            })->paginate(12);
            return view('user.category-boxed', compact('products','title')); 
    }
    public function Ao(){
         
       
                   $title = "Áo bóng đá";
            $products = Product::whereHas('category', function ($query) {
                $query->where('category', 'like', 'Áo%');
            })->paginate(12);
            return view('user.category-boxed', compact('products','title')); 

 }
 public function Ao_Cau_Doi_Tuyen_Quoc_Gia(){
         
       
    $title = "Áo đội tuyển quốc gia";
    $products = Product::whereHas('category', function ($query) {
 $query->where('category', 'Áo đội tuyển quốc gia');
})->paginate(12);
return view('user.category-boxed', compact('products','title')); 

}
public function Ao_ngoai_hang_anh(){
         
       
    $title = "Áo ngoại hạng anh";
$products = Product::whereHas('category', function ($query) {
 $query->where('category', 'Áo ngoại hạng anh');
})->paginate(12);
return view('user.category-boxed', compact('products','title')); 

}
public function Ao_thiet_ke_theo_yeu_cau(){
         
       
    $title = "Áo thiết kế theo yêu cầu";
$products = Product::whereHas('category', function ($query) {
 $query->where('category', 'Áo thiết kế theo yêu cầu');
})->paginate(12);
return view('user.category-boxed', compact('products','title')); 

}
public function Puma(){
         
       
    $title = "Puma";
$products = Product::whereHas('category', function ($query) {
 $query->where('category', 'Puma');
})->paginate(12);
return view('user.category-boxed', compact('products','title')); 

}
public function Adidas(){
         
       
    $title = "Adidas";
$products = Product::whereHas('category', function ($query) {
 $query->where('category', 'Adidas');
})->paginate(12);
return view('user.category-boxed', compact('products','title')); 

}
public function Nike(){
         
       
    $title = "Nike";
$products = Product::whereHas('category', function ($query) {
 $query->where('category', 'Nike');
})->paginate(12);
return view('user.category-boxed', compact('products','title')); 

}
public function PhuKien(){
         
       
    $title = "Phụ kiện";
$products = Product::whereHas('category', function ($query) {
 $query->where('category', 'Phụ kiện');
})->paginate(12);
return view('user.category-boxed', compact('products','title')); 

}




    public function productDetail($id)
    {
        $para = new Product();
        $product = $para->getById($id);
      return view('user.product-sidebar',compact('product'));
      
    }
    public function productBestSale(){
        $productbestsale = Product::where('featured', '1')->get();
        $categories = ['Áo đội tuyển quốc gia', 'Giày', 'Phụ kiện'];
        $NewproductsAll =  Product::select('product.*')
        ->join('categories', 'product.categoryID', '=', 'categories.ID')
        ->whereIn('categories.category', $categories)
        ->orderBy('product.ID', 'desc')
        ->take(10)
        ->get();
        $khuyen_mai = Product::select('product.*')
        ->join('categories', 'product.categoryID', '=', 'categories.ID')
        ->whereIn('categories.category',['Puma'])
        ->orderBy('product.ID', 'desc')
        ->take(3)
        ->get();
        return view('user.trangchu', compact('productbestsale','NewproductsAll','khuyen_mai'));
       

    }
   
  
}