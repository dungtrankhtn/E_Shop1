@extends('admin.layout.main_layout')
@section('content')
    <section id="main">
        <div class="inner-block">
            <label>Số lượng hiễn thị</label>
            <select>
                <option>10</option>
                <option>50</option>
                <option>100</option>
                <option>150</option>
                <option>200</option>
            </select>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr class="odd gradeX" align="center">
                        <th>STT</th>
                        <th>Mã Sản Phẩm</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Giá</th>
                        <th>Mô Tả</th>
                        <th>Hình Ảnh</th>
                        <th>Danh Mục</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr class="odd gradeX" align="center">
                        <td>1</td>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->decriptions}}</td>
                        <td><img src="{{$product->image}}"></td>
                        <td>{{$product->type}}</td>
                        <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href=""> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/product">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="clearfix"> </div>
            <!--climate end here-->
        </div>
    </section>
@endsection