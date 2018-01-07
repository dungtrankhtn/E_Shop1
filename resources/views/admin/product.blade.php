@extends('admin.layout.main_layout')
@section('content')
    <section id="main">
        <div class="inner-block">
            <div class="product-block">
                <div class="pro-head">
                    <h2>Category List</h2>
                </div>
                <div style="height: 100%">
                    <div class="row">
                        <div class="col-md-offset-2">
                            <form method="post" action="{{route('edit',$product->id)}}"  enctype="multipart/form-data" >
                                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                <table>
                                    </tr>
                                        <th>Mã Sản Phẩm</th>
                                        <th><input class="form-control" value="{{$product->id}}" name="txtId" placeholder="Mã" readonly /></th>
                                    </tr>
                                    <tr>
                                        <th>Tên Sản Phẩm</th>
                                        <th><input class="form-control" value="{{$product->name}}" name="txtName" placeholder="Tên Sản Phẩm"/>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Loại sản phẩm</th>
                                         <th><input class="form-control" value="{{$product->type_name}}" name="txtType" readonly></th>
                               
                                    </tr>
                                    <tr>
                                        <th>Giá</th>
                                        <th><input class="form-control" value="{{$product->price}}" name="txtPrice" placeholder="Giá" /></th>
                                    </tr>
                                    <tr>
                                        <th>Chi Tiết Kĩ Thuật</th>
                                        <th><textarea class="form-control" rows="3" value="{{$product->decriptions}}" name="txtMoTa"  style="width:537px;height:268px;">{{$product->decriptions}}</textarea></th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th>
                                            <input type="radio" id="txtNewArrivals" name="txtNewArrivals" value="1" onclick="radiobuttons('1')"> New Arrivals
                                            <input type="radio" id="txtNew" name="txtNew" value="1" onclick="radiobuttons('2')"> New<br>
                                            <input type="radio" id="txtBestSeller" name="txtBestSeller" value="1" onclick="radiobuttons('3')"> Best Seller
                                            <input type="radio" id="none" name="none" value="0" style="margin-left: 13px;" onclick="radiobuttons('4')">None
                                        </th>
                                    </tr>
                                </table>
                                <button type="submit" class="btn btn-success" value="edit" name="submitbutton" align-center>Done!</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <div class="clearfix"> </div>
    </div>
    </section>
@endsection


                             