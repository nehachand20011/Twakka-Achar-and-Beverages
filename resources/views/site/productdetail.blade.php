@extends('site.template')
@section('content')
<section id="pagetop" style="background: darkred; font-weight: bold;">
	<div class="container">
		<div class="row">
			<div class="col-md-12" style="text-align: center;color: white; padding: 100px 0;">
				<h2>Product Details</h2>
				<h5> {{$product->title}}</h5>
				<ul class="bread-crumb clearfix">
                    <li><a href="">Home</a></li>
                    <li><a href="">Food</a></li>
                    <li>Twakka Achar</li>
                </ul>
			</div>
		</div>
	</div>
</section>
<section id="productdetail" style="padding: 50px 0;">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<img src="{{asset('site/product/'.$product->photo)}}" class="img-thumbnail">
			</div>
			<div class="col-md-9">
				<h4>{{$product->title}}</h4>
				{!!  $product->detail !!}
				<h5> Rs.{{$product->cost}}</h5>
				<div>
					<hr>
					<form action="{{route('postAddtoCart')}}" method="POST">
						@csrf()
						<div class="col-md-4">
							<label>Quantity</label>
							<input type="hidden" name="product_id" value="{{$product->id}}">
						<input type="number" name="qty" class="form-control" value="1">
					</div> <br>
						<input type="submit" name="submit" class="btn btn-primary" value="Add To Cart">
					</form>
					<hr>
				</div>
			</div>
		</div>
	</div>
	
</section>
@stop