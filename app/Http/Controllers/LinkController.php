<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Http\Requests\StoreLinkRequest;
use App\Http\Requests\UpdateLinkRequest;

class LinkController extends Controller
{
    public function __construct() {
        $this->middleware(['auth',"check:Link"]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $n['mdata'] = Link::orderBy('id','desc')->get();
        return view('pages.setup.link.index',$n);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(!check('Link')->add){
            return back();
        }
    return view('pages.setup.link.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLinkRequest $request)
    {
        if(!check('Link')->add){
            return back();
        }
        Link::create($request->all())->only('name','url');
        return redirect()->route('admin.setup.link.index')->with('success',$request->name.' successfylly created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Link $link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Link $link)
    {
        if(!check('Link')->edit){
            return back();
        }

        return view('pages.setup.link.edit',['mdata' =>$link]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLinkRequest $request, Link $link)
    {
        if(!check('Link')->edit){
            return back();
        }

        $link->update($request->all());
        return redirect()->route('admin.setup.link.index')->with('success',$link->name.' successfylly updated');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Link $link)
    {
        //
    }
}
