<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function create()
    {
          $homeSection = Home::first() ?? null;
          return view('pages.home.edit',compact('homeSection'));
    }


    public function store(Request $request)
    {
         $request->validate([
              'image' => 'required',
              'details' => 'required|min:15'
         ]);

         if($request->hasFile('image')){
            $image = $request->file('image')->store('image');
      }else{
            $image = null;
      }

          Home::create([
              'details' => $request->details,
              'image' => $image,
          ]);

           
          return Redirect::back()->with('success',' Successfully created');
    }

    public function update(Request $request, Home $home)
    {
        $request->validate([
            'image' => 'nullable',
            'details' => 'required|min:15'
       ]);

       if($request->hasFile('image')){
        if($home->image){
             Storage::delete($home->image);
             
        }
        $image = $request->file('image')->store('image');
  }else{
        $image = $home->image;
  }

          $home->update([
            'details' => $request->details,
            'image' => $image,
          ]);
          return Redirect::back()->with('success',' successfylly Update');
    }

 


}
