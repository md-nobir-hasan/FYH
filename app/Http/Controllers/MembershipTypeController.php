<?php

namespace App\Http\Controllers;

use App\Models\MembershipType;
use App\Http\Requests\StoreMembershipTypeRequest;
use App\Http\Requests\UpdateMembershipTypeRequest;

class MembershipTypeController extends Controller
{

    public function __construct() {
        $this->middleware(['auth',"check:Membership Type"]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $n['mdata'] = MembershipType::orderBy('id','desc')->get();
        return view('pages.setup.membership-type.index',$n);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(!check('Membership Type')->add){
            return back();
        }
    return view('pages.setup.membership-type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMembershipTypeRequest $request)
    {
        if(!check('Membership Type')->add){
            return back();
        }
        MembershipType::create($request->all())->only('name','mt_code','price');
        return redirect()->route('admin.setup.membership.index')->with('success',$request->name.' successfylly created');
    }

    /**
     * Display the specified resource.
     */
    public function show(MembershipType $membership)
    {
        $n['mdata'] = $membership;
        return view('pages.setup.membership-type.show',$n);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MembershipType $membership)
    {
        if(!check('Membership Type')->edit){
            return back();
        }
        return view('pages.setup.membership-type.edit',['mdata' =>$membership]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMembershipTypeRequest $request, MembershipType $membership)
    {
        if(!check('Membership Type')->edit){
            return back();
        }

        $membership->update($request->all());
        return redirect()->route('admin.setup.membership.index')->with('success',$membership->name.' successfylly updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MembershipType $membershipType)
    {
        //
    }
}
