<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use Illuminate\Http\Request;
use Stripe;
use Session;
use Laravel\Cashier\Cashier;
use exception;
use Event;
use App\Events\SubscriptionCreated;

class PaymentController extends Controller
{
       public function __construct()
       {
              $user = auth()->user() ?? null;
              if($user == null){
                      return to_route('register');
              }
       }

       public function Payment(Request $request)
       {
       

           Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
          
           try {
              
             $paymentMethod = null;
            $user = auth()->user();
            $user->createOrGetStripeCustomer();
             $paymentMethod = $request->paymentMethod;
             $plan = $request->plan_id;

             if($paymentMethod !==null){
              $paymentMethod = $user->addPaymentMethod($paymentMethod);
             }

             $user->newSubscription( 'default', $plan )
             ->create($paymentMethod != null ? $paymentMethod->id: '');

              $bil = Billing::find($request->biling_id);
              $bil->payment = 1;
              $bil->save();
                  
             
              Event::dispatch(new SubscriptionCreated($user->id));

            
              return to_route('congrats', $plan)->with('success', 'Payment successful!');
           }


       catch(exception $ex){
              return redirect()->back()->with('error', 'unable To create Subcription this Issu'.$ex->getMessage() );
         }
       }
}
