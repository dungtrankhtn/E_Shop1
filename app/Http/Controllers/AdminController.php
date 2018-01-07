<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $products = DB::table('product')->paginate(5);
        return view('admin.dashboard',['products' => $products]);
    }

    // Chặn middleware không cho vào các trang khác
    public function grids()
    {
        return view('admin.grids');
    }
    public function portlets(){
        return view('admin.portlets');
    }
    public function buttons(){
        return view('admin.buttons');
    }
    public function typography(){
        return view('admin.typography');
    }

    public function icons(){
        return view('admin.icons');
    }
    public function maps(){
        return view('admin.maps');
    }
    public function charts(){
        return view('admin.charts');
    }
    public function inbox(){
        return view('admin.inbox');
    }
    public function inbox_details(){
        return view('admin.inbox-details');
    }
    public function error404(){
        return view('admin.404');
    }
    public function blank(){
        return view('admin.blank');
    }
    public function price(){
        return view('admin.price');
    }
   /* public function products()
    {
        $product_type = DB::table('product_type')->get();
        return view('admin.product',['product_type' => $product_type]);
    }*/
    
    public function showProductsForm()
    {
        //Lấy sản phẩm trong product theo id.
        echo("Chua xong");
    }

    public function getDetailProduct($id)
    {
        $product = DB::table('product')
                            ->join('product_type','type','=','type_id')
                            ->select('product.*','product_type.type_name')
                            ->find($id);
        return view('admin.product',compact('product'));
    }

    public function editProduct(Request $rq,$id)
    {
        $product = DB::table('product')->where('id','=',$id);
        $product->update([
            'name'       => $rq->txtName,
            'price'         => $rq->txtPrice,
            'decriptions'   => $rq->txtMoTa
        ]);
        return redirect('/admin');
    }
    public function deleteProduct($id)
    {
        $product = DB::table('product')->where('id', '=', $id)->delete();
        return redirect('/admin');
    }
}
