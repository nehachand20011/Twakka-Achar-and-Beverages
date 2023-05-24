<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Omnipay\Omnipay;
use App\Models\Order;
use DB;
use Session;
use Mail;

class PayPalController extends Controller
{
    private $gateway;
   
    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true); //set it to 'false' when go live
    }


    public function index()
    {
        return view('site.paywithpaypal');
    }
    public function payWithpaypal(Request $request)
    {

        $totalcost = Order::where('code', Session::get('cartcode'))->limit(1)->first();
        
        $amount1 = $totalcost->grand_total;
        $changeintoUSD = round(($amount1/130), 2);

       
       
            try {
                $response = $this->gateway->purchase(array(
                    'amount' => $changeintoUSD,
                    'currency' => env('PAYPAL_CURRENCY'),
                    'returnUrl' => url('paypal/check'),
                    'cancelUrl' => url('paypal/error'),
                ))->send();
            
                if ($response->isRedirect()) {
                    $response->redirect(); // this will automatically forward the customer
                } else {
                    // not successful
                    return $response->getMessage();
                }
            } catch(Exception $e) {
                return $e->getMessage();
            }
    }

    public function paymentcheck(Request $request)
    {
        // Once the transaction has been approved, we need to complete it.
        if ($request->input('paymentId') && $request->input('PayerID'))
        {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id'  => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
            ));
            $response = $transaction->send();
           
            if ($response->isSuccessful())
            {
                // The customer has successfully paid.
                $arr_body = $response->getData();
           
                Order::where('code', Session::get('cartcode'))
                    ->update([
                        'payment_status' => 'Y',
                        'payment_id' => $arr_body['id'],
                        'payer_id' => $arr_body['payer']['payer_info']['payer_id'],
                        ]);
                    Session::forget('cartcode');
                    return  view('site.success');
                    //return route('getPayPalsuccesspage');

            } else {
                return $response->getMessage();
            }
        } else {
            return 'Transaction is declined';
        }
    }
   
    public function payPalPaymentsuccess(){
        dd('payment success');
    }
    public function payPalPaymenterror()
    {
        return 'User cancelled the payment.';
    }
    public function getPayPalsuccesspage(){

        return  view('site.success');
    }

    

}

