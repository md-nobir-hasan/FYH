<?php

namespace App\Http\Controllers;

use App\Models\ClientType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Srmklive\PayPal\Facades\PayPal;
use Srmklive\PayPal\Services\PayPal as PayPalClient;



class PaypalController extends Controller
{
    public function checkout(Request $req){
        $provider = new PayPalClient;
        $token = $provider->getAccessToken();
        $provider->setAccessToken($token);
        $user = Auth::user();
        $plan = ClientType::find($req->plan_id);

        // $response = $provider->addProduct('Demo Product', 'Demo Product', 'SERVICE', 'SOFTWARE')
        // ->addPlanTrialPricing('DAY', 7)
        // ->addAnnualPlan("$plan->id", $plan->name, $plan->price)
        // ->setReturnAndCancelUrl(route('paypal.success'), route('paypal.cancel'))
        // ->setupSubscription($user->name, $user->email);
        $order = $provider->createOrder([
            'intent' => 'CAPTURE',
            'purchase_units'=> [
                [
                    'amount'=> [
                        'currency_code'=>'CHF',
                        'value'=>$plan->price,
                    ]
                ]
            ],
            'application_context' =>[
                'cancel_url'=>route('paypal.cancel'),
                'return_url'=>route('paypal.success'),
            ]
        ]);
        // dd($order);
        return redirect($order['links'][1]['href']);
    }
    public function success(Request $req){
        $provider = new PayPalClient();
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($req->token);
        // dd($response);
        echo 'Payment successfully';
    }
}
