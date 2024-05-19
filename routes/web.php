<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\ProductController;
use App\Http\Controllers\admin\LoginAdmin;
use App\Http\Controllers\admin\LogoutAdmin;
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



  



Route::get('/product/{id}', [ProductController::class, 'productDetail'])->name('user.product-sidebar');


// admin

Route::get('/login', [LoginAdmin::class, 'login'])->name('login');

Route::post('/login', [LoginAdmin::class, 'postLoginAdmin'])->name('admins.login');

Route::middleware('admin')->prefix('/admin')->group(function() {

Route::get('/', [LoginAdmin::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/logout-admin', [LogoutAdmin::class, 'logout'])->name('admins.logout');

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



});




//check ket noi
Route::get('/dbcon', function () {
    return view('user.dbcon');
});



// client



// route product bán chạy
Route::get('/san-pham',[ProductController::class,'index'])->name('cuahang');
Route::get('/',[ProductController::class,'productBestSale'])->name('user.trangchu');
Route::get('san-pham/Áo-bóng-đá',[ProductController::class,'Ao'])->name('Ao');
Route::get('san-pham/Giày-bóng-đá',[ProductController::class,'Giay'])->name('Giay');
Route::get('san-pham/Ao-doi-tuyen-quoc-gia',[ProductController::class,'Ao_Cau_Doi_Tuyen_Quoc_Gia'])->name('ao_doi_tuyen_quoc_gia');
Route::get('san-pham/Ao-ngoai-hang-anh',[ProductController::class,'Ao_ngoai_hang_anh'])->name('ao_ngoai_hang_anh');
Route::get('san-pham/Ao-thiet-ke-theo-yeu-cau',[ProductController::class,'Ao_thiet_ke_theo_yeu_cau'])->name('ao_thiet_ke_theo_yeu_cau');
Route::get('san-pham/Adidas',[ProductController::class,'Adidas'])->name('Adidas');
Route::get('san-pham/Puma',[ProductController::class,'Puma'])->name('Puma');
Route::get('san-pham/Nike',[ProductController::class,'Nike'])->name('Nike');
Route::get('san-pham/Phụ-kiện',[ProductController::class,'PhuKien'])->name('PhuKien');

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

// chinh sach kiem hang
Route::get('chinh-sach/chinh-sach-kiem-hang', function () {
    return view('user.kiemHang');
})->name('user.kiemHang');

// chinh sach bao hanh quan ao va phu kien
Route::get('chinh-sach/chinh-sach-bao-hanh-quan-ao-phu-kien', function () {
    return view('user.baoHanhQAPK');
})->name('user.baoHanhQAPK');


//chinh sach bao hanh giay
Route::get('chinh-sach/chinh-sach-bao-hanh-giay', function () {
    return view('user.baoHanhGiay');
})->name('user.baoHanhGiay');

//chinh sach bao hanh in an quan ao bong da
Route::get('chinh-sach/chinh-sach-bao-hanh-in-an-quan-ao-bong-da', function () {
    return view('user.baoHanhInAnQABD');
})->name('user.baoHanhInAnQABD');

//chinh sach doi hang
Route::get('chinh-sach/chinh-sach-doi-hang', function () {
    return view('user.doiHang');
})->name('user.doiHang');

//chinh sach van chuyen
Route::get('chinh-sach/chinh-sach-van-chuyen', function () {
    return view('user.vanChuyen');
})->name('user.vanChuyen');

//chinh sach thanh toán
Route::get('chinh-sach/chinh-sach-thanh-toan', function () {
    return view('user.thanhToan');
})->name('user.thanhToan');

//chính sách bảo mật thông tin
Route::get('chinh-sach/chinh-sach-bao-mat-thong-tin', function () {
    return view('user.baoMatThongTin');
})->name('user.baoMatThongTin');


