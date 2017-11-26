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

//Route get data cho trang sản phẩm (trang chủ).
Route::resource('/', 'ProductController');

// Route get data cho Trang sản phẩm(Product)
Route::resource('/product', 'GetProductByTypeController');

//Route get data cho trang chi tiết sản phẩm (theo id).
Route::get('preview/{id}', ['as'=>'preview','uses'=>'ProductController@preview']);

//Route cho trang đăng nhập.
Route::get('/login', function () {
    return view('frontpage.login');
});
//Product by type
Route::get('product/{type}', ['as'=>'product','uses'=>'ProductController@get_product_by_type']);

// Default
Route::get('/frontpage', function () {
    return view('frontpage.layout.frontpage');
});