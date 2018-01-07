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
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.theme.css')}}" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="{{asset('css/style.default.css')}}" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
    
    <script src="{{asset('js/update-cart.js')}}"></script>
    <script src="{{asset('js/respond.min.js')}}"></script>

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
                                            <th style="text-align: left; color: blue"><h3>Total</h3></th>
                                            <th style="text-align: left; color: blue"><h3>Update/Remove</h3></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<form method="POST" action="">
                                    		<input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
	                                    	@foreach ($content as $item)
	                                        <tr>
	                                            <td><a href="#"><img src="{!! asset($item->options['img']) !!}" alt=""}"></a>
	                                            </td>
	                                            <td class="quantity" >
	                                                <input class="qty" type="number" value="{!! $item->qty !!}" />
	                                            </td>
	                                            <td>{!! number_format($item->price,0,",",".") !!}</td>
	                                            <td><h4>{!! number_format($item->price*$item->qty,0,",",".") !!}</h4></td>
	                                            <td class="change">
	                                            	<a class="updatecart" id="{!! $item->rowId !!}"  href="#"><img src="../../../images/update.png" alt=""></a>
	                                            	<a href="{{ url('xoa-san-pham',['id'=>$item->rowId]) }}"><img src="../../../images/trash.png" alt=""></a>
	                                            </td>
	                                        </tr>
	                                        @endforeach
                                    	</form>
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
                                    <a href="{{ url('/') }}" class="btn btn-default">
                                    	<img src="../../../images/left.png" alt="">
                                    </a>
                                </div>
                                <div class="pull-right">
                                    <button type="" class="btn btn-primary">
                                    	<img src="../../../images/right.png" alt="">
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
    <script src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.cookie.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/modernizr.js')}}"></script>
    <script src="{{asset('js/bootstrap-hover-dropdown.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/front.js')}}"></script>



</body>

</html>
</section>
@endsection