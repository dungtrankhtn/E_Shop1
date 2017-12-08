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
Route::get('/login', function () {
    return view('frontpage.login');
});
// Top brand route
Route::get('/topbrand', function () {
    return view('frontpage.topbrand');
});
//Route cho service
Route::get('/services', function () {
    return view('frontpage.services');
});
// Route cho about
Route::get('/about', function () {
    return view('frontpage.about');
});
// Rout cho faq
Route::get('/faq', function () {
    return view('frontpage.about');
});
// Route cho liên hệ
Route::get('/contract', function () {
    return view('frontpage.contract');
});
//Route get data cho TRANG sản phẩm (trang chủ).
Route::resource('/', 'ProductController');

//Route get data cho TRANG chi tiết sản phẩm (theo id).
Route::get('preview/{id}', ['as'=>'preview','uses'=>'ProductController@preview']);

//Route get data theo loại sản phẩm (type).
Route::get('product-type/{type}', ['as'=>'product','uses'=>'ProductController@get_product_by_type']);

//Route cho trang đăng nhập.


// Default
Route::get('/frontpage', function () {
    return view('frontpage.layout.frontpage');
});
Route::get('/test', function () {
    return view('admin.layouts.menu_layout');
});