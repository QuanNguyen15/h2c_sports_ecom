<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

    Route::get('/trang-chu', function () {
        return view('admins.thongke');
    })->name('admins.thongke');

    Route::get('/san-pham', function () {
        return view('admins.product');
    })->name('admins.product');

    Route::get('/thong-ke', function () {
        return view('admins.thongke');
    })->name('admins.thongke');

    Route::get('/danh-muc', function () {
        return view('admins.categories');
    })->name('admins.categories');

    Route::get('/tai-khoan', function () {
        return view('admins.account');
    })->name('admins.account');

    Route::get('/don-hang', function () {
        return view('admins.order');
    })->name('admins.order');

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

Route::get('/', function () {
    return view('user.trangchu');
})->name('user.trangchu');




// Route::get('/san-pham', function () {
    
//     return view('user.category-boxed');
// })->name('user.category-boxed');

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



Route::prefix('san-pham')->group(function (){
      
    Route::get('/',[ProductController::Class,'Hien_Thi_San_Pham'])->name('user.category-boxed');
 
  

});