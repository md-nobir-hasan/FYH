<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFeatureRequest;
use App\Http\Requests\UpdateFeatureRequest;

class FeatureController extends Controller
{
    public function __construct() {
        $this->middleware(['auth',"check:Permission"]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!check('Permission')->show){
            return back();
        }

        $n['mdata'] = Feature::where('status',1)->orderBy('id','desc')->get();
        return view('user.feature.index',$n);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!check('Permission')->add){
                return back();
            }
        return view('user.feature.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFeatureRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFeatureRequest $request)
    {
        if(!check('Permission')->add){
            return back();
        }
        Feature::create($request->all())->only('name');
        return redirect()->route('admin.user.feature.index')->with('success',$request->name.' successfylly created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function show(Feature $feature)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function edit(Feature $feature)
    {
        if(!check('Permission')->edit){
            return back();
        }

        return view('user.feature.edit',['mdata' =>$feature]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFeatureRequest  $request
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFeatureRequest $request, Feature $feature)
    {
        if(!check('Permission')->edit){
            return back();
        }

        $feature->update($request->all());
        return redirect()->route('admin.user.feature.index')->with('success',$feature->name.' successfylly updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feature $feature)
    {
        if(!check('Permission')->delete){
            return back();
        }

        $feature->delete();
        return redirect()->route('setting.feature.index')->with('success',"$feature->name Feature successfylly deleted");
    }
}
