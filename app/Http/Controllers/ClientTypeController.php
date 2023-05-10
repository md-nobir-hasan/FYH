<?php

namespace App\Http\Controllers;

use App\Models\ClientType;
use App\Http\Requests\StoreClientTypeRequest;
use App\Http\Requests\UpdateClientTypeRequest;

class ClientTypeController extends Controller
{

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
    return view('pages.setup.client-type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientTypeRequest $request)
    {
        if(!check('Client Type')->add){
            return back();
        }
        ClientType::create($request->all())->only('name','ct_code');
        return redirect()->route('admin.setup.client-type.index')->with('success',$request->name.' successfylly created');
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

        return view('pages.setup.client-type.edit',['mdata' =>$clientType]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientTypeRequest $request, ClientType $clientType)
    {
        if(!check('Client Type')->edit){
            return back();
        }

        $clientType->update($request->all());
        return redirect()->route('admin.setup.client-type.index')->with('success',$clientType->name.' successfylly updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClientType $clientType)
    {
        //
    }
}
