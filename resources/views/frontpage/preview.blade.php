<!DOCTYPE HTML>
<html>
<head>
<title>Free Smart Store Website Template</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="../../../../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="../../../../css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<link href="../../../../css/menu.css" rel="stylesheet" type="text/css" media="all"/>
<link href='//fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<script src="../../../../js/jquery.min.js"></script>
<script src="../../../../js/script.js" type="text/javascript"></script>
<script type="../../../../text/javascript" src="js/move-top.js"></script>
<script type="../../../../text/javascript" src="js/easing.js"></script>
<script src="../../../../js/script.js" type="text/javascript"></script>
</head>
<body>
  <div class="wrap">
	<div class="header">
		<div class="header_top">
			<div class="logo">
				<a href="index.html"><img src="../../../../images/logo.png" alt="" /></a>
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
	     <div class="languages">
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
			<div class="currency">
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
		   	   <span><a href="../../../../login.html"><img src="../../../../images/login.png" alt="" title="login"/></a></span>
		   </div>
		 <div class="clear"></div>
	   </div>
	 <div class="clear"></div>
   </div>
	<div class="h_menu">
		<a id="touch-menu" class="mobile-menu" href="#">Menu</a>
		<nav>
		<ul class="menu list-unstyled">
			<li><a href="index.html">HOME</a></li>
			<li class="activate"><a href="products.html">Products</a>
				<ul class="sub-menu list-unstyled">
				 <div class="nag-mother-list">
				   <div class="navg-drop-main">
					<div class="nav-drop"> 
						<li><a href="products.html">Product 1</a></li>
						<li><a href="products.html">Product 2</a></li>
						<li><a href="products.html">Product 3</a>
						</li>
					</div>
					<div class="nav-drop"> 
						<li><a href="products.html">Product 1</a></li>
						<li><a href="products.html">Product 2</a></li>
						<li><a href="products.html">Product 3</a>
								</li>
					</div>
					<div class="nav-drop"> 
						<li><a href="products.html">Product 1</a></li>
						<li><a href="products.html">Product 2</a></li>
						<li><a href="products.html">Product 3</a></li>
					</div>
					<div class="nav-drop"> 
						<li><a href="products.html">Product 1</a></li>
						<li><a href="products.html">Product 2</a></li>
						<li><a href="products.html">Product 3</a></li>
					</div>
					<div class="clear"> </div>
				</div>
				<div class="navg-drop-main">
					<div class="nav-drop"> 
						<li><a href="products.html">Product 4</a></li>
						<li><a href="products.html">Product 5</a></li>
						<li><a href="products.html">Product 6</a>
		
						</li>
					</div>
					<div class="nav-drop"> 
						<li><a href="products.html">Product 4</a></li>
						<li><a href="products.html">Product 5</a></li>
						<li><a href="products.html">Product 6</a>
								</li>
					</div>
					<div class="nav-drop"> 
						<li><a href="products.html">Product 4</a></li>
						<li><a href="products.html">Product 5</a></li>
						<li><a href="products.html">Product 6</a></li>
					</div>
					<div class="nav-drop"> 
						<li><a href="products.html">Product 4</a></li>
						<li><a href="products.html">Product 5</a></li>
						<li><a href="products.html">Product 6</a></li>
					</div>
					<div class="clear"> </div>
				 </div>
				 <div class="navg-drop-main">
					<div class="nav-drop"> 
						<li><a href="products.html">Product 4</a></li>
						<li><a href="products.html">Product 5</a></li>
						<li><a href="products.html">Product 6</a>
		
						</li>
					</div>
					<div class="nav-drop"> 
						<li><a href="products.html">Product 4</a></li>
						<li><a href="products.html">Product 5</a></li>
						<li><a href="products.html">Product 6</a>
								</li>
					</div>
					<div class="nav-drop"> 
						<li><a href="products.html">Product 4</a></li>
						<li><a href="products.html">Product 5</a></li>
						<li><a href="products.html">Product 6</a></li>
					</div>
					<div class="nav-drop"> 
						<li><a href="products.html">Product 4</a></li>
						<li><a href="products.html">Product 5</a></li>
						<li><a href="products.html">Product 6</a></li>
					</div>
					<div class="clear"> </div>
				 </div>
				</div>
			</ul>
			</li>
			<li><a href="products.html">Top Brand</a>			
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
			<li><a href="faq.html">Services</a>
				<ul class="sub-menu list-unstyled sub-menu3">
				  <div class="navg-drop-main">
					<div class="nav-drop"> 
						<li><a href="products.html">Product 4</a></li>
						<li><a href="products.html">Product 5</a></li>
						<li><a href="products.html">Product 6</a>
		
						</li>
					</div>
					<div class="nav-drop"> 
						<li><a href="products.html">Product 4</a></li>
						<li><a href="products.html">Product 5</a></li>
						<li><a href="products.html">Product 6</a>
								</li>
					</div>
					<div class="nav-drop"> 
						<li><a href="products.html">Product 4</a></li>
						<li><a href="products.html">Product 5</a></li>
						<li><a href="products.html">Product 6</a></li>
					</div>
					<div class="nav-drop"> 
						<li><a href="products.html">Product 4</a></li>
						<li><a href="products.html">Product 5</a></li>
						<li><a href="products.html">Product 6</a></li>
					</div>
					<div class="clear"> </div>
				 </div>
			  </ul>
			</li>
			<li><a href="about.html">About</a></li>
			<li><a href="#">Delivery</a></li>
			<li><a href="faq.html">Faqs</a></li>
			<li><a href="contact.html">CONTACT</a></li>
			<div class="clear"> </div>
		</ul>
		</nav> 
		<script src="js/menu.js" type="text/javascript"></script>
		</div>
 </div>
 
 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="back-links">
    		<p><a href="#">Home</a> >> <a href="#">Electronics</a></p>
    	    </div>
    		<div class="sort">
    		<p>Sort by:
    			<select>
    				<option>Lowest Price</option>
    				<option>Highest Price</option>
    				<option>Lowest Price</option>
    				<option>Lowest Price</option>
    				<option>Lowest Price</option>
    				<option>In Stock</option>  				   				
    			</select>
    		</p>
    		</div>
    		<div class="show">
    		<p>Show:
    			<select>
    				<option>4</option>
    				<option>8</option>
    				<option>12</option>
    				<option>16</option>
    				<option>20</option>
    				<option>In Stock</option>  				   				
    			</select>
    		</p>
    		</div>
    		<div class="page-no">
    			<p>Result Pages:<ul>
    				<li><a href="#">1</a></li>
    				<li class="active"><a href="#">2</a></li>
    				<li><a href="#">3</a></li>
    				<li>[<a href="#"> Next>>></a >]</li>
    				</ul></p>
    		</div>
    		<div class="clear"></div>
    	</div>
    	<div class="section group">
				<div class="cont-desc span_1_of_2">				
					<div class="grid images_3_of_2">
						<img src="{{ $product_detail->image }}" alt="" />
					</div>
				<div class="desc span_3_of_2">
					<h2>{{ $product_detail->name }}</h2>
					<p>{{ $product_detail->decriptions }}</p>					
					<div class="price">
						<p>Price: <span>{{ $product_detail->price }}</span></p>
					</div>
					<div class="available">
						<p>Available Options :</p>
					<ul>
						<li>Color:
							<select>
							<option>Silver</option>
							<option>Black</option>
							<option>Dark Black</option>
							<option>Red</option>
						</select></li>
						<li>Size:<select>
							<option>Large</option>
							<option>Medium</option>
							<option>small</option>
							<option>Large</option>
							<option>small</option>
						</select></li>
						<li>Quality:<select>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select></li>
					</ul>
					</div>
					<div class="share">
						<p>Share Product :</p>
						<ul>
					    	<li><a href="#"><img src="images/youtube.png" alt=""></a></li>
					    	<li><a href="#"><img src="images/facebook.png" alt=""></a></li>
					    	<li><a href="#"><img src="images/twitter.png" alt=""></a></li>
					    	<li><a href="#"><img src="images/linkedin.png" alt=""></a></li>
			    		</ul>
					</div>
				<div class="add-cart">
					<div class="rating">
						<p>Rating:<img src="images/rating.png"><span>[3 of 5 Stars]</span></p>
					</div>
					<div class="button"><span><a href="#">Add to Cart</a></span></div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="product-desc">
			<h2>Product Details</h2>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
	        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
	    </div>
	    <div class="product-tags">
			<h2>Product Tags</h2>
			<h4>Add Your Tags:</h4>
			<div class="input-box">
				<input type="text" value="" />
			</div>
			<div class="button"><span><a href="#">Add Tags</a></span></div>
	    </div>				
	</div>
				<div class="rightsidebar span_3_of_1">
					<h2>CATEGORIES</h2>
					<ul>
				      <li><a href="#">Mobile Phones</a></li>
				      <li><a href="#">Desktop</a></li>
				      <li><a href="#">Laptop</a></li>
				      <li><a href="#">Accessories</a></li>
				      <li><a href="#">Software</a></li>
				       <li><a href="#">Sports & Fitness</a></li>
				       <li><a href="#">Footwear</a></li>
				       <li><a href="#">Jewellery</a></li>
				       <li><a href="#">Clothing</a></li>
				       <li><a href="#">Home Decor & Kitchen</a></li>
				       <li><a href="#">Beauty & Healthcare</a></li>
				       <li><a href="#">Toys, Kids & Babies</a></li>
    				</ul>
    				<div class="subscribe">
    					<h2>Newsletters Signup</h2>
    						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.......</p>
						    <div class="signup">
							    <form>
							    	<input type="text" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';"><input type="submit" value="Sign up">
							    </form>
						    </div>
      				</div>
      				 <div class="community-poll">
      				 	<h2>Community POll</h2>
      				 	<p>What is the main reason for you to purchase products online?</p>
      				 	<div class="poll">
      				 		<form>
      				 			<ul>
									<li>
									<input type="radio" name="vote" class="radio" value="1">
									<span class="label"><label>More convenient shipping and delivery </label></span>
									</li>
									<li>
									<input type="radio" name="vote" class="radio" value="2">
									<span class="label"><label for="vote_2">Lower price</label></span>
									</li>
									<li>
									<input type="radio" name="vote" class="radio"  value="3">
									<span class="label"><label for="vote_3">Bigger choice</label></span>
									</li>
									<li>
									<input type="radio" name="vote" class="radio"  value="5">
									<span class="label"><label for="vote_5">Payments security </label></span>
									</li>
									<li>
									<input type="radio" name="vote" class="radio" value="6">
									<span class="label"><label for="vote_6">30-day Money Back Guarantee </label></span>
									</li>
									<li>
									<input type="radio" name="vote" class="radio" value="7">
									<span class="label"><label for="vote_7">Other.</label></span>
									</li>
									</ul>
      				 		</form>
      				 	</div>
      				 </div>
 				</div>
 		</div>
 	</div>
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
</body>
</html>

