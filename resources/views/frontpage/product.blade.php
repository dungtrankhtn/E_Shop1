@extends('frontpage.layout.frontpage')
@section('content')
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
                @foreach ($product_type as $type)
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="preview-3.html"><img src="{{$type->image}}" alt="" /></a>
                    <h2>{{ $type->name }}</h2>
                    <p>{{ $type->decriptions }}</p>
                    <p><span class="strike">{{ $type->price }}</span><span class="price">{{ $type->price }}</span></p>
                    <div class="button"><span><img src="images/cart.jpg" alt="" /><a href="preview-3.html" class="cart-button">Add to Cart</a></span> </div>
                    <div class="button"><span><a href="preview.html" class="details">Details</a></span></div>
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

            </div>
        </div>
    </div>
@endsection