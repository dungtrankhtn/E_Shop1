
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
    <link href="/../../../css/font-awesome.css" rel="stylesheet">
    <link href="/../../../css/bootstrap.min.css" rel="stylesheet">
    <link href="/../../../css/animate.min.css" rel="stylesheet">
    <link href="/../../../css/owl.carousel.css" rel="stylesheet">
    <link href="/../../../css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="/../../../css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="/../../../css/custom.css" rel="stylesheet">

    <script src="/../../../js/respond.min.js"></script>

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
                            <p class="text-muted">You currently have 3 item(s) in your cart.</p>
                            <div class="table-responsive">
                                <table class="table" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th style="text-align: left; color: blue;"><b>Product</b></th>
                                            <th style="text-align: left; color: blue"><b>Quantity</b></th>
                                            <th style="text-align: left; color: blue"><b>Unit price</b></th>
                                            <th style="text-align: left; color: blue"><b>Discount</b></th>
                                            <th style="text-align: left; color: blue" colspan="2"><b>Total</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	@foreach ($content as $item)
	
                                        <tr>
                                            
                                            <td><a href="#">{!! $item->name !!}</a>
                                            </td>
                                            <td>
                                                <input type="number" value="{!! $item->qty !!}" class="form-control">
                                            </td>
                                            
                                            <td>{!! $item->price !!}</td>
                                            <td>{!! $item->qty !!}</td>
                                            <td>$246.00</td>
                                            <td><a href="#"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="5">Total</th>
                                            <th colspan="2">$446.00</th>
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

                <div class="col-md-3">
                    <div class="box" id="order-summary">
                        <div class="box-header">
                            <h3>Order summary</h3>
                        </div>
                        <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Order subtotal</td>
                                        <th>$446.00</th>
                                    </tr>
                                    <tr>
                                        <td>Shipping and handling</td>
                                        <th>$10.00</th>
                                    </tr>
                                    <tr>
                                        <td>Tax</td>
                                        <th>$0.00</th>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <th>$456.00</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>


                    <div class="box">
                        <div class="box-header">
                            <h4>Coupon code</h4>
                        </div>
                        <p class="text-muted">If you have a coupon code, please enter it in the box below.</p>
                        <form>
                            <div class="input-group">

                                <input type="text" class="form-control">

                                <span class="input-group-btn">

					<button class="btn btn-primary" type="button"><i class="fa fa-gift"></i></button>

				    </span>
                            </div>
                            <!-- /input-group -->
                        </form>
                    </div>

                </div>
                <!-- /.col-md-3 -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

    </div>

    

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
