<?php

namespace App\Http\Controllers;

use App\Models\ClientType;
use App\Http\Requests\StoreClientTypeRequest;
use App\Http\Requests\UpdateClientTypeRequest;
use App\Models\Currency;
use App\Models\PaymentDuration;
use exception;
use Illuminate\Support\Facades\Redirect;
use Stripe;
use Stripe\Plan;

class ClientTypeController extends Controller
{
    public $billing_periods = ['month','year', ];

    public function __construct() {
        $this->middleware(['auth',"check:Client Type"]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $n['mdata'] = ClientType::orderBy('id','desc')->get();
        return view('pages.setup.client-type.index',$n);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(!check('Client Type')->add){
            return back();
        }


    return view('pages.setup.client-type.create',['billing_periods' => PaymentDuration::get()] );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientTypeRequest $request)
    {
        if(!check('Client Type')->add){
            return back();
        }
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        try{

        $plan = Plan::create([
            'amount' => $request->price *100,
            'currency' => $request->currency,
            'interval' => $request->billing_period,
            'interval_count' => $request->interval_count,
            'product' => [
                  'name' => $request->name
            ]
        ]);

        ClientType::create([
            'plan_id' => $plan->id,
                'interval_count' => $request->interval_count,
            	'name' => $request->name,
            	'price' => $request->price,
            	'des' => $request->des,
            	// 'dis' => $request->
            	'billing_period' => $request->billing_period,
            	'currency' => $request->currency,

        ]);
        }

        catch(exception $ex){
            return Redirect::back()->with('success', $ex->getMessage());
       }



         return redirect()->route('admin.setup.client-type.index')->with('success','New Member Type Add successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(ClientType $clientType)
    {
        $n['mdata'] = $clientType;
        return view('pages.setup.client-type.show',$n);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClientType $clientType)
    {
        if(!check('Client Type')->edit){
            return back();
        }
        $mdata = $clientType;

        return view('pages.setup.client-type.edit',[ 'mdata' =>$mdata , 'billing_periods' => $this->billing_periods]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientTypeRequest $request, ClientType $clientType)
    {
        if(!check('Client Type')->edit){
            return back();
        }
                Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

              // Retrieve the plan from the Stripe API
              $stripePlan = \Stripe\Plan::retrieve($clientType->plan_id);

               // Update the plan details
                  try{
                    $stripePlan->metadata = [
                        'interval_count' => $request->interval_count,
                        'name' => $request->name,
                        'price' => $request->price,
                        'des' => $request->des,
                        // 'dis' => $request->
                        'billing_period' => $request->billing_period,
                        'currency' => $request->currency,
                     ];
                      // Save the updated plan in Stripe
                       $stripePlan->save();

                $clientType->update($request->all());
                return redirect()->route('admin.setup.client-type.index')->with('success',$clientType->name.' successfylly updated');
                  }

                  catch(exception $ex){
                    return dd($ex->getMessage());
               }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClientType $clientType)
    {

    }
}
