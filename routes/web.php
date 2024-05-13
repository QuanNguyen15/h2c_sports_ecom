<?php

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

Route::get('/', function () {
    return view('admin.layout.index');
});

Route::get('product', function () {
    return view('admins.product');
})->name('admins.product');

Route::get('product', function () {
    return view('admins.product');
})->name('admins.product');

//check ket noi
Route::get('/dbcon', function () {
    return view('user.dbcon');
});

Route::get('/sale', function () {
    return view('user.index-21');
})->name('user.index-21');


Route::get('/thongke', function () {
    return view('admins.thongke');
})->name('admins.thongke');


Route::get('/san-pham', function () {
    return view('user.category-boxed');
})->name('user.category-boxed');

Route::get('/home', function () {
    return view('user.trangchu');
})->name('user.trangchu');


Route::get('/404-NOT-FOUNT', function () {
    return view('user.404');
})->name('user.404');
