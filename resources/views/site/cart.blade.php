@extends('site.template')
@section('content')
<section id="pagetop" style="background: darkred; font-weight: bold;">
  <div class="container">
    <div class="row">
      <div class="col-md-12" style="text-align: center;color: white; padding: 100px 0;">
        <h2>Cart</h2>
        <h5> Your Product</h5>
        <ul class="bread-crumb clearfix">
                    <li><a href="">Home</a></li>
                    <li><a href="">Cart</a></li>
                    
                </ul>
      </div>
    </div>
  </div>
</section>
<section id="productdetail" style="padding: 50px 0;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Preview</th>
              <th scope="col">Product</th>
              <th scope="col">Price</th>
              <th scope="col">Quantity</th>
              <th scope="col">Total</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody> 
            
              @foreach($carts as $cart)
              @php $product = App\Models\product::where('id', $cart->product_id)->limit(1)->first(); @endphp
              <tr>
              <th scope="row"><img src="{{asset('site/product/'.$product->photo)}}" width="100"></th>
              <td>{{$cart->product_name}}</td>
              <td>{{$cart->product_cost}}</td>
              <td>{{$cart->product_qty}}</td>
              <td>{{$cart->total_amount}}</td>
              <td><a href="">Delete</a></td>
            </tr>
              @endforeach
              <tr>
                <td colspan="4" style="text-align:right">Total </td>
                <td>NPR. {{$totalamount}}</td>
                <td></td>
              </tr>
            
          </tbody>
</table>
<div class="row">
  <div class="col-md-12" style="text-align: right;">
    <a href="{{route('getHome')}}" class="btn btn-primary">Continous Shipping</a>
    <a href="{{route('getCheckout')}}" class="btn btn-primary" <?php if($totalamount == 0){ echo  'disabled'; }?>>Checkout</a>
  </div>
</div>
      </div>
    </div>
  </div>
  
</section>
@stop