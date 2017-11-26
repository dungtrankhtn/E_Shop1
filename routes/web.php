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

Route::get('/', function () {
    return view('frontpage.home');
});

Route::resource('/', 'ProductController');

Route::get('/login', function () {
    return view('frontpage.login');
});
Route::get('/product', function () {
    return view('frontpage.product');
});
Route::get('/frontpage', function () {
    return view('frontpage.layout.frontpage');
});