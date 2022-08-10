<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Paystack;

use Illuminate\Support\Facades\Mail;

use App\Mail\Welcome;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway(Request $request)
    {

        
        // return $request->all();
        try{
            $datax = [
                'name' => $request->name,
                'address' => $request->address,
                'admin_email' => $request->email,
                'admin_password' => 'admin'.rand(1200, 99999)
            
            ];
    
            Mail::to($request->email)
            ->send(new Welcome($datax));


            return Paystack::getAuthorizationUrl()->redirectNow();


        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }        
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}