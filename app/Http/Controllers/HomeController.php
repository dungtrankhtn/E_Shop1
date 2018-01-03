<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Cart;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_list = DB::table('product')->paginate(4);
        $product_feature = DB::table('product')->where('decriptions','Hàng Sắp về')->paginate(3);
        return view("frontpage.home", ['product_list' => $product_list,'product_feature' => $product_feature]);
        // return view('home');
    }
}
