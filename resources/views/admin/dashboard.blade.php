@extends('admin.layout.main_layout')
@section('content')
    <section id="main">
        <div class="inner-block">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <button type="button" class="btn btn-success" style="float: right;"><a href="admin/grids"></a> Thêm Sản Phẩm</button>
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
                    <?php $i = 1;?>
                    @foreach ($products as $product)
                    <tr class="odd gradeX" align="center">
                        <td>{{$i}}</td>
                        <?php $i+=1;?>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->decriptions}}</td>
                        <td><img src="{{$product->image}}"></td>
                        <td>{{$product->type}}</td>
                        <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="{{route('delete',$product->id)}}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('editproduct',$product->id)}}">Edit</a></td>
                    </tr>
                    @endforeach
                <div class="row">{{$products->links()}}</div>
                </tbody>
            </table>
            <div class="clearfix"> </div>
            <!--climate end here-->
        </div>
    </section>
@endsection