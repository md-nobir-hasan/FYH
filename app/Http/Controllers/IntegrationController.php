<?php

namespace App\Http\Controllers;

use App\Models\Integration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class IntegrationController extends Controller
{
    public function index()
    {
        $integration = Integration::orderBy('priority', 'asc')->get();
        return view('pages.Integration.index',compact('integration'));
    }


    public function create()
    {
       return view('pages.Integration.create');
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
   

           Integration::create([
               'title' => $request->title,
               'slug' => Str::slug($request->title, '-'),
               'image' => $image,
               'description' => $request->description,
               'priority' => $request->priority
           ]);

           return Redirect::back()->with('success',' Successfully created');
    }


    public function edit(Integration $integration)
    {
    
       return view('pages.Integration.edit',compact('integration'));
    }


    public function update(Request $request, Integration $integration)
    {
       $request->validate([
           'title' => 'required',
           'image' => 'nullable',
           'description' => 'required',
           'priority' => 'required'
     ]);

     if($request->hasFile('image')){
         if($integration->image){
            Storage::delete($integration->image);
            
         }
       $image = $request->file('image')->store('image');
         }else{
       $image = $integration->image;
         }

         $integration->update([
           'title' => $request->title,
           'slug' => Str::slug($request->title, '-'),
           'image' => $image,
           'description' => $request->description,
           'priority' => $request->priority
         ]);

         return to_route('admin.integrations.index')->with('success',' Successfully Update');
    }


    public function show(Integration $integration)
    {
      return view('pages.Integration.show',compact('integration'));
    }


    public function destroy($id)
    {
     
       $integration = Integration::findOrFail($id);
     
       if($integration->image){
           Storage::delete($integration->image);
           
      }
      $integration->delete();
    
      return Redirect::back()->with('success',' Services Delete SuccessfullY');
    }


    public function status($id)
    {
         $integration = Integration::findOrFail($id);
          if($integration->status == 1){
             $integration->status = 0;
             $integration->save();
          }elseif ($integration->status == 0) {
            $integration->status = 1;
            $integration->save();
          }

          return Redirect::back()->with('success',' Status Update SuccessfullY');
    }
}
