@extends('frontpage.layout.frontpage')
@section('content')
    <section>
        <div class="main">
            <div class="content">
                <div class="content_top">
                    <div class="heading">
                        <h3>Products Available</h3>
                    </div>
                    
                    <div class="clear"></div>
                </div>
                <div class="section group">
                    @foreach ($product_type as $type)
                        <div class="grid_1_of_4 images_1_of_4">
                            <a href="{!!url('preview',[$type->id])!!}"><img src="{{$type->image}}" alt="" /></a>
                            <h2>{{ $type->name }}</h2>
                            <p>{{ $type->decriptions }}</p>
                            <p><span class="strike">{{ $type->price }}</span><span class="price">{{ $type->price }}</span></p>
                            <div class="button"><span><img src="{{asset('images/cart.jpg')}}" alt="" /><a href="{!!url('mua-hang',[$type->id])!!}" class="cart-button">Add to Cart</a></span> </div>
                            <div class="button"><span><a href="{!!url('preview',[$type->id])!!}" class="details">Details</a></span></div>
                        </div>
                    @endforeach
                </div>
                    <div class="clear"></div>
                </div>
                {{--<div class="section group">--}}
                    {{--<div class="grid_1_of_4 images_1_of_4">--}}
                        {{--<a href="preview-3.html"><img src="{{asset('images/new-pic1.jpg')}}" alt="" /></a>--}}
                        {{--<div class="discount">--}}
                            {{--<span class="percentage">40%</span>--}}
                        {{--</div>--}}
                        <br>
                        {{--<h2>Lorem Ipsum is simply </h2>--}}
                        <br>
                        {{--<p><span class="strike">$438.99</span><span class="price">$403.66</span></p>--}}
                        {{--<div class="button"><span><img src="{{asset('images/cart.jpg')}}" alt="" /><a href="preview-3.html" class="cart-button">Add to Cart</a></span> </div>--}}
                        {{--<div class="button"><span><a href="preview-3.html" class="details">Details</a></span></div>--}}
                    {{--</div>--}}
                    {!!$product_type->links()!!}
                {{--</div>--}}
            </div>
        </div>
    </section>

@endsection