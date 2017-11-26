@extends('frontpage.layout.frontpage')
@section('content')
    <section id="header">
    <div class="header_bottom">
        <div class="header_bottom_left">
            <div class="section group">
                <div class="listview_1_of_2 images_1_of_2">
                    <div class="listimg listimg_2_of_1">
                        <a href="preview.html"> <img src="https://cdn1.tgdd.vn/Products/Images/42/114111/iphone-x-256gb-1-300x300.jpg" alt="" /></a>
                    </div>
                    <div class="text list_2_of_1">
                        <h2>Iphone X 256GB</h2>
                        <p>Hàng sắp về!</p>
                        <div class="button"><span><a href="preview.html">Add to cart</a></span></div>
                    </div>
                </div>
                <div class="listview_1_of_2 images_1_of_2">
                    <div class="listimg listimg_2_of_1">
                        <a href="preview.html"><img src="https://cdn4.tgdd.vn/Products/Images/42/78479/samsung-galaxy-s8-4-300x300.jpg" alt="" /></a>
                    </div>
                    <div class="text list_2_of_1">
                        <h2>Samsung Galaxy S8</h2>
                        <p></p>
                        <div class="button"><span><a href="preview.html">Add to cart</a></span></div>
                    </div>
                </div>
            </div>
            <div class="section group">
                <div class="listview_1_of_2 images_1_of_2">
                    <div class="listimg listimg_2_of_1">
                        <a href="preview.html"> <img src="https://cdn4.tgdd.vn/Products/Images/44/88629/apple-macbook-pro-15-mlh32sa-h-300x300.jpg" alt="" /></a>
                    </div>
                    <div class="text list_2_of_1">
                        <h2>Macbook Pro</h2>
                        <p>Đẳng cấp Sang trọng</p>
                        <div class="button"><span><a href="preview.html">Add to cart</a></span></div>
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
                        <li><img src="http://cdn2.tgdd.vn/qcao/11_11_2017_16_16_21_Samsung-Note-FE-800-300.jpg" alt=""/></li>
                        <li><img src="http://cdn4.tgdd.vn/qcao/30_10_2017_10_00_40_HC-Tra-Gop-800-300.png" alt=""/></li>
                        <li><img src="http://cdn4.tgdd.vn/qcao/10_11_2017_16_25_39_Launching-Oppo-F5-800-300.png" alt=""/></li>
                        <li><img src="http://cdn2.tgdd.vn/qcao/10_11_2017_10_18_01_iphone-big-800-300.png" alt=""/></li>
                        <li><img src="http://cdn2.tgdd.vn/qcao/31_10_2017_00_44_51_phu-kien-loa-blu-800-300.png"></li>
                        <li><img src="http://cdn3.tgdd.vn/qcao/09_11_2017_14_54_35_Moto-X4-800-300.png"></li>
                        <li><img src="http://cdn2.tgdd.vn/qcao/22_11_2017_20_57_46_FlashSale-Vivo-V7-800-300.png"></li>
                        <li><img src="http://cdn2.tgdd.vn/qcao/22_11_2017_09_34_08_iphoneX-800-300.png"></li>
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
                    <p>Result Pages:
                        <ul>
                            @if($product_list->currentPage() != 1)
                                <li>
                                    [<a href="{!! str_replace('/?','?',$product_list->url($product_list->currentPage() - 1)) !!}"> Prev </a>]
                                </li>
                            @endif
                            @for($i =0 ; $i <= $product_list->lastPage(); $i = $i + 1)
                            <li class="{!! ($product_list->currentPage() == $i) ? 'active' : '' !!}">
                                <a href="{!! str_replace('/?','?',$product_list->url($i)) !!}">{!! $i !!}</a>
                            </li>
                            @endfor
                            @if($product_list->currentPage() != $product_list->lastPage())
                                <li>
                                    [<a href="{!! str_replace('/?','?',$product_list->url($product_list->currentPage() + 1)) !!}"> Next </a >]
                                </li>
                            @endif
                        </ul>
                    </p>
                </div>
                
                <div class="clear"></div>
            </div>
            
                <div class="section group">
                    @foreach ($product_list as $product)
                    <div class="grid_1_of_4 images_1_of_4">
                        <a href="{!!url('preview',[$product->id])!!}"><img src="{{$product->image}}" alt="" /></a>
                        <h2>{{ $product->name }}</h2>
                        <p>{{$product->decriptions}}</p>
                        <p><span class="strike">{{ $product->price }}</span><span class="price">{{ $product->price }}</span></p>
                        <div class="button"><span><img src="images/cart.jpg" alt="" /><a href="{!!url('preview',[$product->id])!!}" class="cart-button">Add to Cart</a></span> </div>
                        <div class="button"><span><a href="{!!url('preview',[$product->id])!!}" class="details">Details</a></span></div>
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