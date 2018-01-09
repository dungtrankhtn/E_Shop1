<!DOCTYPE HTML>
<html>
<head>
    <title>E Shop</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{asset('css/menu.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
    <link href='//fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
    <link href="{{asset('css/boostrap.min.css')}}" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>
    <div class="wrap">
        <div class="header">
            <div class="header_top">
                <div class="logo">
                    <a href="{{ url('/') }}"><img src="{{asset('images/logo.png')}}" alt="" /></a>
                </div>
                <div class="header_top_right">
                    <div class="search_box">
                        <form action="timkiem" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}";/>
                            <input type="text" name="tukhoa" placeholder="Tìm kiếm"/>
                            <input type="submit" value="SEARCH"/>
                        </form>
                    </div>
                    <a href="{{ url('/gio-hang') }}" title="View my shopping cart" rel="nofollow">
                        <div class="shopping_cart">
                            <div class="cart">
                                    <strong class="opencart"> </strong>
                                    <span class="cart_title">Cart</span>
                            </div>
                        </div>
                    </a>
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
                                <li><a href="#"><span>€</span>Euro</a></li>
                                <li><a href="#"><span>$</span>Dollar</a></li>
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
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <button>
                                <a href="{{ route('login') }}"><img src="{{asset('images/login.png')}}" alt="" title="login">Login</a>
                            </button>
                            <button>
                            <a href="{{ route('register') }}">Register</a>
                            </button>
                        @else
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">{{ Auth::user()->name }}
                                <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{url('/info')}}">Thông tin</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/change')}}">Đổi mật khẩu</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"> Logout
                                        </a>
                                    </li>
                                    <li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        @endguest
                    </ul>
                </div>
                <div class="clear">
                </div>
            </div>
            <div class="clear"></div>
            <div class="h_menu">
            <a id="touch-menu" class="mobile-menu" href="#">Menu</a>
            <nav>
                <ul class="menu list-unstyled">
                    <li><a href="{{ url('/') }}">Trang chủ</a></li>
                    @include('frontpage.shared.product_menu')
                    <li><a href="{{ url('/about') }}">Giới thiệu</a></li>
                    <li><a href="{{ url('/faq') }}">Faqs</a></li>
                    <li><a href="{{ url('/contract') }}">Liên hệ</a></li>
                    <div class="clear"> </div>
                </ul>
            </nav>
            <script src="{{asset('js/menu.js')}}" type="text/javascript"></script>
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
                        <li><a href="{{ url('/about') }}">About Us</a></li>
                        <li><a href="{{ url('/faq') }}">Customer Service</a></li>
                        <li><a href="#"><span>Advanced Search</span></a></li>
                        <li><a href="#">Orders and Returns</a></li>
                        <li><a href="{{ url('/contract') }}"><span>Contact Us</span></a></li>
                    </ul>
                </div>
                <div class="col_1_of_4 span_1_of_4">
                    <h4>Why buy from us</h4>
                    <ul>
                        <li><a href="{{ url('/about') }}">About Us</a></li>
                        <li><a href="{{ url('/faq') }}">Customer Service</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="contact.html"><span>Site Map</span></a></li>
                        <li><a href="preview-2.html"><span>Search Terms</span></a></li>
                    </ul>
                </div>
                <div class="col_1_of_4 span_1_of_4">
                    <h4>My account</h4>
                    <ul>
                        <li><a href="{{route('register')}}">Sign In</a></li>
                        <li><a href="{{url('gio-hang')}}">View Cart</a></li>
                        <li><a href="#">My Wishlist</a></li>
                        <li><a href="#">Track My Order</a></li>
                        <li><a href="faq.html">Help</a></li>
                    </ul>
                </div>
                <div class="col_1_of_4 span_1_of_4">
                    <h4>Contact</h4>
                    <ul>
                        <li><span><a href="tel:0961501656">0961501656</a></span></li>
                        <li><span><a href="tel:0947683215">0947683215</a></span></li>
                    </ul>
                    <div class="social-icons">
                        <h4>Follow Us</h4>
                        <ul>
                            <li class="facebook"><a href="{{url('https://www.facebook.com/quocdung.tran.56808')}}" target="blank"></a></li>
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
    <link href="{{asset('css/flexslider.css')}}" rel='stylesheet' type='text/css' />
    <script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
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
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
</body>
</html>



    
    

    

           





    

