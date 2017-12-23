@extends('frontpage.layout.frontpage')
@section('content')
<section>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
        Obaju : e-commerce template
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="../../../css/font-awesome.css" rel="stylesheet">
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../css/animate.min.css" rel="stylesheet">
    <link href="../../../css/owl.carousel.css" rel="stylesheet">
    <link href="../../../css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="../../../css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="../../../css/custom.css" rel="stylesheet">

    <script src="../../../js/respond.min.js"></script>

    <link rel="shortcut icon" href="#">



</head>

<body>

    <!-- *** NAVBAR END *** -->

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-9" id="basket">

                    <div class="box">

                        <form method="post" action="checkout1.html">

                            <h1>Shopping cart</h1>
                            <p class="text-muted">You currently have {!! $count !!} item(s) in your cart.</p>
                            <div class="table-responsive">
                                <table class="table" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th style="text-align: left; color: blue;"><h3>Product</h3></th>
                                            <th style="text-align: left; color: blue"><h3>Quantity</h3></th>
                                            <th style="text-align: left; color: blue"><h3>Unit price</h3></th>
                                            <th style="text-align: left; color: blue"><h3>Discount</h3></th>
                                            <th style="text-align: left; color: blue"><h3>Total</h3></th>
                                            <th style="text-align: left; color: blue" colspan="2"><h3>Remove</h3></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	@foreach ($content as $item)
	
                                        <tr>
                                            
                                            <td><a href="#"><img src="{!! asset($item->options['img']) !!}" alt=}"></a>
                                            </td>
                                            <td>
                                                <input type="number" value="{!! $item->qty !!}" class="form-control">
                                            </td>
                                            
                                            <td>{!! number_format($item->price,0,",",".") !!}</td>
                                            <td>{!! $item->qty !!}</td>
                                            <td><h4>{!! number_format($item->price*$item->qty,0,",",".") !!}</h4></td>
                                            <td><a href="{{!! url('xoa-san-pham',['id'=>$item->rowId]) !!}}"><img src="../../../images/trash.png" alt=""></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="2"><h3>Total</h3></th>
                                            <th colspan="6"><h3>{!! $total !!}</h3></th>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                            <!-- /.table-responsive -->

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="category.html" class="btn btn-default"><i class="fa fa-chevron-left"></i> Continue shopping</a>
                                </div>
                                <div class="pull-right">
                                    <button class="btn btn-default"><i class="fa fa-refresh"></i> Update basket</button>
                                    <button type="submit" class="btn btn-primary">Proceed to checkout <i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>

                        </form>

                    </div>
                    
                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->



    

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="/../../../js/jquery-1.11.0.min.js"></script>
    <script src="/../../../js/bootstrap.min.js"></script>
    <script src="/../../../js/jquery.cookie.js"></script>
    <script src="/../../../js/waypoints.min.js"></script>
    <script src="/../../../js/modernizr.js"></script>
    <script src="/../../../js/bootstrap-hover-dropdown.js"></script>
    <script src="/../../../js/owl.carousel.min.js"></script>
    <script src="/../../../js/front.js"></script>



</body>

</html>
</section>
@endsection