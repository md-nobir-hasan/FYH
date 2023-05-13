<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Http\Requests\StoreCurrencyRequest;
use App\Http\Requests\UpdateCurrencyRequest;

class CurrencyController extends Controller
{
    public function __construct() {
        $this->middleware(['auth',"check:Currency"]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $n['mdata'] = Currency::orderBy('id','desc')->get();
        return view('pages.setup.currency.index',$n);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(!check('Link')->add){
            return back();
        }
    return view('pages.setup.currency.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCurrencyRequest $request)
    {
        if(!check('Link')->add){
            return back();
        }
        Currency::create($request->all())->only('name','url');
        return redirect()->route('admin.setup.currency.index')->with('success',$request->name.' successfylly created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Currency $currency)
    {
        $n['mdata'] = $currency;
        return view('pages.setup.currency.show',$n);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Currency $currency)
    {
        if(!check('Link')->edit){
            return back();
        }
        $n['mdata'] = $currency;
        return view('pages.setup.currency.edit',$n);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCurrencyRequest $request, Currency $currency)
    {
        if(!check('Link')->edit){
            return back();
        }

        $currency->update($request->all());
        return redirect()->route('admin.setup.currency.index')->with('success',$currency->name.' successfylly updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Currency $currency)
    {
        //
    }
}
