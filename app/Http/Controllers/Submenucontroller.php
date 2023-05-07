<?php

namespace App\Http\Controllers;

use App\Models\Submenu;
use App\Http\Requests\StoreSubmenuRequest;
use App\Http\Requests\UpdateSubmenuRequest;

class Submenucontroller extends Controller
{
    public function __construct() {
        $this->middleware(['auth',"check:Sub-menu"]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $n['mdata'] = Submenu::paginate();
       return view('pages.menus.sub-menu.index',$n);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(!check('Sub-menu')->add){
            return back();
        }
        return view('pages.menus.sub-menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubmenuRequest $request)
    {
        if(!check('Sub-menu')->add){
            return back();
        }
        Submenu::create($request->all())->only('name','url','manu_id','serial');
        return redirect()->route('admin.menu.sub-menu.index')->with('success',$request->name.' successfylly created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Submenu $submenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Submenu $submenu)
    {
        if(!check('Sub-menu')->edit){
            return back();
        }
        return view('pages.menu.sub-menu.edit',['mdata' =>$submenu]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubmenuRequest $request, Submenu $submenu)
    {
        if(!check('Sub-menu')->edit){
            return back();
        }

        $submenu->update($request->all());
        return redirect()->route('admin.menu.sub-menu.index')->with('success',$submenu->name.' successfylly updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Submenu $submenu)
    {
        //
    }
}
