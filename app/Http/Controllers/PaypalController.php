<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use App\Models\ClientType;
use App\Models\Payment;
use Carbon\Carbon;
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
        $prce = $response['purchase_units'][0]['payments']['captures'][0]['seller_receivable_breakdown']['gross_amount']['value'];
        $ct_id = ClientType::where('price',(int)$prce)->first();
        $now = Carbon::now();
        if($ct_id->billing_period == 'year'){
            $end_date = $now->addYears((int)$ct_id->interval_count);
        }
        if($ct_id->billing_period == 'month'){
            $end_date = $now->addMonths((int)$ct_id->interval_count);
        }
        $paypal = Payment::where('user_id',Auth::user()->id)->first();
        if($paypal){
           $n['update'] = $paypal->update([
                'client_type_id' => $ct_id ? $ct_id->id : null,
                'paypal_token' =>$req->token,
                'order_id' =>$response['id'],
                'end_time' => $end_date,
                'order_status' =>$response['status'],
                'pa_email' =>$response['payment_source']['paypal']['email_address'],
                'pa_id' =>$response['payment_source']['paypal']['account_id'],
                'pa_status' =>$response['payment_source']['paypal']['account_status'],
                'pa_fname' =>$response['payment_source']['paypal']['name']['given_name'],
                'pa_lname' =>$response['payment_source']['paypal']['name']['surname'],
                'pa_country_code' =>$response['payment_source']['paypal']['address']['country_code'],
                'capture_link' =>$response['purchase_units'][0]['payments']['captures'][0]['links'][0]['href'],
                'refund_link' =>$response['purchase_units'][0]['payments']['captures'][0]['links'][1]['href'],
                'order_link' =>$response['purchase_units'][0]['payments']['captures'][0]['links'][2]['href'],
                'amount' =>$response['purchase_units'][0]['payments']['captures'][0]['seller_receivable_breakdown']['gross_amount']['value'],
                'currency' =>$response['purchase_units'][0]['payments']['captures'][0]['seller_receivable_breakdown']['gross_amount']['currency_code'],
                'paypal_fee' =>$response['purchase_units'][0]['payments']['captures'][0]['seller_receivable_breakdown']['paypal_fee']['value'],
                'net_amount' =>$response['purchase_units'][0]['payments']['captures'][0]['seller_receivable_breakdown']['net_amount']['value'],
            ]);
        }else{
            $n['insert'] = Payment::create([
                'user_id' => Auth::user()->id,
                'client_type_id' => $ct_id ? $ct_id->id : null,
                'paypal_token' =>$req->token,
                'order_id' =>$response['id'],
                'end_time' => $end_date,
                'order_status' =>$response['status'],
                'pa_email' =>$response['payment_source']['paypal']['email_address'],
                'pa_id' =>$response['payment_source']['paypal']['account_id'],
                'pa_status' =>$response['payment_source']['paypal']['account_status'],
                'pa_fname' =>$response['payment_source']['paypal']['name']['given_name'],
                'pa_lname' =>$response['payment_source']['paypal']['name']['surname'],
                'pa_country_code' =>$response['payment_source']['paypal']['address']['country_code'],
                'capture_link' =>$response['purchase_units'][0]['payments']['captures'][0]['links'][0]['href'],
                'refund_link' =>$response['purchase_units'][0]['payments']['captures'][0]['links'][1]['href'],
                'order_link' =>$response['purchase_units'][0]['payments']['captures'][0]['links'][2]['href'],
                'amount' =>$response['purchase_units'][0]['payments']['captures'][0]['seller_receivable_breakdown']['gross_amount']['value'],
                'currency' =>$response['purchase_units'][0]['payments']['captures'][0]['seller_receivable_breakdown']['gross_amount']['currency_code'],
                'paypal_fee' =>$response['purchase_units'][0]['payments']['captures'][0]['seller_receivable_breakdown']['paypal_fee']['value'],
                'net_amount' =>$response['purchase_units'][0]['payments']['captures'][0]['seller_receivable_breakdown']['net_amount']['value'],
            ]);
        }
        return redirect()->route('congrats');
    }

    public function updatePayment($ct_id){

        $n['ct_id'] = $ct_id;
        $n['memberShips'] = ClientType::orderBy('created_at', 'desc')->get();
        return view('frontend.pages.update-payment',$n);
    }
}
