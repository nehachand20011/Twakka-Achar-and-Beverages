@extends('site.template')
@section('content')
<section id="checkout">
	<div class="container">
		<div class="row">
			<div class="col-md-12" style="padding: 80px 0;text-align: center;">
				<h1 style="font-weight: 800;">Checkout</h1>
				<ul class="bread-crumb clearfix">
                    <li><a href="">Home</a></li>
                    <li><a href="">Food</a></li>
                    <li><a href="">Checkout</a></li>
                </ul>
			</div>
		</div>
	</div>
</section>
<section id="Checkout1" style="background: padding: 30px 0;">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h3 style="font-weight: 800;">Delivery Details</h3>
				<form action="{{route('postCheckout')}}" method="POST">
					@csrf()
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="inputEmail4">First Name *</label>
				      <input name="fname" type="text" class="form-control" id="inputEmail4"  placeholder="First Name" required>
				    </div>
				    <div class="form-group col-md-6">
				      <label for="inputPassword4">Last Name *</label>
				      <input name="lname" type="text" class="form-control" id="inputPassword4" placeholder="Last Name" required>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputAddress">Address *</label>
				    <input name="address" type="text" class="form-control" id="inputAddress" placeholder="Address" required>
				  </div>
				  <div class="form-group">
				    <label for="inputAddress2">Tole/City *</label>
				    <input name="city" type="text" class="form-control" id="inputAddress2" placeholder="Tole/City" required>
				  </div> 
				  <div class="form-group">
				    <label for="inputAddress2">Mobile Number *</label>
				    <input name=" mobilenumber" type="number" class="form-control" id="inputAddress2" placeholder="Mobile Number"required>
				  </div>
				  <div class="form-group">
				    <label for="inputAddress2">Order Note</label>
				    <input name="note" type="text" class="form-control" id="inputAddress2" placeholder="">
				  </div>
				
				</div>
				<div class="col-md-4" style="">
				<h3 style="font-weight: 800;">Your Order</h3>
						<table class="table">
						 <tr>
						 		<th>Food</th>
						 		<th>Cost</th>
						 </tr>
						 @foreach($carts as $cart)
						 <tr>
						 	<td>{{$cart->product_name}}</td>
						 	<td>RS. {{$cart->product_cost}}</td>
						 </tr>
						 <tr>
						 	<td> Total Amount </td>
						 	<td>Rs. {{$totalamount}}</td>
						 </tr>
						 @endforeach
						
						</table>
				  <div class="form-check" style="">
				  <input class="form-check-input" type="radio" name="payment_type"  value="COD" checked>
				  <label class="form-check-label" for="exampleRadios1">
				    Cash On Delivery
				  </label>
				  <div class="form-check">
				  <input class="form-check-input" type="radio" name="payment_type"  value="PayPal">
				  <label class="form-check-label" for="exampleRadios3">
				  PayPal  <span style="color: darkred;">  </span>
				  </label> 
				  <img src="">

				  <br>
				   <input  type="submit" name="submit" class="btn btn-primary" value="ORDER" style="background: darkred;">
				</form>
			</div>
		</div>
	</div>
</section>
@stop