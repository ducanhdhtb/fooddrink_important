@foreach($product as $prd)
<li style="list-style-type: none;height: 40px;border-bottom:1px solid #CCC;position:relative">
	<a style="padding-top:10px;line-height:40px;font-weight: 500;color:#808394;" href="">{{$prd->name}} </a>
	<img style="position:absolute;top:5px;right:15px;" src="1.jpg" alt="" width="30px" height="30px">
</li>
@endforeach