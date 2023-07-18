<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Survival;

class ServiceGuideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $n['survival'] = Survival::first();
        return view('pages.survival.edit',$n);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        if($request->hasFile('banner_img')){
            $image = $request->file('banner_img')->store('banner_img');
        }else{
                $image = null;
        }
        Survival::create([
            'banner_title'=>$request->banner_title,
            'banner_des'=>$request->banner_des,
            'banner_img'=>$image,
        ]);
        return redirect()->route('admin.survival.create')->with('success','Successfully created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Survival $survival)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Survival $survival)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Survival $survival)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Survival $survival)
    {
        //
    }
}
