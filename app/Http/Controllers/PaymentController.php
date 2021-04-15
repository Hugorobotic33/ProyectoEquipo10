<?php

namespace App\Http\Controllers;
use PayPal\Auth\OAuthTokenCredential;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use PayPal\Rest\ApiContext;
use PayPal\Api\Payer;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;
use PayPal\Exception\PayPalConnectionException;

class PaymentController extends Controller
{
    //
    private $apiContext;
    public function __construct(){
              $paypalConfig= Config::get('paypal');


              $this->apiContext = new ApiContext(
                new OAuthTokenCredential(
                       $paypalConfig['client_id'],  // ClientID
                       $paypalConfig['secret']   // ClientSecret
                )
        );
      
    }

    public function payWithPaypal(){
        $payer=new Payer();
        $payer->setPaymentMethod('paypal');

        $amount=new Amount();
        $amount->setTotal('666.00');
        $amount->setCurrency('USD');

        $transaction= new Transaction();
        $transaction->setAmount($amount);
        $transaction->setDescription('Colibros');
        
        $callbackUrl=url('/status');
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl($callbackUrl)
        ->setCancelUrl($callbackUrl);

        $payment = new Payment();
        $payment->setIntent('sale')
        ->setPayer($payer)
        ->setTransactions(array($transaction))
        ->setRedirectUrls($redirectUrls);


        try {
            $payment->create($this->apiContext);
            echo $payment;
            return redirect()->away($payment->getApprovalLink());
        
            // echo "\n\nRedirect user to approval_url: " . $payment->getApprovalLink() . "\n";
        }
        catch (PayPalConnectionException $ex) {
            
            echo $ex->getData();
        }








    } 
    public function payPalStatus(Request $request){
        dd($request->all());

    
    }




}
