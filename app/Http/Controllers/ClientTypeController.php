<?php

namespace App\Http\Controllers;

use App\Models\ClientType;
use App\Http\Requests\StoreClientTypeRequest;
use App\Http\Requests\UpdateClientTypeRequest;

class ClientTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $n['client_types'] = ClientType::where('deleted_at',null)->orderBy('id','desc')->get();
        return view('pages.setup.client-type.index',$n);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ClientType $clientType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClientType $clientType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientTypeRequest $request, ClientType $clientType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClientType $clientType)
    {
        //
    }
}
