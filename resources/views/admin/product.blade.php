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
                            <form method="post" action=""  enctype="multipart/form-data" >
                                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                <table>
                                    </tr>
                                        <th>Mã Sản Phẩm </th>
                                        <th><input class="form-control" value="" name="txtName" placeholder="Mã" /></th>
                                    </tr>
                                    <tr>
                                        <th>Tên Sản Phẩm</th>
                                        <th><input class="form-control" value="" name="txtName" placeholder="Tên Sản Phẩm"/>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Loại sản phẩm</th>
                                        <th>
                                            <form>
                                                <div class="form-group">
                                                    <select class="form-control" id="sel1">
                                                        @foreach($product_type as $types)
                                                            <option>{{$types->type_name}}</option>
                                                        @endforeach
                                                  </select>
                                              </div>
                                          </form>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Giá</th>
                                        <th><input class="form-control" value="" name="txtGia" placeholder="Giá" /></th>
                                    </tr>
                                    <tr>
                                        <th>Chi Tiết Kĩ Thuật</th>
                                        <th><textarea class="form-control" rows="3" value="" name="txtMoTa" placeholder="Mô Tả" style="width:537px;height:268px;"></textarea></th>
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
                                <button type="submit" class="btn btn-default" value="edit" name="submitbutton" align-center>Edit</button>
                                <button type="submit" class="btn btn-default" value="delete" name="submitbutton" align-center>Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <div class="clearfix"> </div>
    </div>
    </section>
@endsection


                             