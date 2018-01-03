@extends('frontpage.layout.frontpage')
@section('content')
    <section>
        <div class="main">
            <div class="content">
                <div class="content_top">
                    <div class="panel-heading">
                        <h4><b>Tìm kiếm: {{$tukhoa}} </b></h4>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="section group">
                    @foreach ($product as $type)
                        <div class="grid_1_of_4 images_1_of_4">
                            <a href="{!!url('preview',[$type->id])!!}"><img src="{{$type->image}}" alt="" /></a>
                            <h2>{{ $type->name }}</h2>
                            <p>{{ $type->decriptions }}</p>
                            <p><span class="strike">{{ $type->price }}</span><span class="price">{{ $type->price }}</span></p>
                            <div class="button"><span><img src="{{asset('images/cart.jpg')}}" alt="" /><a href="{!!url('mua-hang',[$type->id])!!}" class="cart-button">Add to Cart</a></span> </div>
                            <div class="button"><span><a href="{!!url('preview',[$type->id])!!}" class="details">Details</a></span></div>
                        </div>
                    @endforeach
                    <div class="page-no">
                        <p>Result Pages:
                            <ul>
                                @if($product->currentPage() != 1)
                                    <li>
                                        [<a href="{!! str_replace('/?','?',$product->url($product->currentPage() - 1)) !!}"> Prev </a>]
                                    </li>
                                @endif
                                @for($i =0 ; $i <= $product->lastPage(); $i = $i + 1)
                                <li class="{!! ($product->currentPage() == $i) ? 'active' : '' !!}">
                                    <a href="{!! str_replace('/?','?',$product->url($i)) !!}">{!! $i !!}</a>
                                </li>
                                @endfor
                                @if($product->currentPage() != $product->lastPage())
                                    <li>
                                        [<a href="{!! str_replace('/?','?',$product->url($product->currentPage() + 1)) !!}"> Next </a >]
                                    </li>
                                @endif
                            </ul>
                        </p>
                    </div>
                </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </section>

@endsection