<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});


//Route cho trang chủ
Route::get('/', function () {
    return view('frontpage.home');
});

//Route get data cho TRANG sản phẩm (trang chủ).
Route::resource('/', 'ProductController');

//Route get data cho TRANG chi tiết sản phẩm (theo id).
Route::get('preview/{id}', ['as'=>'preview','uses'=>'ProductController@preview']);

//Route cho trang đăng nhập.
Route::get('/login', function () {
    return view('frontpage.login');
});
//Route get data theo loại sản phẩm (type).
Route::get('product-type/{type}', ['as'=>'product','uses'=>'ProductController@get_product_by_type']);

// Default
Route::get('/frontpage', function () {
    return view('frontpage.layout.frontpage');
});