@extends('frontpage.layout.frontpage')
@section('content')
    <section id="header">
    <div class="header_bottom">
        <div class="header_bottom_left">
            <div class="section group">
                <div class="listview_1_of_2 images_1_of_2">
                    @foreach ($product_feature as $p_f)
                    <div class="listimg listimg_2_of_1">
                        <a href="{{url('preview/144')}}"> <img src="https://cdn1.tgdd.vn/Products/Images/42/114111/iphone-x-256gb-1-300x300.jpg" alt="" /></a>
                    </div>
                    <div class="text list_2_of_1">
                        <h2>{{ $p_f->name }}</h2>
                        <p>{{$p_f->decriptions}}</p>
                        <div class="button"><span><a href="{!!url('preview',[$p_f->id])!!}" class="details">Details</a></span></div>
                    </div>
                    @endforeach
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
                    <h3>Products Available</h3>
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
                    <div class="button">
                    <span>
                        <img src="images/cart.jpg" alt="" />
                        <a href="{!!url('mua-hang',[$product->id])!!}" class="cart-button">Add to Cart</a>
                    </span> </div>
                    <div class="button"><span><a href="{!!url('preview',[$product->id])!!}" class="details">Details</a></span></div>
                </div>
                @endforeach
            </div>
            {!!$product_list->links()!!}
            <div class="clear"></div>
        </div>
    </div>
</section>
@endsection