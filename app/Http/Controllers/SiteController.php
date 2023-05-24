<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Models\product;
use App\Models\Cart;
use App\Models\Order;


class SiteController extends Controller
{
    public function getHome(){
        $data =[
            'products'=>product::all()
        ];
    	return view('site.home', $data);
    	
    } 
    public function getAboutus(){
        return view('site.aboutus');
    }
    public function getFoods(){
        return view('site.foods');
    }
    public function getOffer(){
        return view('site.offer');
    }
    public function getGallerys(){
        return view('site.gallerys');
    }
    public function getContactus(){
        return view('site.contactus');
    }
    public function getProductDetail( product $product){
        $data=[
            'product'=>$product
        ];
        return view('site.productdetail',$data);
    }
    public function postAddtoCart(Request $request){
        $product_id=$request->input('product_id');
        $qty=$request->input('qty');
        $product=product::where('id',$product_id)->limit(1)->first();
        if(Session::get('cartcode')){
            $cart = New Cart;
            $cart->product_id = $product_id;
            $cart->code = Session::get('cartcode');
            $cart->product_name =$product->title;
            $cart->product_cost =$product->cost;
            $cart->product_qty =$qty;
            $cart->total_amount =$qty*$product->cost;
            $cart->save();  
      }
      else{
            $cartcode= Str::random(4);

            $cart = New Cart;
            $cart->product_id = $product_id; 
            $cart->code = $cartcode;
            $cart->product_name =$product->title;
            $cart->product_cost =$product->cost;
            $cart->product_qty =$qty;
            $cart->total_amount =$qty*$product->cost;
            $cart->save();
            Session::put('cartcode',$cartcode);


      }
      return redirect()->route('getCart');

    }
    public function getCart(){
        if(Session::get('cartcode')){

            $data =[
                'carts' => Cart::where('code', Session::get('cartcode'))->get(),
                'totalamount' => Cart::where('code', Session::get('cartcode'))->sum('total_amount')
            ];
            return view('site.cart', $data);
        }
        else{
            return redirect()->route('getHome'); 
        }
        
    }
    public function getCheckout(){
        if (Session:: get('cartcode')){
            $data =[
                'carts' => Cart::where('code', Session::get('cartcode'))->get(),
                 'totalamount' => Cart::where('code', Session::get('cartcode'))->sum('total_amount')
            ];
            // dd($data['carts']);
             return view('site.checkout', $data);

        }
        else{
          return redirect()->route('getHome');   
        }

       
    }
   public function postCheckout(Request $request){
        if (Session::get('cartcode')){
            $grand_total=Cart::where('code',Session::get('cartcode'))->sum('total_amount');

            $order=new Order;
            $order->code=Session::get('cartcode');
            $order->first_name=$request->input('fname');
            $order->last_name = $request->input('lname');
            $order->address=$request->input('address');
            $order->tole_city=$request->input('city');
            $order->mobile_number=$request->input('mobilenumber');
            $order->order_note=$request->input('note');
            $order->grand_total=$grand_total;
            $order->payment_type=$request->input('payment_type');
            $order->payment_status='N';
            $order->delivery_status='N';
            $order->save();
            if($request->get('payment_type') == 'COD'){
                Session::forget('cartcode');
                return  view('site.success');
            }
            else{
                
                return redirect()->route('payWithpaypal');
            }
            
        }
        else{
           return redirect()->route('getHome');   
        }

    }
}

