<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Http\Requests\StoreVideoRequest;
use App\Http\Requests\UpdateVideoRequest;
use Illuminate\Support\Str;

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
        // <iframe width="560" height="315" src="https://www.youtube.com/embed/ifi_RWHDfMY" title="YouTube video player"
        //     frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;
        //     web-share" allowfullscreen></iframe>
        $video_id = Str::afterLast($request->embed_code,'https://youtu.be/');
        if($video_id == $request->embed_code){
            $video_id = Str::afterLast($request->embed_code,'https://www.youtube.com/watch?v=');
            if($video_id == $request->embed_code){
                $video_id = Str::betweenFirst($request->embed_code,'https://www.youtube.com/embed/','" title');
                if($video_id == $request->embed_code){
                    return back()->with('err','Please Insert a valid Link of Youtube Video ');
                }
            }
        }
        // dd($video_id);
        $link = "https://www.youtube.com/embed/$video_id";

        Video::create([
            'for' => $request->for,
            'embed_code' => $link,
            'title' => $request->title,
            'des' => $request->des,
            'additional_des' => $request->additional_des,
            'default' => $request->default,
        ]);
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
