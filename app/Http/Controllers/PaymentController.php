<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Paystack;

use Illuminate\Support\Facades\Mail;

use App\Mail\Welcome;

use Illuminate\Support\Str;

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
                'package' => $request->package,
                'address' => $request->address,
                'admin_email' => $request->email,
                'admin_password' => 'admin'.rand(1200, 99999),
                'url' => Str::random(5).'.metaschools.net'
            
            ];
    
            Mail::to($request->email)
            ->send(new Welcome($datax));

            Mail::to('victorasuquob@gmail.com')
            ->send(new Welcome($datax));


            if ($request->package == 'Basic Package') {
                # code...

                
                return redirect('/success');
            }


            return Paystack::getAuthorizationUrl()->redirectNow();


        }catch(\Exception $e) {

            return $e;
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


        return redirect('/success');

        // dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}