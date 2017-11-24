@extends('frontpage.layout.frontpage')
@section('content')
    <section id="header">
    <div class="header_bottom">
        <div class="header_bottom_left">
            <div class="section group">
                <div class="listview_1_of_2 images_1_of_2">
                    <div class="listimg listimg_2_of_1">
                        <a href="preview.html"> <img src="images/pic4.png" alt="" /></a>
                    </div>
                    <div class="text list_2_of_1">
                        <h2>Iphone</h2>
                        <p>Lorem ipsum dolor sit amet sed do eiusmod.</p>
                        <div class="button"><span><a href="preview.html">Add to cart</a></span></div>
                    </div>
                </div>
                <div class="listview_1_of_2 images_1_of_2">
                    <div class="listimg listimg_2_of_1">
                        <a href="preview-5.html"><img src="images/pic3.png" alt="" / ></a>
                    </div>
                    <div class="text list_2_of_1">
                        <h2>Samsung</h2>
                        <p>Lorem ipsum dolor sit amet, sed do eiusmod.</p>
                        <div class="button"><span><a href="preview-5.html">Add to cart</a></span></div>
                    </div>
                </div>
            </div>
            <div class="section group">
                <div class="listview_1_of_2 images_1_of_2">
                    <div class="listimg listimg_2_of_1">
                        <a href="preview-3.html"> <img src="images/pic3.jpg" alt="" /></a>
                    </div>
                    <div class="text list_2_of_1">
                        <h2>Acer</h2>
                        <p>Lorem ipsum dolor sit amet, sed do eiusmod.</p>
                        <div class="button"><span><a href="preview-3.html">Add to cart</a></span></div>
                    </div>
                </div>
                <div class="listview_1_of_2 images_1_of_2">
                    <div class="listimg listimg_2_of_1">
                        <a href="preview-6.html"><img src="images/pic1.png" alt="" /></a>
                    </div>
                    <div class="text list_2_of_1">
                        <h2>Canon</h2>
                        <p>Lorem ipsum dolor sit amet, sed do eiusmod.</p>
                        <div class="button"><span><a href="preview-6.html">Add to cart</a></span></div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="header_bottom_right_images">
            <!-- FlexSlider -->
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li><img src="images/1.jpg" alt=""/></li>
                        <li><img src="images/2.jpg" alt=""/></li>
                        <li><img src="images/3.jpg" alt=""/></li>
                        <li><img src="images/4.jpg" alt=""/></li>
                    </ul>
                </div>
            </section>
            <!-- FlexSlider -->
        </div>
        <div class="clear"></div>
    </div>

</section>
    <section>
    <div class="main">
        <div class="content">
            <div class="content_top">
                <div class="heading">
                    <h3>Feature Products</h3>
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
                    @foreach ($product_list as $product)
                    <div class="grid_1_of_4 images_1_of_4">
                        <a href="preview-3.html"><img src="{{$product->image}}" alt="" /></a>
                        <h2>{{ $product->name }}</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                        <p><span class="strike">{{ $product->price }}</span><span class="price">{{ $product->price }}</span></p>
                        <div class="button"><span><img src="images/cart.jpg" alt="" /><a href="preview-3.html" class="cart-button">Add to Cart</a></span> </div>
                        <div class="button"><span><a href="preview-3.html" class="details">Details</a></span></div>
                    </div>
                    @endforeach
                </div>
            
            <div class="content_bottom">
                <div class="heading">
                    <h3>New Products</h3>
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
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="preview-3.html"><img src="images/new-pic1.jpg" alt="" /></a>
                    <div class="discount">
                        <span class="percentage">40%</span>
                    </div>
                    <h2>Lorem Ipsum is simply </h2>
                    <p><span class="strike">$438.99</span><span class="price">$403.66</span></p>
                    <div class="button"><span><img src="images/cart.jpg" alt="" /><a href="preview-3.html" class="cart-button">Add to Cart</a></span> </div>
                    <div class="button"><span><a href="preview-3.html" class="details">Details</a></span></div>
                </div>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="preview-4.html"><img src="images/new-pic2.jpg" alt="" /></a>
                    <div class="discount">
                        <span class="percentage">22%</span>
                    </div>
                    <h2>Lorem Ipsum is simply </h2>
                    <p><span class="strike">$667.22</span><span class="price">$621.75</span></p>
                    <div class="button"><span><img src="images/cart.jpg" alt="" /><a href="preview-4.html" class="cart-button">Add to Cart</a></span></div>
                    <div class="button"><span><a href="preview-4.html" class="details">Details</a></span></div>
                </div>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="preview-2.html"><img src="images/feature-pic2.jpg" alt="" /></a>
                    <div class="discount">
                        <span class="percentage">55%</span>
                    </div>
                    <h2>Lorem Ipsum is simply </h2>
                    <p><span class="strike">$457.22</span><span class="price">$428.02</span></p>
                    <div class="button"><span><img src="images/cart.jpg" alt="" /><a href="preview-2.html" class="cart-button">Add to Cart</a></span> </div>
                    <div class="button"><span><a href="preview-2.html" class="details">Details</a></span></div>
                </div>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="preview-2.html"> <img src="images/new-pic3.jpg" alt="" /></a>
                    <div class="discount">
                        <span class="percentage">66%</span>
                    </div>
                    <h2>Lorem Ipsum is simply </h2>
                    <p><span class="strike">$643.22</span><span class="price">$457.88</span></p>
                    <div class="button"><span><img src="images/cart.jpg" alt="" /><a href="preview-2.html" class="cart-button">Add to Cart</a></span> </div>
                    <div class="button"><span><a href="#" class="details">Details</a></span></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection