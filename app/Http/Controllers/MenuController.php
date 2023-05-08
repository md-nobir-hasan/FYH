<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Models\ClientType;
use App\Models\Link;

class MenuController extends Controller
{
    public function __construct() {
        $this->middleware(['auth',"check:Main Menu"]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $n['all_menus'] = Menu::with(['client_type','link'])->OrderBy('serial','asc')->get()->groupBy('name');
        $n['client_tyes'] = ClientType::get();
        $n['normal_users_menus'] = Menu::with(['client_type','link'])->where('client_type_id',null)->orderBy('serial','asc')->get();
        // dd($n);
       return view('pages.menus.main-menu.index',$n);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(!check('Main Menu')->add){
            return back();
        }
        $n['links'] = Link::get();
        $n['user_types'] = ClientType::get();
        return view('pages.menus.main-menu.create',$n);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMenuRequest $request)
    {
        if(!check('Main Menu')->add){
            return back();
        }

        foreach($request->client_type_id as $ct_id){
            $insert = new Menu();
            $insert->name = $request->name;
            $insert->link_id = $request->link_id;
            $insert->serial = $request->serial;
            $insert->client_type_id = $ct_id;
            $insert->save();
        }
        // Menu::create($request->all())->only('name','url','type','serial');
        return redirect()->route('admin.menu.menu.index')->with('success',$request->name.' successfylly created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        if(!check('Main Menu')->edit){
            return back();
        }
        $n['links'] = Link::get();
        $n['user_types'] = ClientType::get();
        $n['mdata'] = $menu;
        return view('pages.menus.main-menu.edit',$n);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMenuRequest $request, Menu $menu)
    {
        if(!check('Main Menu')->edit){
            return back();
        }

        $menu->update($request->all());
        return redirect()->route('admin.menu.menu.index')->with('success',$menu->name.' successfylly updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
