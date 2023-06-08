<?php

namespace App\Http\Controllers;

use App\Models\MoveTo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;


class MoveToController extends Controller
{
    public function index()
    {
        $moveTo = MoveTo::orderBy('priority', 'asc')->get();
        return view('pages.moveto.index',compact('moveTo'));
    }


    public function create()
    {
       return view('pages.moveto.create');
    }

    public function store(Request $request)
    {
           $request->validate([
                 'title' => 'required',
                 'image' => 'nullable',
                 'description' => 'required',
                 'priority' => 'required'
           ]);

           if($request->hasFile('image')){
               $image = $request->file('image')->store('image');
         }else{
               $image = null;
         }
   

           MoveTo::create([
               'title' => $request->title,
               'slug' => Str::slug($request->title, '-'),
               'image' => $image,
               'description' => $request->description,
               'priority' => $request->priority
           ]);

           return Redirect::back()->with('success',' Successfully created');
    }


    public function edit($id)
    {
             $moveTo = MoveTo::findOrFail($id);
       return view('pages.moveto.edit',compact('moveTo'));
    }


    public function update(Request $request, $id)
    {
      $moveTo = MoveTo::findOrFail($id);
       $request->validate([
           'title' => 'required',
           'image' => 'nullable',
           'description' => 'required',
           'priority' => 'required'
     ]);

     if($request->hasFile('image')){
         if($moveTo->image){
            Storage::delete($moveTo->image);
            
         }
       $image = $request->file('image')->store('image');
         }else{
       $image = $moveTo->image;
         }

         $moveTo->update([
           'title' => $request->title,
           'slug' => Str::slug($request->title, '-'),
           'image' => $image,
           'description' => $request->description,
           'priority' => $request->priority
         ]);

         return to_route('admin.moves.index')->with('success',' Successfully Update');
    }


    public function show($id)
    {
      $moveTo = MoveTo::findOrFail($id);
      return view('pages.moveto.show',compact('moveTo'));
    }


    public function destroy($id)
    {
       $moveTo = MoveTo::findOrFail($id);
      
     
       if($moveTo->image){
           Storage::delete($moveTo->image);
           
      }
      $moveTo->delete();
    
      return Redirect::back()->with('success',' Services Delete SuccessfullY');
    }



    public function status($id)
    {
         $moveTo = MoveTo::findOrFail($id);
          if($moveTo->status == 1){
             $moveTo->status = 0;
             $moveTo->save();
          }elseif ($moveTo->status == 0) {
            $moveTo->status = 1;
            $moveTo->save();
          }

          return Redirect::back()->with('success',' Status Update SuccessfullY');
    }
}
