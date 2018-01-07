<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

use App\User;
use App\comment;

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

        $product_list = DB::table('product')->paginate(8);
        $product_feature = DB::table('product')->where('decriptions','Hàng Sắp về')->paginate(3);
        return view("frontpage.home", ['product_list' => $product_list,'product_feature' => $product_feature]);
    }
    public function preview ($id)
    {
        //Function cho trang chi tiết sản phẩm.

        //Lấy sản phẩm trong product theo id.
        $product_detail = DB::table('product')->where('id',$id)->first();
        $comment_list = DB::table('comments')->where('id_product',$id)->paginate(5);
        
        return view("frontpage.preview", ['product_detail' => $product_detail, 'comment_list' => $comment_list]);
    }

    public function get_product_by_type ($type)
    {
        
        $product_type = DB::table('product')->where('type', $type)->paginate(8);;
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

    public function comment($id, Request $request)
    {
        $id_product= $id;
        $comment = new comment;
        $prod = DB::table('product')->where('id',$id)->first()->id;
        $comment->id_product = $id_product;
        $comment->id_user = Auth::user()->id;
        $comment->name_user = Auth::user()->name;
        $comment->content = $request->cmt;
        $comment->save();
        return redirect('preview/'.$id)->with('thongbao','Viết bình luận thành công!');
    }

    public function timkiem(Request $request)
    {
        $tukhoa = $request->tukhoa;
        $product = DB::table('product')->where('name','like',"%$tukhoa%")->Orwhere('decriptions','like','%$tukhoa%')->take(30)->paginate(8);
        return view("frontpage.search",['product' => $product,'tukhoa' => $tukhoa]);
    }

    public function info()
    {
        $user = Auth::user();
        return view("frontpage.info",['user'=>$user]);
    }

    public function change()
    {
        return view("frontpage.password");
    }

    public function changepass(Request $request)
    {
        $user = Auth::user();
        $this->validate($request,['password' => 'required|min:6|max:32',
                                  'passwordagain' => 'required|same:password'
                                 ],[
                                  'password.required' => 'Bạn chưa nhập nhập mật khẩu!',
                                  'password.min' => 'Mật khẩu phải có ít nhất 6 kí tự!',
                                  'password.max' => 'Mật khẩu tối đa dài 32 kí tự',
                                  'passwordagain.required' => 'Bạn chưa nhập lại mật khẩu!',
                                  'passwordagain.same' => 'Mật khẩu nhập lại chưa khớp!'
                                 ]);
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect("password")->with('thongbao','Đổi mật khẩu thành công!');
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
        $user = User::find($id);
        $user->update([
            'name' => $request->get('txt-FName'),
            'email'=> $request->get('txtEmail')
        ]);
 
        return \Redirect::route('info',array($user->id))->with('message','Thông tin người dùng đã được cập nhật!');
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
