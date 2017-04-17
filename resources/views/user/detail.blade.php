@extends('user.master')
@section('content')
<div class="col-md-9">
	<div class="col-md-5">
		<div class="thumbnail">
			<img  src="uploads/products/images/{{ $prd_id->image }}" class="img-responsive"/>
		</div>
	</div>
	<div class="col-md-7">
		<h3>{{ $prd_id->name }}</h3>
		<em class="text-danger">{{ $prd_id->subcategory->name }}</em>
		<p class="text-justify" style="margin: 10px 0;">{!! $prd_id->summary !!}</p>
		<form class="form-inline">
			<div class="col-md-8">
				<label for="price"><h4>Price: <em class="text-info">$ {{ $prd_id->price }} USD</em></h4> </label>
			</div>
			<div class="col-md-4">
				<input style="width: 40%;" type="number" value="1" class="form-control"/>
			</div>
			<div class="col-md-offset-5 col-md-7">
				<a class="btn btn-warning btn-block" href="addcart/{{$prd_id->id}}"> Buy Now!</a>
			</div>
		</form>
	</div>
	<div class="clearfix"></div>
	<div class="col-md-12">
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#home">Description</a></li>
		</ul>
		<div class="tab-content">
			<div id="home" class="tab-pane fade in active">
				<h3>Description</h3>
				<p class="text-justify">{!! $prd_id->description !!}
				</p>
			</div>
		</div>
	</div>
	<div id="facbook">

	</div><!--end facebook-->
	<div class="col-md-12">
	@if(Auth::guard('customers')->check())
		<div class="well">
			<h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
			<form role="form" action="comment/{{$prd_id->id}}" method="post">
				{{ csrf_field() }}
				<div class="form-group">
					<textarea class="form-control" rows="3" name="txtContent"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Gửi</button>
			</form>
		</div>
	@endif
		@foreach($comment as $cm)
		<div class="media" >
			<a class="pull-left" href="#">
				<img width="65px" height="65px" class="media-object img-circle" src="uploads/avartar/{{ $cm->customer->avartar }}" alt="">
			</a>
			<div class="media-body ok">
				<h4 class="media-heading"> <span style="color:green">{{ $cm->customer->name }}</span>
					<small>{{ $cm->created_at }}</small>
				</h4>
				<span>{{ $cm->content }}</span>
				<p><a id="reply" href="#">Reply !</a><a href="" style="margin-left:25px">Like</a></p>
							
			</div>
		</div>
		@endforeach
		{{ $comment->links()  }}
	</div>
</div>
<script>
$(document).ready(function(){
	$('#reply').click(function(){
		alert('This app is being built!');
		//$("#ok").show();
		return false;
		
	});
})
</script>
<div class="clearfix"></div>	
</div>
</div>
@endsection