<!DOCTYPE HTML>
<html>
<head>
    <title>Free Smart Store Website Template | Home :: w3layouts</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="../../../../css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../../../../css/menu.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="../../../../js/jquery.min.js"></script>
    <script src="../../../../js/script.js" type="text/javascript"></script>
    <script type="../../../../text/javascript" src="js/move-top.js"></script>
    <script type="../../../../text/javascript" src="js/easing.js"></script>
    <link href='//fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
</head>

<body>
<div class="wrap">
    <div class="header">
        <div class="header_top">
            <div class="logo">
                <a href="{{ url('/') }}"><img src="../images/logo.png" alt="" /></a>
            </div>
            <div class="header_top_right">
                <div class="search_box">
                    <form>
                        <input type="text" value="Search for Products" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search for Products';}"><input type="submit" value="SEARCH">
                    </form>
                </div>
                <div class="shopping_cart">
                    <div class="cart">
                        <a href="#" title="View my shopping cart" rel="nofollow">
                            <strong class="opencart"> </strong>
                            <span class="cart_title">Cart</span>
                            <span class="no_product">(empty)</span>
                        </a>
                    </div>
                </div>
                <div class="languages" title="language">
                    <div id="language" class="wrapper-dropdown" tabindex="1">EN
                        <strong class="opencart"> </strong>
                        <ul class="dropdown languges">
                            <li>
                                <a href="#" title="Français">
                                    <span><img src="images/gb.png" alt="en" width="26" height="26"></span><span class="lang">English</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Français">
                                    <span><img src="images/au.png" alt="fr" width="26" height="26"></span><span class="lang">Français</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Español">
                                    <span><img src="images/bm.png" alt="es" width="26" height="26"></span><span class="lang">Español</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Deutsch">
                                    <span><img src="images/ck.png" alt="de" width="26" height="26"></span><span class="lang">Deutsch</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Russian">
                                    <span><img src="images/cu.png" alt="ru" width="26" height="26"></span><span class="lang">Russian</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <script type="text/javascript">
                        function DropDown(el) {
                            this.dd = el;
                            this.initEvents();
                        }
                        DropDown.prototype = {
                            initEvents : function() {
                                var obj = this;

                                obj.dd.on('click', function(event){
                                    $(this).toggleClass('active');
                                    event.stopPropagation();
                                });
                            }
                        }

                        $(function() {

                            var dd = new DropDown( $('#language') );

                            $(document).click(function() {
                                // all dropdowns
                                $('.wrapper-dropdown').removeClass('active');
                            });

                        });

                    </script>
                </div>
                <div class="currency" title="currency">
                    <div id="currency" class="wrapper-dropdown" tabindex="1">$
                        <strong class="opencart"> </strong>
                        <ul class="dropdown">
                            <li><a href="#"><span>$</span>Dollar</a></li>
                            <li><a href="#"><span>€</span>Euro</a></li>
                        </ul>
                    </div>
                    <script type="text/javascript">
                        function DropDown(el) {
                            this.dd = el;
                            this.initEvents();
                        }
                        DropDown.prototype = {
                            initEvents : function() {
                                var obj = this;

                                obj.dd.on('click', function(event){
                                    $(this).toggleClass('active');
                                    event.stopPropagation();
                                });
                            }
                        }

                        $(function() {

                            var dd = new DropDown( $('#currency') );

                            $(document).click(function() {
                                // all dropdowns
                                $('.wrapper-dropdown').removeClass('active');
                            });

                        });

                    </script>
                </div>
                <div class="login">
                    <span><a href="../login.html"><img src="images/login.png" alt="" title="login"/></a></span>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="h_menu">
            <a id="touch-menu" class="mobile-menu" href="#">Menu</a>
            <nav>
                <ul class="menu list-unstyled">
                    <li><a href="{{ url('/') }}">Trang chủ</a></li>
                    <li class="activate"><a href="{{ url('/') }}">Sản phẩm</a>
                        <ul class="sub-menu list-unstyled">
                            <div class="nag-mother-list">
                                <div class="navg-drop-main">
                                    <div class="nav-drop">
                                    <?php $menu_lv_1 = DB::table('product_type')->get();
                                     ?>       
                                        @foreach ($menu_lv_1 as $item_lv_1)
                                        <li>
                                        <?php $menu_lv_2 = DB::table('product')->where('type',$item_lv_1->type_id)->first(); ?>
                                            <li><a href="{!!url('product-type',[$menu_lv_2->type])!!}">{{ $item_lv_1->type_name }}</a></li>
                                        </li>
                                        @endforeach
                                        </li>
                                    </div>
                                    <div class="clear"> </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li><a href="products.html">Giao hàng</a>
                        <ul class="sub-menu list-unstyled sub-menu2">
                            <div class="navg-drop-main">
                                <div class="nav-drop nav-top-brand">
                                    <li><a href="products.html">Product 1</a></li>
                                    <li><a href="products.html">Product 2</a></li>
                                    <li><a href="products.html">Product 3</a></li>
                                    <li><a href="products.html">Product 4</a></li>
                                    <li><a href="products.html">Product 5</a></li>
                                    <li><a href="products.html">Product 6</a></li>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li><a href="faq.html">Dịch vụ</a>
                        <ul class="sub-menu list-unstyled sub-menu3">
                            <div class="navg-drop-main">
                                <div class="nav-drop">
                                    <li><a href="products.html">Product 4</a></li>
                                    <li><a href="products.html">Product 5</a></li>
                                    <li><a href="products.html">Product 6</a></li>
                                </div>
                                <div class="clear"> </div>
                            </div>
                        </ul>
                    </li>
                    <li><a href="about.html">Giới thiệu</a></li>
                    <li><a href="faq.html">Faqs</a></li>
                    <li><a href="contact.html">Liên hệ</a></li>
                    <div class="clear"> </div>
                </ul>
            </nav>
            <script src="js/menu.js" type="text/javascript"></script>
        </div>
    </div>
    @yield('content')
