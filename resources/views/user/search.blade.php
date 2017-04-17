@extends('user.master')
@section('content')
<div class="col-md-9">
	<div class="content">
				  <div class="clearfix"></div>
				  <div class="product">
				  	<div class="title-product">
				  		<div class="col-md-6">
				  			<h3>Search {{ $count }} products </h3>	
					  	</div>
					  	<div class="col-md-6 see-product">
					  		<a href="" class="pull-right">View more... <i class="glyphicon glyphicon-chevron-right"></i></a>	
					  	</div>
				  	</div>
				  	<div class="clearfix"></div>
				  	@foreach($product as $prd)
				  	<div class="col-md-3">
				  		<a href="product/{{$prd->id}}/{{$prd->name}}.html" class="thumbnail">
					      <img src="uploads/products/images/{{ $prd->image }}" alt="..." class="img-circle">
					    </a>
					    <p align="center">{{ str_limit($prd->name,25,'...') }}</p>
					    <div class="add-cart">
					    		<h4 style="display: inline;">${{ $prd->price }}</h4><button type="button" class="btn btn-default pull-right"><i class="glyphicon glyphicon-shopping-cart"></i> <a href="addcart/{{$prd->id}}">Add to cart</a></button>
					    </div>
					    <div class="clearfix"></div>
				  	</div>
				  	@endforeach				  	
				  	<div class="clearfix"></div>
				  	<div class="paginate">
				  		<nav aria-label="...">
						  <ul class="pager">
						   {{ $product->links() }}
						  </ul>
						</nav>
				  	</div>
				  </div><!--end new products-->
				  <div class="clearfix"></div>
				  <div class="why-shop">
				  	<div class=" col-md-12 why-shop-title">
				  		<h4>WHY SHOP WITH US ?</h4>	
				  	</div>
				  	
				  	<div class="col-md-4">
				  		<img src="img/icon_sao.png"/>
				  		<h5 class="why-title">DEDICATED SERVICE</h5>
				  		<p>Consult our specialists for help with an order, customization, or design</p>
				  	</div>
				  	<div class="col-md-4">
				  		<img src="img/icon_return.png"/>
				  		<h5 class="why-title">FREE RETURNS</h5>
				  		<p>We stand behind our goods and services and want you to be satisfied with then</p>
				  	</div>
				  	<div class="col-md-4">
				  		<img src="img/icon_ship.png"/>
				  		<h5 class="why-title">INTERNATIONAL SHIPPING</h5>
				  		<p>Currently over 50 countries qualify for express international shipping on our store</p>
				  	</div>
				  </div><!--end why_shop-->
				</div>
</div>
@endsection