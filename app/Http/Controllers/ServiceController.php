<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
     public function index()
     {
         $services = Service::orderBy('priority', 'asc')->get();
         return view('pages.service.index',compact('services'));
     }


     public function create()
     {
        return view('pages.service.create');
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
    

            Service::create([
                'title' => $request->title,
                'image' => $image,
                'description' => $request->description,
                'priority' => $request->priority
            ]);

            return Redirect::back()->with('success',' Successfully created');
     }


     public function edit(Service $service)
     {
        return view('pages.service.edit',compact('service'));
     }


     public function update(Request $request, Service $service)
     {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable',
            'description' => 'required',
            'priority' => 'required'
      ]);

      if($request->hasFile('image')){
          if($service->image){
             Storage::delete($service->image);
             
          }
        $image = $request->file('image')->store('image');
          }else{
        $image = $service->image;
          }

          $service->update([
            'title' => $request->title,
            'image' => $image,
            'description' => $request->description,
            'priority' => $request->priority
          ]);

          return to_route('admin.services.index')->with('success',' Successfully Update');
     }


     public function show(Service $service)
     {
        # code...
     }


     public function destroy($id)
     {
      
        $service = Service::findOrFail($id);
      
        if($service->image){
            Storage::delete($service->image);
            
       }
       $service->delete();
     
       return Redirect::back()->with('success',' Services Delete SuccessfullY');
     }
}
