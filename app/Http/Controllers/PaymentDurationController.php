<?php

namespace App\Http\Controllers;

use App\Models\PaymentDuration;
use App\Http\Requests\StorePaymentDurationRequest;
use App\Http\Requests\UpdatePaymentDurationRequest;

class PaymentDurationController extends Controller
{
    public function __construct() {
        $this->middleware(['auth',"check:Payment Duration"]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $n['mdata'] = PaymentDuration::orderBy('id','desc')->get();
        return view('pages.setup.payment-duration.index',$n);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(!check('Payment Duration')->add){
            return back();
        }
    return view('pages.setup.payment-duration.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaymentDurationRequest $request)
    {
        if(!check('Payment Duration')->add){
            return back();
        }
        PaymentDuration::create($request->all())->only('name','rate');
        return redirect()->route('admin.setup.payment_duration.index')->with('success',$request->name.' successfylly created');
    }

    /**
     * Display the specified resource.
     */
    public function show(PaymentDuration $paymentDuration)
    {
        $n['mdata'] = $paymentDuration;
        return view('pages.setup.payment-duration.show',$n);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PaymentDuration $paymentDuration)
    {
        if(!check('Payment Duration')->edit){
            return back();
        }
        $n['mdata'] = $paymentDuration;
        return view('pages.setup.payment-duration.edit',$n);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaymentDurationRequest $request, PaymentDuration $paymentDuration)
    {
        if(!check('Payment Duration')->edit){
            return back();
        }

        $paymentDuration->update($request->all());
        return redirect()->route('admin.setup.payment_duration.index')->with('success',$paymentDuration->name.' successfylly updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PaymentDuration $paymentDuration)
    {
        //
    }
}
