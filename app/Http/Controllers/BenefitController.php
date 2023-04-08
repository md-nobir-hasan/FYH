<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use App\Http\Requests\StoreBenefitRequest;
use App\Http\Requests\UpdateBenefitRequest;

class BenefitController extends Controller
{
    public function __construct() {
        $this->middleware(['auth',"check:Benefit"]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $n['mdata'] = Benefit::orderBy('id','desc')->get();
        return view('pages.setup.benefit.index',$n);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(!check('Benefit')->add){
            return back();
        }
    return view('pages.setup.benefit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBenefitRequest $request)
    {
        if(!check('Benefit')->add){
            return back();
        }
        Benefit::create($request->all())->only('name','ct_code');
        return redirect()->route('admin.setup.benefit.index')->with('success',$request->name.' successfylly created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Benefit $benefit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Benefit $benefit)
    {
        if(!check('Benefit')->edit){
            return back();
        }

        return view('pages.setup.benefit.edit',['mdata' =>$benefit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBenefitRequest $request, Benefit $benefit)
    {
        if(!check('Benefit')->edit){
            return back();
        }

        $benefit->update($request->all());
        return redirect()->route('admin.setup.benefit.index')->with('success',$benefit->name.' successfylly updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Benefit $benefit)
    {
        //
    }
}
