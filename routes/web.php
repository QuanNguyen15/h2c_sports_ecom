<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\ProductController;
use App\Http\Controllers\client\CartController;
use App\Http\Controllers\client\CheckoutController;
use App\Http\Controllers\admin\LoginAdmin;
use App\Http\Controllers\admin\LogoutAdmin;
use App\Http\Controllers\admin\ProductController as AdminProductController;
use App\Http\Controllers\admin\CategoriesController as AdminCategoriesController;
use App\Http\Controllers\admin\StatisticalsController;

use App\Http\Controllers\admin\AccountController as AdminAccountController;
use App\Http\Controllers\admin\OderController;
use App\Http\Controllers\admin\OrderController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// client
Route::get('/order-success', function () {
    return view('user.order-success');
})->name('order.success');

Route::post('/place-order', [CheckoutController::class, 'placeOrder'])->name('checkout.place-order');

Route::get('/checkout',  [CheckoutController::class, 'index'])->name('checkout.index');

Route::post('/add-cart', [CartController::class, 'add'])->name('cart.add');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');




    Route::get('/{title}', [ProductController::class, 'index'])->name('user.category-boxed');


Route::get('/product/{id}', [ProductController::class, 'productDetail'])->name('user.product-sidebar');


// admin

Route::get('/login', [LoginAdmin::class, 'login'])->name('login');

Route::post('/login', [LoginAdmin::class, 'postLoginAdmin'])->name('admins.login');

Route::middleware('admin')->prefix('/admin')->group(function() {

    Route::get('/', [LoginAdmin::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/logout-admin', [LogoutAdmin::class, 'logout'])->name('admins.logout');
 //Quản lí thống kê
    Route::get('/', [StatisticalsController::class, 'index'])->name('admins.thongke');


   //QUẢN LÍ DANH MỤC
    Route::resource('/danh-muc',AdminCategoriesController::class);

    //QUẢN LÍ SẢN PHẨM
    Route::resource('/san-pham',AdminProductController::class);
    Route::post('/products/delete-multiple',[AdminProductController::class, 'deleteMultiple'])->name('products.deleteMultiple');

    //QUẢN LÍ TÀI KHOẢN
    Route::get('/tai-khoan',[AdminAccountController::class, 'index'])->name('admins.account');
    Route::delete('/tai-khoan/{id}',[AdminAccountController::class, 'destroy'])->name('admins.destroy');

    // QUẢN LÍ ĐƠN HÀNG
    Route::get('/don-hang',[OrderController::class, 'index'])->name('admins.order');
    Route::get('/don-hang/{id}/show', [OrderController::class, 'show'])->name('admins.order.show');
    Route::put('/don-hang/{id}/update', [OrderController::class, 'update'])->name('orders.update');
    Route::post('search', [OrderController::class, 'index'])->name('user.search');



    Route::get('/khuyen-mai', function () {
        return view('admins.discount');
    })->name('admins.discount');
});




//check ket noi
Route::get('/dbcon', function () {
    return view('user.dbcon');
});



// client



// route product bán chạy
Route::get('/',[ProductController::class,'productBestSale'])->name('user.trangchu');



Route::get('/404-NOT-FOUNT', function () {
    return view('user.404');
})->name('user.404');

Route::get('/blog', function () {
    return view('user.blog-listing');
})->name('user.blog-listing');

// Route::get('/cart', function () {
//     return view('user.cart');
// })->name('user.cart');

// Route::get('/checkout', function () {
//     return view('user.checkout');
// })->name('user.checkout');

Route::get('/contact', function () {
    return view('user.contact');
})->name('user.contact');

Route::get('/comming-soon', function () {
    return view('user.comming-soon');
})->name('user.comming-soon');

Route::get('/about', function () {
    return view('user.about');
})->name('user.about');

// chinh sach kiem hang
Route::get('/chinh-sach-kiem-hang', function () {
    return view('user.kiemHang');
})->name('user.kiemHang');

// chinh sach bao hanh quan ao va phu kien
Route::get('/chinh-sach-bao-hanh-quan-ao-phu-kien', function () {
    return view('user.baoHanhQAPK');
})->name('user.baoHanhQAPK');


//chinh sach bao hanh giay
Route::get('/chinh-sach-bao-hanh-giay', function () {
    return view('user.baoHanhGiay');
})->name('user.baoHanhGiay');

//chinh sach bao hanh in an quan ao bong da
Route::get('/chinh-sach-bao-hanh-in-an-quan-ao-bong-da', function () {
    return view('user.baoHanhInAnQABD');
})->name('user.baoHanhInAnQABD');

//chinh sach doi hang
Route::get('/chinh-sach-doi-hang', function () {
    return view('user.doiHang');
})->name('user.doiHang');

//chinh sach van chuyen
Route::get('/chinh-sach-van-chuyen', function () {
    return view('user.vanChuyen');
})->name('user.vanChuyen');

//chinh sach thanh toán
Route::get('/chinh-sach-thanh-toan', function () {
    return view('user.thanhToan');
})->name('user.thanhToan');

//chính sách bảo mật thông tin
Route::get('/chinh-sach-bao-mat-thong-tin', function () {
    return view('user.baoMatThongTin');
})->name('user.baoMatThongTin');


