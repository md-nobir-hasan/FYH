<?php

namespace App\Http\Controllers;

use App\Models\Submenu;
use App\Http\Requests\StoreSubmenuRequest;
use App\Http\Requests\UpdateSubmenuRequest;
use App\Models\ClientType;
use App\Models\Link;
use App\Models\Menu;

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
        $n['mdata'] = Submenu::with(['created_by','updated_by','menu','link'])->paginate();
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
        $n['links'] = Link::get();
        $n['menus'] = Menu::get();
        $n['user_types'] = ClientType::get();
        return view('pages.menus.sub-menu.create',$n);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubmenuRequest $request)
    {
        if(!check('Sub-menu')->add){
            return back();
        }
        $serial_no = Submenu::latest()->first();
        $serial = $serial_no->id + 1;
        foreach($request->client_type_id as $ct_id){
            $insert = new Submenu();
            $insert->name = $request->name;
            if($request->link_id != 'no'){
                $insert->link_id = $request->link_id;
            }
            $insert->menu_id = $request->menu_id;
            $insert->serial = $serial;
            $insert->client_type_id = $ct_id;
            $insert->save();
        }
        return redirect()->route('admin.menu.submenu.index')->with('success',$request->name.' successfylly created');
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
        $n['links'] = Link::get();
        $n['menus'] = Menu::get();
        $n['mdata'] = $submenu;
        return view('pages.menus.sub-menu.edit',$n);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubmenuRequest $request, Submenu $submenu)
    {
        if(!check('Sub-menu')->edit){
            return back();
        }
        // dd($request->all());
        $submenu->name = $request->name;
        if($request->link_id != 'no'){
            $submenu->link_id = $request->link_id;
        }
        $submenu->menu_id = $request->menu_id;
        $submenu->serial = $request->serial;
        $submenu->save();
        return redirect()->route('admin.menu.submenu.index')->with('success',$submenu->name.' successfylly updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Submenu $submenu)
    {
        //
    }
}
