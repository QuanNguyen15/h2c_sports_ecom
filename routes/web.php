<?php

use App\Http\Controllers\admin\CategoriesController as AdminCategoriesController;
use App\Http\Controllers\admin\StatisticalsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\admin\ProductController as AdminProductController;
use App\Http\Controllers\admin\AccountController as AdminAccountController;
use App\Http\Controllers\admin\OderController;
use App\Http\Controllers\admin\OrderController;
use Illuminate\Support\Facades\Route;

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
Route::prefix('/admin')->group(function (){

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
    Route::post('/don-hang', [OrderController::class, 'index'])->name('user.search');



    Route::get('/khuyen-mai', function () {
        return view('admins.discount');
    })->name('admins.discount');

    Route::get('/login', function () {
        return view('admins.login');
    })->name('admins.login');

});




//check ket noi
Route::get('/dbcon', function () {
    return view('user.dbcon');
});

Route::get('/sale', function () {
    return view('user.trangchu');
})->name('user.trangchu');




Route::get('/san-pham', function () {
    return view('user.category-boxed');
})->name('user.category-boxed');

Route::get('/home', function () {
    return view('user.trangchu');
})->name('user.trangchu');


Route::get('/404-NOT-FOUNT', function () {
    return view('user.404');
})->name('user.404');

Route::get('/blog', function () {
    return view('user.blog-listing');
})->name('user.blog-listing');

Route::get('/cart', function () {
    return view('user.cart');
})->name('user.cart');

Route::get('/checkout', function () {
    return view('user.checkout');
})->name('user.checkout');

Route::get('/contact', function () {
    return view('user.contact');
})->name('user.contact');

Route::get('/comming-soon', function () {
    return view('user.comming-soon');
})->name('user.comming-soon');

Route::get('/about', function () {
    return view('user.about');
})->name('user.about');

Route::get('/product-details', function () {
    return view('user.product-sidebar');
})->name('user.product-sidebar');
