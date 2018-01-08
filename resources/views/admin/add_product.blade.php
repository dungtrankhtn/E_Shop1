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
                                    <tr>
                                        <th>Tên Sản Phẩm</th>
                                        <th><input class="form-control" value="" name="txtName" placeholder="Tên Sản Phẩm"/>
                                        </th>
                                    </tr>
                                    <tr>
                                    	<th>Loại sản phẩm</th>
                                    	<th>
                                         <select class="form-control" name="type_selected" id="sel1">
                                    		@foreach($product_type as $type)
									        <option value="{{$type->type_id}}">{{$type->type_name}}</option>
                                         	@endforeach
									      </select>
									  	</th>
                                    </tr>
                                    <tr>
                                    	<label>You can get you images link on "https://cloudinary.com"</label>
                                        <th>Link hình ảnh</th>
                                         <th><input class="form-control" value="" name="txtImage" ></th>
                               
                                    </tr>
                                    <tr>
                                        <th>Giá</th>
                                        <th><input class="form-control" value="" name="txtPrice" placeholder="Giá" /></th>
                                    </tr>
                                    <tr>
                                        <th>Chi Tiết Kĩ Thuật</th>
                                        <th><textarea class="form-control" rows="3" value="" name="txtMoTa"  style="width:537px;height:268px;"></textarea></th>
                                    </tr>
                                    <tr>
                                        <th></th>
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