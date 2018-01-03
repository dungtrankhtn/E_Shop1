<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Cart;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_list = DB::table('product')->paginate(4);
        $product_feature = DB::table('product')->where('decriptions','Hàng Sắp về')->paginate(3);
        return view("frontpage.home", ['product_list' => $product_list,'product_feature' => $product_feature]);
    }

    public function preview ($id)
    {
        //Function cho trang chi tiết sản phẩm.

        //Lấy sản phẩm trong product theo id.
        $product_detail = DB::table('product')->where('id',$id)->first();
        return view("frontpage.preview", ['product_detail' => $product_detail]);
    }

    public function get_product_by_type ($type)
    {
        
        $product_type = DB::table('product')->where('type', $type)->get();
        return view("frontpage.product", ['product_type' => $product_type]);
    }

    public function muahang ($id)
    {
        //Lấy trông tin sản phẩm ra (theo id).
        $product_buy =  DB::table('product')->where('id',$id)->first();
        Cart::add(array('id'=>$id,'name'=>$product_buy->name,'qty'=>1,'price'=>$product_buy->price,'options'=>array('img'=>$product_buy->image)));
        $content = Cart::content();
        return redirect()->route('giohang');
    }

    public function giohang()
    {
        $content = Cart::content(); 
        $total = Cart::subtotal();
        $count = Cart::count();
        return view("frontpage.cart", compact('content','total','count'));
    }

    public function xoasanpham($id)
    {
        Cart::remove($id);
        return redirect()->route('giohang');
    }

    public function capnhat()
    {
           if(request()->ajax())
            {
                $id = request()->get('id');
                $qty = request()->get('qty');
                Cart::update($id, $qty);
                echo "oke";
            }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
