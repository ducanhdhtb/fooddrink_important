@extends('user.master')
@section('content')
<div class="col-md-9">
	<div class="slider col-md-12">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="user_asset/img/slider_bg_27.png" alt="Chania" width="460" height="345">
				</div>

				<div class="item">
					<img src="user_asset/img/slider_bg_27.png" alt="Chania" width="460" height="345">
				</div>

				<div class="item">
					<img src="user_asset/img/slider_bg_27.png" alt="Flower" width="460" height="345">
				</div>

				<div class="item">
					<img src="user_asset/img/slider_bg_27.png" alt="Flower" width="460" height="345">
				</div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div><!--end slider-->
	</div>
	<div class="content">
		<div class="image-thumbnail">
			<div class="col-md-4">
				<a href="#" class="thumbnail img-responsive">
					<img src="user_asset/img/forher.jpg" alt="...">
				</a>
			</div>
			<div class="col-md-4">
				<a href="#" class="thumbnail img-responsive">
					<img src="user_asset/img/forher.jpg" alt="...">
				</a>
			</div>
			<div class="col-md-4">
				<a href="#" class="thumbnail img-responsive">
					<img src="user_asset/img/forher.jpg" alt="...">
				</a>
			</div>
		</div><!--end thumbail-->
		<div class="clearfix"></div>
		<div class="product">
			<div class="title-product">
				<div class="col-md-6">
					<h3>New Products</h3>	
				</div>
				<div class="col-md-6 see-product">
					<a href="" class="pull-right">See All Products <i class="glyphicon glyphicon-chevron-right"></i></a>	
				</div>
			</div>
			<div class="clearfix"></div>
			@foreach($product as $prd)
			<div class="col-md-3">
				<a href="product/{{$prd->id}}/{{$prd->name}}.html" class="thumbnail img-responsive">
					<img src="uploads/products/images/{{ $prd->image}}" alt="..." >
				</a>
				<p align="center">{{ str_limit($prd->name,20,'...') }}</p>
				<div class="add-cart">
				<h4 style="display: inline;">${{ $prd->price }}</h4><a href="addcart/{{ $prd->id }}"class="btn btn-default pull-right"><i class="glyphicon glyphicon-shopping-cart"></i> Add to cart</a>
				</div>
				<div class="clearfix"></div>
			</div>
			@endforeach
		</div><!--end new products-->
		<!-- 	<div class="pagination " style="margin-left:148px">
			{{ $product->links() }}
		</div> -->
		<div class="clearfix"></div>
		<div class="product">
			<div class="title-product">
				<div class="col-md-6">
					<h3>Hot Products</h3>	
				</div>
				<div class="col-md-6 see-product">
					<a href="" class="pull-right">See All Products <i class="glyphicon glyphicon-chevron-right"></i></a>	
				</div>
			</div>
			<div class="clearfix"></div>
			@foreach($product_trend as $prd_trend)
			<div class="col-md-3">
				<a href="product/{{$prd_trend->id}}/{{$prd_trend->name}}.html" class="thumbnail">
					<img src="uploads/products/images/{{ $prd_trend->image}}" alt="...">
				</a>
				<p align="center">{{ $prd_trend->name }}</p>
				<div class="add-cart">
				<h4 style="display: inline;">${{ $prd_trend->price }}</h4><a href="addcart/{{ $prd_trend->id }}"class="btn btn-default pull-right"><i class="glyphicon glyphicon-shopping-cart"></i> Add to cart</a>
				</div>
				<div class="clearfix"></div>
			</div>
			@endforeach
	
		</div><!--end feature products-->
		<div class="clearfix"></div>
		<div class="why-shop">
			<div class=" col-md-12 why-shop-title">
				<h4>WHY SHOP WITH US ?</h4>	
			</div>

			<div class="col-md-4">
				<img src="user_asset/img/icon_sao.png"/>
				<h5 class="why-title">DEDICATED SERVICE</h5>
				<p>Consult our specialists for help with an order, customization, or design</p>
			</div>
			<div class="col-md-4">
				<img src="user_asset/img/icon_return.png"/>
				<h5 class="why-title">FREE RETURNS</h5>
				<p>We stand behind our goods and services and want you to be satisfied with then</p>
			</div>
			<div class="col-md-4">
				<img src="user_asset/img/icon_ship.png"/>
				<h5 class="why-title">INTERNATIONAL SHIPPING</h5>
				<p>Currently over 50 countries qualify for express international shipping on our store</p>
			</div>
		</div><!--end why_shop-->
		@endsection