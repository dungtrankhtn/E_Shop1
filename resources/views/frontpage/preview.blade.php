@extends('frontpage.layout.frontpage')
@section('content')
	<section>
		<div class="main">
			<div class="content">
				<div class="content_top">
					<div class="back-links">
						<p>
							<h4>
								<a href="{{ url('/') }}">Home</a> >> <a href="{!!url('preview',[$product_detail->id])!!}">preview</a>
							</h4>
						</p>
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
							
							<div class="share">
								<p>Share Product :</p>
								<ul>
									<li><a href="https://www.youtube.com" target="_blank"><img src="{{asset('images/youtube.png')}}" alt=""></a></li>
									<li><a href="https://www.facebook.com" target="_blank"><img src="{{asset('images/facebook.png')}}" alt=""></a></li>
									<li><a href="https://twitter.com" target="_blank"><img src="{{asset('images/twitter.png')}}" alt=""></a></li>
									<li><a href="https://linkedin.com "target="_blank"><img src="{{asset('images/linkedin.png')}}" alt=""></a></li>
								</ul>
							</div>
							<div class="add-cart">
								<div class="rating">
									<p>Rating:<img src="{{asset('images/rating.png')}}"><span>[3 of 5 Stars]</span></p>
								</div>
								<div class="button"><span><a href="{!!url('mua-hang',[$product_detail->id])!!}">Add to Cart</a></span></div>
								<div class="clear"></div>
							</div>
						</div>
						<div class="product-desc">
							<h2>Product Details</h2>
							<p><h6>{{ $product_detail->decriptions }}</h6></p>
						</div>
						<hr>
						<h2>Comments</h2>
						<div class="product-tags">
							<div class="well">
								@if(isset($user))
									@if(session('thongbao'))
									@endif
									<h4>Viết bình luận ... <span class="glyphicon glyphicon-pencil"></span>
									</h4>
									<form action="/binhluan/{{ $product_detail->id }}" method="POST" role="">
										<input type="hidden" name="_token" value="{{csrf_token()}}" />
										<div class="form-group">
											<textarea class="form-control" name="cmt" id="cmt" rows="10"></textarea>
										</div>
										<button type="submit" class="btn btn-primary">Gửi</button>
									</form>
								@endif
							</div>
								<h3> {{session('thongbao')}}</h3>
							@foreach ($comment_list as $cmtt)
							<div class="panel panel-success" style="margin: 1em;">
				                <div class="panel-heading">
				                    <h3 class="panel-title">{{$cmtt->name_user}}</h3>
				                </div>
				                <div class="panel-body">
				                    <!-- load data -->
				                    <input type="text" class="form-control" name="txt-FName" id=""
				                    value="{{ $cmtt->content }}">
				                </div>
				            </div>
				            @endforeach
						</div>
						<div class="page-no">
                    	{!!$comment_list->links()!!}
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
					</div>
				</div>
			</div>
		</div>
	</section>

</body>
</html>
@endsection

