<?php

namespace App\Http\Controllers\client;

use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductSize;
use App\Models\ProductInventory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Pagination\Paginator;


class ProductController extends Controller
{
  
    public function index($title)
    {
        $products = collect();

        // $products = Product::all(); // Lấy tất cả sản phẩm từ model Product
        if($title === "Áo" || $title === "Giày" || $title === "Phụ kiện" || $title === "Áo đội tuyển quốc gia" ||$title === "Áo đội tuyển quốc gia"
        || $title === "Áo thiết kế theo yêu cầu" || $title === "Áo ngoại hạng anh" || $title === "Puma" || $title === "Mizuno" ||$title === "Adidas" ||$title === "Nike" ){
          
           if($title === 'Áo'){
            $title = "Áo bóng đá";
            $products = Product::whereHas('category', function ($query) {
                $query->where('category', 'like', 'Áo%');
            })->paginate(12);
            return view('user.category-boxed', compact('products','title')); // Truyền dữ liệu sản phẩm đến view viewproduct

           }

           elseif($title === 'Giày'){
            $title = "Giày bóng đá";
            $categories_brand = ['Puma', 'Nike', 'Adidas','Mizuno'];

            // Lấy tất cả sản phẩm có category_name thuộc danh sách trên và phân trang 12 sản phẩm mỗi trang
            $products = Product::whereHas('category', function ($query) use ($categories_brand) {
                $query->whereIn('category', $categories_brand);
            })->paginate(12);
            return view('user.category-boxed', compact('products','title')); // Truyền dữ liệu sản phẩm đến view viewproduct

            
           }
            
           elseif($title === 'Áo đội tuyển quốc gia'){
            $title = "Áo đội tuyển quốc gia";
        

            // Lấy tất cả sản phẩm có category_name thuộc danh sách trên và phân trang 12 sản phẩm mỗi trang
            $products = Product::whereHas('category', function ($query) {
                $query->where('category', 'Áo đội tuyển quốc gia');
            })->paginate(12);
            return view('user.category-boxed', compact('products','title')); // Truyền dữ liệu sản phẩm đến view viewproduct

           }
           elseif($title === 'Áo thiết kế theo yêu cầu'){
            $title = "Áo thiết kế theo yêu cầu";
        

            // Lấy tất cả sản phẩm có category_name thuộc danh sách trên và phân trang 12 sản phẩm mỗi trang
            $products = Product::whereHas('category', function ($query) {
                $query->where('category', 'Áo thiết kế theo yêu cầu');
            })->paginate(12);
            return view('user.category-boxed', compact('products','title')); // Truyền dữ liệu sản phẩm đến view viewproduct

           }
           elseif($title === 'Áo ngoại hạng anh'){
            $title = "Áo ngoại hạng anh";
        

            // Lấy tất cả sản phẩm có category_name thuộc danh sách trên và phân trang 12 sản phẩm mỗi trang
            $products = Product::whereHas('category', function ($query) {
                $query->where('category', 'Áo ngoại hạng anh');
            })->paginate(12);
            return view('user.category-boxed', compact('products','title')); // Truyền dữ liệu sản phẩm đến view viewproduct

           }
           elseif($title === 'Puma'){
            $title = "Puma";
        

            // Lấy tất cả sản phẩm có category_name thuộc danh sách trên và phân trang 12 sản phẩm mỗi trang
            $products = Product::whereHas('category', function ($query) {
                $query->where('category', 'Puma');
            })->paginate(12);
            return view('user.category-boxed', compact('products','title')); // Truyền dữ liệu sản phẩm đến view viewproduct

           }
           elseif($title === 'Adidas'){
            $title = "Adidas";
        

            // Lấy tất cả sản phẩm có category_name thuộc danh sách trên và phân trang 12 sản phẩm mỗi trang
            $products = Product::whereHas('category', function ($query) {
                $query->where('category', 'Adidas');
            })->paginate(12);
            return view('user.category-boxed', compact('products','title')); // Truyền dữ liệu sản phẩm đến view viewproduct

           }
           elseif($title === 'Nike'){
            $title = "Nike";
        

            // Lấy tất cả sản phẩm có category_name thuộc danh sách trên và phân trang 12 sản phẩm mỗi trang
            $products = Product::whereHas('category', function ($query) {
                $query->where('category', 'Nike');
            })->paginate(12);
            return view('user.category-boxed', compact('products','title')); // Truyền dữ liệu sản phẩm đến view viewproduct

           }


           
           
           elseif($title === 'Phụ kiện'){
            $title = "Phụ kiện";
        

            // Lấy tất cả sản phẩm có category_name thuộc danh sách trên và phân trang 12 sản phẩm mỗi trang
            $products = Product::whereHas('category', function ($query) {
                $query->where('category', 'Phụ kiện');
            })->paginate(12);
            return view('user.category-boxed', compact('products','title')); // Truyền dữ liệu sản phẩm đến view viewproduct

           }
        }
           else{
           if($title === "about"){
            return view("user.about");
           }
           if($title === "san-pham"){
            $title = "Cửa hàng";
            $products = Product::paginate(12);
            return view('user.category-boxed', compact('products','title'));
           }
           elseif($title === "contact"){
            return view("user.contact");
           }
           elseif($title === "blog"){
            return view("user.blog-listing");
           }
           elseif($title === "chinh-sach-bao-hanh-quan-ao-phu-kien"){
            return view("user.baohanhQAPK");
           }
           elseif($title === "chinh-sach-kiem-hang"){
            return view("user.kiemHang");
           }
           elseif($title === "chinh-sach-bao-hanh-giay"){
            return view("user.baohanhGiay");
           }
           elseif($title === "chinh-sach-bao-hanh-in-an-quan-ao-bong-da"){
            return view("user.baohanhInAnQABD");
           }
           elseif($title === "chinh-sach-doi-hang"){
            return view("user.doiHang");
           }
           elseif($title === "chinh-sach-van-chuyen"){
            return view("user.vanChuyen");
           }
           elseif($title === "chinh-sach-thanh-toan"){
            return view("user.thanhToan");
           }
           elseif($title === "chinh-sach-bao-mat-thong-tin"){
            return view("user.baoMatThongTin");
           }
           elseif($title === "cart"){
            return view("user.cart");
           }
           elseif($title === "checkout"){
            return view("user.checkout");
           }
           elseif($title === "about.blade.php"){
            return view("user.about");
           }
        
        
        
        
        




           
        }
       
     
        
      

    }

    public function productDetail($id)
    {
        $para = new Product();
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
        $productbestsale = Product::where('featured', '1')->get();
    
       
        return view('user.trangchu', compact('productbestsale'));
    }
 
}