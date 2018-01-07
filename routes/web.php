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
// Top brand route
Route::get('/topbrand', function () {
    return view('frontpage.delivery');
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
// Route cho contact
Route::get('/contract', function () {
    return view('frontpage.contract');
});
//Route cho cart
Route::get('/cart', function () {
    return view('frontpage.cart');
});
//Route get data cho TRANG sản phẩm (trang chủ).
Route::resource('/', 'ProductController');

//Route get data cho TRANG chi tiết sản phẩm (theo id).
Route::get('preview/{id}', ['as'=>'preview','uses'=>'ProductController@preview']);

//Route get data theo loại sản phẩm (type).
Route::get('product-type/{type}', ['as'=>'product','uses'=>'ProductController@get_product_by_type']);

Route::get('mua-hang/{id}', ['as'=>'muahang', 'uses'=>'ProductController@muahang']);

Route::get('gio-hang', ['as'=>'giohang','uses'=>'ProductController@giohang']);

//Route xóa sản phẩm khỏi giỏ hàng.
Route::get('xoa-san-pham/{id}', ['as'=>'xoasanpham','uses'=>'ProductController@xoasanpham']);

//Route cập nhật sản phẩm trong giỏ hàng.
Route::get('cap-nhat/{id}/{qty}', ['as'=>'capnhat','uses'=>'ProductController@capnhat']);

//Route bình luận.
Route::post('binhluan/{id}',['as'=>'binhluan','uses'=>'ProductController@comment']);

//Route tìm kiếm.
Route::post('timkiem','ProductController@timkiem');

// Route::get('/admin', 'AdminController@index')->name('admin.dashboard');

Auth::routes(); 
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'admin'],function(){
      Route::get('/',['as' => 'admin.dashboard','uses' => 'AdminController@index'])->name('admin.dashboard');
      Route::get('login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
      Route::post('login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
      Route::get('grids',['as' => 'admin.dashboard','uses' => 'AdminController@grids'])->name('admin.grids');

// Mấy cái rout linh tinh
      Route::get('portlets', ['as'=>'admin.dashboard','uses'=>'AdminController@portlets'])->name('admin.portlets');
      Route::get('buttons',['as'=>'admin.dashboard','uses'=>'AdminController@buttons'])->name('admin.buttons');
      Route::get('typography',['as'=>'admin.dashboard','uses'=>'AdminController@typography'])->name('admin.typography');
      Route::get('icons',['as'=>'admin.dashboard','uses'=>'AdminController@icons'])->name('admin.icons');
      Route::get('maps',['as'=>'admin.dashboard','uses'=>'AdminController@maps'])->name('admin.maps');
      Route::get('charts', ['as'=>'admin.dashboard','uses'=>'AdminController@charts'])->name('admin.charts');
      Route::get('inbox', ['as'=>'admin.dashboard','uses'=>'AdminController@inbox'])->name('admin.inbox');
      Route::get('inbox-details', ['as'=>'admin.dashboard','uses'=>'AdminController@inbox_details'])->name('admin.inbox-details');
      Route::get('404', ['as'=>'admin.dashboard','uses'=>'AdminController@error404'])->name('admin.404');
      Route::get('blank', ['as'=>'admin.dashboard','uses'=>'AdminController@blank'])->name('admin.blank');
      Route::get('price', ['as'=>'admin.dashboard','uses'=>'AdminController@price'])->name('admin.price');

// Liên quan đến product(Thêm xóa sửa)
      Route::get('product',['as' => 'admin.dashboard','uses'=>'AdminController@showProductsForm'])->name('admin.product');
      // Sửa sản phẩm
      route::get('editproduct/{id}',[
        'as'=>'editproduct',
        'uses'=>'AdminController@getDetailProduct'
      ]);
      Route::post('edit/{id}',[
        'as'=>'edit',
        'uses'=>'AdminController@editProduct'
      ]);
      // Xóa
      Route::get('delete/{id}',[
        'as'=>'delete',
        'uses'=>'AdminController@deleteProduct'
      ]);


    });

//Route thông tin người dùng.
Route::get('info', ['as'=>'info','uses'=>'ProductController@info']);

Route::post('change-info/{id}',['as'=>'changeinfo','uses'=>'ProductController@update']);

//Route thông tin người dùng.
Route::get('change-pass', ['as'=>'changepass','uses'=>'ProductController@changepass']);

Route::get('change', ['as'=>'change','uses'=>'ProductController@change']);

Auth::routes();


Route::get('/frontpage', function () {
    return view('frontpage.layout.frontpage');
});