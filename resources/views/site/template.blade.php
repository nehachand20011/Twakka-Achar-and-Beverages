<!DOCTYPE html>
<html>
<head>
	<title>twakka achar</title>
	 <!-- <link rel="shortcut icon" href="./tit.jpg"> -->
	  <!-- <link rel="stylesheet" href="search.css"> -->
	   <!-- <link rel="stylesheet" href="login.php"> -->

	<link rel="stylesheet" type="text/css" href="{{asset('site/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('site/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('site/fontawesome/css/all.css')}}">
	<style type="text/css">
		#pagecontent{
			/*margin-top: 200px;
			margin-bottom: 50px;*/
		}
	</style>
</head>
<body>
<section id="topheader">
	<div class="container">
		<div class="row">
			
			<div class="col-md 10" >

				ServingTokathmandu  &nbsp; <i class="fa-solid fa-envelope-open-text"></i> info@twakkaachar.com
			</div>

			@auth()
			<i class="fa-solid fa-user"></i> &nbsp; &nbsp; Welcome {{Auth::user()->name}}
			
			@if(session()->has('cartcode'))
				@php $cartCount = App\Models\Cart::where('code', Session::get('cartcode'))->count(); @endphp
			 &nbsp; &nbsp; <a href="{{route('getCart')}}" style="color: #fff;"><i class="fa-solid fa-solid fa-cart-shopping"></i> <span class="rounded-circle" style="background:red; padding:5px 10px; border-radius: 40px;">{{$cartCount}}</span></a>
			@endif
			@else
			<div class="col-md-4" style="padding-left: 200px; ">
				
				
				
				<a href="{{route('login')}}" style="color: #fff;"><i class="fa-solid fa-user"></i></a>
			</div>
			@endauth



			<!-- <div class="container"> -->
				<div class="col-md-4" style="padding-left: 135px; color: green;" >
					<!-- <i class="fa-solid fa-magnifying-glass"></i> &nbsp; &nbsp; -->
        <form action="https:/www.google.com/search"method="get" class="search-bar">
            <input type="text" placeholder="search anything "name="q"style="text-align: center; border-radius: 20px; border-color: green;">
            <button  type="submit " style="border-radius: 10px; border-color: green;">
            	<img src="https://uxwing.com/wp-content/themes/uxwing/download/user-interface/search-icon.png " style="width: 20px;"></button>

        </form>
    </div>
			
		</div>
	</div>
</section>
<section id="header" >
	<div class="container" >	
		<div class="row">
			<div class="col-md-3" >	
			
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGZaPUWcKNtpYLXR7N051eCp98FJdDUBccM7kAzCxoIw&s"style="border:circular;border-radius: 90px; ">

			</div>	
			<div class="col-md-7 mainmenu" >
				<ul>
					<li >
						

						<a href="{{route('getHome')}}" style="color: red; "> Home</a> 
						<a href="{{route('getAboutus')}}" style="color: red; "> About Us</a>
						<a href="{{route('getFoods')}}" style="color: red; "> Products</a>
						<a href="{{route('getOffer')}}" style="color: red; "> Offer</a>
						<a href="{{route('getGallerys')}}" style="color: red; "> Gallery</a>
						<a href="{{route('getContactus')}}"style="color: red; "> Contact</a>
						
						

	        
						


						<!-- <div class="container">
        <form action="https:/www.google.com/search"method="get" class="search-bar">
            <input type="text" placeholder="search anything "name="q">
            <button  type="submit"><img src="ser.jpg" ></button>

        </form>
    </div> -->

						
					</li>	
				</ul>	
			</div>

			<div class="col-md-2 ordernow">
				<h5 style="color: red; ">	Order Now
				9869913637</h5>
			</div>
		</div>	
	</div>		
</section>
<section id="pagecontent">
	@yield('content')
</section>

<section id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-4 footerh4">
				<h4><span style="color:skyblue;">Contact Info</span></h4>
				<h3>+977-9869913637</h3> <br>
				info@twakkaachar.com
			</div>
			<div class="col-md-5">
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGZaPUWcKNtpYLXR7N051eCp98FJdDUBccM7kAzCxoIw&s"style="border:circular;border-radius: 80px;">
 <br>
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Drinks with TwakkAchar <br>
			Best twakkaachar Pvt. Ltd., Bagbazr chock <br>
						&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;	&nbsp; &nbsp; &nbsp;	Bagbazr, Kathmandu
			</div>
			<div class="col-md-3">
				<h4><span style="color:skyblue;">Opening Hour</span></h4> <br>
				sun-fri &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 10 AM – 10 PM
			</div>
		</div>
	</div>				
</section>
<section id="lastfooter">
	<div class="container">
		<div class="row" style="border-top: 1px solid #ccc; padding-top:15px;">
			<div class="col-md-8">
				© Copyright 2022 Best Twakkaachar Pvt. Ltd.. All right reserved.
			</div>
			<div class="col-md-4">
				Develop By: <span style="color:black";>LOYALTI TEAM, 6th semester.</span>
			</div>
		</div>
	</div>
</section>
	<script type="text/javascript" src="{{asset('site/js/jquery.js')}}"></script>
	<script type="text/javascript" src="{{asset('site/bootstrap/js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('site/fontawesome/js/all.min.js')}}"></script>
   
</body>
</html>