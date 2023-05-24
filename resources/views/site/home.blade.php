@extends('site.template')
@section('content')
<section id="slider">
						    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img src="{{asset('site/image/home1.jpg')}}" class="d-block w-100" alt="...">
				      <div class="carousel-caption d-none d-md-block">
				        <h5>First slide label</h5>
				        <p>Some representative placeholder content for the first slide.</p>
				      </div>
				    </div>
				    <div class="carousel-item">
				      <img src="{{asset('site/image/home3.jpg')}}" class="d-block w-100" alt="...">
				      <div class="carousel-caption d-none d-md-block">
				        <h5>Second slide label</h5>
				        <p>Some representative placeholder content for the second slide.</p>
				      </div>
				    </div>
				    <div class="carousel-item">
				      <img src="{{asset('site/image/home4.jpg')}}" class="d-block w-100" alt="...">
				      <div class="carousel-caption d-none d-md-block">
				        <h5>Third slide label</h5>
				        <p>Some representative placeholder content for the third slide.</p>
				      </div>
				    </div>
				  </div>
				  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </button>
				  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </button>
				</div>
			</section>
			<section id="sliderbuttom" style="padding-top: 40px; padding-bottom: 30px;">
				<div class="container">
					<div class="row">
						<div class="col-md-5 img-thumnail" style="background:url('{{asset('site/image/home5.jpg')}}'); margin-right: 10px;">
								<div class="contain" style="color:#fff; padding: 30px 0; text-align: right;">
									<h2>Beverages</h2>
									<h5><i>lovely</i></h5> <br>
									<a href="" class="btn btn-danger">Order Now</a> 
								</div>
						</div>
						<div class="col-md-3 img-thumnail" style="background:url('{{asset('site/image/home2.jpg')}}'); margin-right:10px;">
							<div class="contain" style="color:#fff; padding: 30px 0; text-align: right;">
									<h2>Drink </h2>
									<h2><span style="color: darkred;">jush</span></h2>
									<h5><i>Summer</i></h5>
									<a href="" class="btn btn-danger">Read More</a>
								</div>
						</div>
						<div class="col-md-3 img-thumnail" style=" background:url('{{asset('site/image/home6.jpg')}}');">
							<div class="contain" style="color:#fff; padding: 30px 0; text-align: right;">
									<h2>Get Your</h2>
									<h2><span style="font-weight: bold;">FREE</span></h2>
									<h2><span style="font-style: italic; color: orange;">Francy Berry Beverage</span></h2>
									<a href="" class="btn btn-danger">Read More</a>
								</div>
							
						</div>
					</div>
				</div>
			</section>
			<section id="product">
				<div class="container">
					<div class="row">
						<div class="producttop" style="padding-left: 500px;">
							<span>Our Product</span>
						</div>
						</div>
					</div>
				</div>
			</section>
			<section id="ourpoduct" style="background: silver; ">
				<div class="container">
					<div class="row">
						@foreach($products as $product)
						<div class="col-md-4" >
							<div class="card" style="width: 18rem;">
							  <img src="{{asset('site/product/'.$product->photo)}}" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title">{{$product->title}}</h5>
							    <a href="{{route('getProductDetail',$product->id)}}" class="btn btn-primary stretched-link"style="background: darkred;">ORDER NOW</a>
							  </div>
							</div>	
						</div>
						@endforeach
					</div>
				</div>
			</section>
			@stop