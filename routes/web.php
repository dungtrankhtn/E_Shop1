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
//Route cho trang chủ
//Route::get('/home', function () {
//    return view('frontpage.home');
//});
Route::get('/test', function () {
    return view('frontpage.login');
});
//Route::get('/login', function () {
//    return view('frontpage.login');
//});
//Route::get('/login', 'Auth\LoginController@redirectTo')->name('login');
//Route::get('/signup', function () {
//    return view('frontpage.signup');
//});
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

//Route thông tin người dùng.
Route::get('info', ['as'=>'info','uses'=>'ProductController@info']);

//Route thông tin người dùng.
Route::get('change-pass', ['as'=>'changepass','uses'=>'ProductController@changepass']);

Route::prefix('admin')->group(function () {
      Route::get('/dashboard', function () {
          return view('admin.dashboard');
      });
      Route::get('/grids', function () {
          return view('admin.grids');
      });
      Route::get('/portlets', function () {
          return view('admin.portlets');
      });
      Route::get('/buttons', function () {
          return view('admin.buttons');
      });
      Route::get('/typography', function () {
          return view('admin.typography');
      });
      Route::get('/icons', function () {
          return view('admin.icons');
      });
      Route::get('/maps', function () {
          return view('admin.maps');
      });

//Route cho trang đăng nhập.


      Route::get('/charts', function () {
          return view('admin.charts');
      });

      Route::get('/inbox', function () {
          return view('admin.inbox');
      });
      Route::get('/inbox-details', function () {
          return view('admin.inbox-details');
      });
      Route::get('/404', function () {
          return view('admin.404');
      });
      Route::get('/blank', function () {
          return view('admin.blank');
      });
      Route::get('/product', function () {
          return view('admin.product');
      });
      Route::get('/price', function () {
          return view('admin.price');
      });

    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

