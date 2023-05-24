@extends('site.template')
@section('content')
<section id="aboutus" style="background: white;">
	<div class="container">
		<div class="row">
			<div class="col-md-12" style="text-align: center; padding: 100px 0; font-size: larger;">
				
				<h1>About Us</h1>
				<!-- <ul class="bread-crumb clearfix">
                    <li><a href="">Home</a></li>  &nbsp;
                    <li><a href="">AboutUs</a></li>
                    
                </ul> -->
			</div>
		</div>
	</div>
</section>
<section id="about" >
	<div class="container">
		<div class="row">
			<div class="col-md-6" style="font-style: italic; padding: 80px 0;">
				<h1>Some Words About Us
				& Our Drinks & TwakkaAchar</h1> <br>
				<h5>Welcome to Twakkaachar</h5>
				
			</div>
			<div class="col-md-6"style="padding: 50px 0;" >
				<img src="{{asset('site/image/all.jpg')}} " style="width: 500px; height: 400px;">
			</div>
		</div>
	</div>
</section>
<section id="aboutfood" style="background: silver; padding: 50px 0;">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="card" style="width: 20rem; ">
				  <img src="{{asset('site/image/aboutus1.jpg')}}" class="card-img-top" alt="..." style="height: 210px;">
				   <div class="card-body">
				    <h4 class="card-title">On Time Delivery</h4>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  				   </div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card" style="width: 20rem;">
				  <img src="{{asset('site/image/aboutus2.jpg')}}" class="card-img-top" alt="...">
				   <div class="card-body">
				    <h4 class="card-title">On Time Delivery</h4>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  				   </div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card" style="width: 20rem;">
				  <img src="{{asset('site/image/aboutus3.jpg')}}" class="card-img-top" alt="...">
				   <div class="card-body">
				    <h4 class="card-title">On Time Delivery</h4>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  				   </div>
				</div>
			</div>
		</div>
	</div>
</section>
@stop