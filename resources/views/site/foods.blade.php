@extends('site.template')
@section('content')
<section id="fooditem">
	<div class="container">
		<div class="row">
			<div class="col-md-12" style="padding: 50px 0;text-align: center;">
				<h1>Products Items</h1>
				<!-- <ul class="bread-crumb clearfix">
                    <li><a href="">Home</a></li>  &nbsp;
                    <li><a href="">AboutUs</a></li>
                    
                </ul> -->
			</div>
		</div>
	</div>
</section>
<section id="food1">
	<div class="container">
		<div class="row">
			<div class="col-md-12" style="text-align: center; padding: 30px 0;">
				<h3 style="font-weight: 800;">Achar Items</h3>
				<hr>
			</div>

			<div class="col-md-6">

				<div class="card mb-3" style="max-width: 540px;">
				  <div class="row no-gutters">
				      <img src="{{asset('site/image/food1.jpg')}}" alt="..." height="250" width="250">
				      <div class="card-body">
				        <h4 class="card-title" style="font-weight: 800;">Achar</h4>
				        <h5>This is mix achar</h4>
				        <h4 style="color: darkred;">Rs:400/-</h4>
				        <input type="submit" name="submit" class="btn btn-primary" value="Add To Cart" style="background: darkred;">
				      </div>
				  </div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card mb-3" style="max-width: 540px;">
				  <div class="row no-gutters">
				      <img src="{{asset('site/image/food2.jpg')}}" alt="..." height="250" width="250">
				      <div class="card-body">
				        <h4 class="card-title" style="font-weight: 800;">Achar</h4>
				        <h5>This is Chicken achar</h5>
				        <h4 style="color: darkred;">Rs:600/-</h4>
				        <input type="submit" name="submit" class="btn btn-primary" value="Add To Cart" style="background: darkred;">
				      </div>
				  </div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card mb-3" style="max-width: 540px;">
				  <div class="row no-gutters">
				      <img src="{{asset('site/image/food3.jpg')}}" alt="..." height="250" width="250">
				      <div class="card-body">
				        <h4 class="card-title" style="font-weight: 800;">Achar</h4>
				        <h5>This is lapsi achar</h5>
				        <h4 style="color: darkred;">Rs:300/-</h4>
				        <input type="submit" name="submit" class="btn btn-primary" value="Add To Cart" style="background: darkred;">
				      </div>
				  </div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card mb-3" style="max-width: 540px;">
				  <div class="row no-gutters">
				      <img src="{{asset('site/image/food4.jpg')}}" alt="..." height="250" width="250">
				      <div class="card-body">
				        <h4 class="card-title" style="font-weight: 800;">Achar</h4>
				        <h5>This is akabare achar</h5>
				        <h4 style="color: darkred;">Rs:250/-</h4>
				        <input type="submit" name="submit" class="btn btn-primary" value="Add To Cart" style="background: darkred;">
				      </div>
				  </div>
				</div>
			</div>
			<div class="col-md-12" style="text-align: center; padding: 30px 0;">
				<h3 style="font-weight: 800;"> Beverage Items</h3>
				<hr>
			</div>
			<div class="col-md-6">
				<div class="card mb-3" style="max-width: 540px;">
				  <div class="row no-gutters">
				      <img src="{{asset('site/image/bev1.jpg')}}" alt="...">
				      <div class="card-body">
				        <h5 class="card-title" style="font-weight: 800;">Beverage</h5>
				        <p class="card-text">This is votka</p>
				        <h4 style="color: darkred;">Rs:180/-</h4>
				        <input type="submit" name="submit" class="btn btn-primary" value="Add To Cart" style="background: darkred;">
				      </div>
				  </div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card mb-3" style="max-width: 540px;">
				  <div class="row no-gutters">
				      <img src="{{asset('site/image/bev2.jpg')}}" alt="...">
				      <div class="card-body">
				        <h5 class="card-title" style="font-weight: 800;">Beverage</h5>
				        <p class="card-text">This is old Durbar</p>
				        <h4 style="color: darkred;">Rs:4000/-</h4>
				        <input type="submit" name="submit" class="btn btn-primary" value="Add To Cart" style="background: darkred;">
				      </div>
				  </div>
				</div>
			</div>
			<div class="col-md-12" style="text-align: center; padding: 30px 0;">
				<h3 style="font-weight: 800;">Drinks Item</h3>
				<hr>
			</div>
			<div class="col-md-6">
				<div class="card mb-3" style="max-width: 540px;">
				  <div class="row no-gutters">
				      <img src="{{asset('site/image/dri1.jpg')}}" alt="..." height="250" width="250">
				      <div class="card-body">
				        <h5 class="card-title" style="font-weight: 800;">Drink</h5>
				        <p class="card-text">This is drinks</p>
				        <h4 style="color: darkred;">Rs:400/-</h4>
				        <input type="submit" name="submit" class="btn btn-primary" value="Add To Cart" style="background: darkred;">
				      </div>
				  </div>
				</div>
			</div><div class="col-md-6">
				<div class="card mb-3" style="max-width: 540px;">
				  <div class="row no-gutters">
				      <img src="{{asset('site/image/dri2.jpg')}}" alt="..." height="250" width="250">
				      <div class="card-body">
				        <h5 class="card-title" style="font-weight: 800;">Drink</h5>
				        <p class="card-text">This is drinks</p>
				        <h4 style="color: darkred;">Rs:150/-</h4>
				        <input type="submit" name="submit" class="btn btn-primary" value="Add To Cart" style="background: darkred;">
				      </div>
				  </div>
				</div>
			</div>
		</div>
	</div>
	
</section>

@stop