</div>
<div class="footer">
    <div class="wrapper">
        <div class="section group">
            <div class="col_1_of_4 span_1_of_4">
                <h4>Information</h4>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Customer Service</a></li>
                    <li><a href="#"><span>Advanced Search</span></a></li>
                    <li><a href="#">Orders and Returns</a></li>
                    <li><a href="#"><span>Contact Us</span></a></li>
                </ul>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h4>Why buy from us</h4>
                <ul>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="faq.html">Customer Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="contact.html"><span>Site Map</span></a></li>
                    <li><a href="preview-2.html"><span>Search Terms</span></a></li>
                </ul>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h4>My account</h4>
                <ul>
                    <li><a href="contact.html">Sign In</a></li>
                    <li><a href="index.html">View Cart</a></li>
                    <li><a href="#">My Wishlist</a></li>
                    <li><a href="#">Track My Order</a></li>
                    <li><a href="faq.html">Help</a></li>
                </ul>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h4>Contact</h4>
                <ul>
                    <li><span>+91-123-456789</span></li>
                    <li><span>+00-123-000000</span></li>
                </ul>
                <div class="social-icons">
                    <h4>Follow Us</h4>
                    <ul>
                        <li class="facebook"><a href="#" target="_blank"> </a></li>
                        <li class="twitter"><a href="#" target="_blank"> </a></li>
                        <li class="googleplus"><a href="#" target="_blank"> </a></li>
                        <li class="contact"><a href="#" target="_blank"> </a></li>
                        <div class="clear"></div>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copy_right">
            <p>&copy; 2013 Smart Store. All Rights Reserved | Design by <a href="http://w3layouts.com">W3Layouts</a> </p>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        /*
        var defaults = {
              containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
         };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
<link href="css/flexslider.css" rel='stylesheet' type='text/css' />
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
    $(function(){
        SyntaxHighlighter.all();
    });
    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
</script>
</body>
</body>
</html>