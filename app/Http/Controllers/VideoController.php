<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Http\Requests\StoreVideoRequest;
use App\Http\Requests\UpdateVideoRequest;
use App\Models\Link;

class VideoController extends Controller
{
    public function __construct() {
        $this->middleware(['auth',"check:Video"]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $n['mdata'] = Video::orderBy('id','desc')->get();
        return view('pages.setup.videos.index',$n);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(!check('Video')->add){
            return back();
        }
        return view('pages.setup.videos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVideoRequest $request)
    {
        if(!check('Video')->add){
            return back();
        }
        Video::create($request->all())->only('for','embed_code','title','des','additional_des','default');
        return redirect()->route('admin.setup.video.index')->with('success',$request->name.' successfylly created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        if(!check('Video')->edit){
            return back();
        }

        return view('pages.setup.videos.edit',['mdata' =>$video]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVideoRequest $request, Video $video)
    {
        if(!check('Video')->edit){
            return back();
        }

        $video->update($request->all());
        return redirect()->route('admin.setup.video.index')->with('success',$video->name.' successfylly updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        //
    }
}
