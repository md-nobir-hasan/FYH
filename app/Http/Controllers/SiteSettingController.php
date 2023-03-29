<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSiteSettingRequest;
use App\Http\Requests\UpdateSiteSettingRequest;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;

class SiteSettingController extends Controller
{
    public function __construct() {
        $this->middleware(['auth',"check:Site Setting"]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!check('Site Setting')->add){
            return back();
        }
        $n['services'] = Service::with(['mainKey'])->where('status',1)->orderBy('id','desc')->get()->groupBy('main_key_id');
        return view('backend.pages.setting.site.create',$n);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSiteSettingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSiteSettingRequest $request)
    {
        if(!check('Site Setting')->add){
            return back();
        }
        SiteSetting::where('user_id',Auth::user()->id)->where('status',1)->delete();

        foreach($request->service_id as $value){
            $insert = new SiteSetting();
            $insert->user_id = Auth::user()->id;
            $insert->service_id = $value;
            $insert->save();
        }

        return redirect()->back()->with('success','Stting seved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SiteSetting  $siteSetting
     * @return \Illuminate\Http\Response
     */
    public function show(SiteSetting $siteSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SiteSetting  $siteSetting
     * @return \Illuminate\Http\Response
     */
    public function edit(SiteSetting $siteSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSiteSettingRequest  $request
     * @param  \App\Models\SiteSetting  $siteSetting
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSiteSettingRequest $request, SiteSetting $siteSetting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SiteSetting  $siteSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiteSetting $siteSetting)
    {
        //
    }
}
