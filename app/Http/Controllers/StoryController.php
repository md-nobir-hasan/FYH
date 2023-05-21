<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoryStoreRequest;
use App\Http\Requests\StoryUpdateRequest;
use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;



class StoryController extends Controller
{
    public function index()
    {
        $stories = Story::orderBy('priority', 'asc')->paginate(20);
        return view('pages.story.index',compact('stories'));
    }


    public function create()
    {
       return view('pages.story.create');
    }

    public function store(StoryStoreRequest $request)
    {
        
          

           if($request->hasFile('image')){
               $image = $request->file('image')->store('image');
         }else{
               $image = null;
         }

           Story::create([
               'name' =>$request->name,
               'slug' => Str::slug($request->name, '-'),
               'title' => $request->title,
               'image' => $image,
               'description' => $request->description,
               'priority' => $request->priority,
               'profession' =>$request->profession,
               'address' => $request->address,
           ]);

           return Redirect::back()->with('success',' Successfully created');
    }


    public function edit(Story $story)
    {
       return view('pages.story.edit',compact('story'));
    }


    public function update(StoryUpdateRequest $request, Story $story)
    {

     if($request->hasFile('image')){
         if($story->image){
            Storage::delete($story->image);
            
         }
       $image = $request->file('image')->store('image');
         }else{
       $image = $story->image;
         }

         $story->update([
            'name' =>$request->name,
            'slug' => Str::slug($request->name, '-'),
            'title' => $request->title,
            'image' => $image,
            'description' => $request->description,
            'priority' => $request->priority,
            'profession' =>$request->profession,
            'address' => $request->address,
         ]);

         return to_route('admin.stories.index')->with('success',' Successfully Update');
    }


    public function show(Story $story)
    {
        return view('pages.story.show',compact('story'));
    }


    public function destroy($id)
    {
     
       $story = Story::findOrFail($id);
     
       if($story->image){
           Storage::delete($story->image);
           
      }
      $story->delete();
    
      return Redirect::back()->with('success',' Story Delete SuccessfullY');
    }
}
