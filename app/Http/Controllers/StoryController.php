<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoryStoreRequest;
use App\Http\Requests\StoryUpdateRequest;
use App\Models\Story;
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
               'city' =>$request->city,
               'user_id' => auth()->user()->id,
               'country_id' => $request->country_id,
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
            'city' =>$request->city
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

    public function status($id)
    {
         $story = Story::findOrFail($id);
          if($story->status == 1){
             $story->status = 0;
             $story->save();
          }elseif ($story->status == 0) {
            $story->status = 1;
            $story->save();
          }

          return Redirect::back()->with('success',' Status Update SuccessfullY');
    }


   public function feature($id)  {
    $story = Story::findOrFail($id);
    if($story->feature == 1){
       $story->feature = 0;
       $story->save();
    }elseif ($story->feature == 0) {
      $story->feature = 1;
      $story->save();
    }

    return Redirect::back()->with('success',' Feature Update SuccessfullY');
    }
}
