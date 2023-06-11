<?php

namespace App\Http\Controllers;

use App\Http\Requests\CongrateRequest;
use App\Models\Congrat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class CongratController extends Controller
{
    public function create()
    {
          $congrat = Congrat::first() ?? null;
          return view('pages.congrat.edit',compact('congrat'));
    }


    public function store(CongrateRequest $request)
    {
      
         if($request->hasFile('image')){
            $image = $request->file('image')->store('image');
      }else{
            $image = null;
      }

          Congrat::create([
            'image' => $image,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'heading' => $request->heading,
            'opOne' => $request->opOne,
           'opTwo' => $request->opTwo,
           'opThree' => $request->opThree,
           'opFour' => $request->opFour,
           'icon' => $request->icon,
            'option_title' => $request->option_title,
            'button_one' => $request->button_one,
            'button_two' => $request->button_two,
          ]);

           
          return Redirect::back()->with('success',' Successfully created');
    }

    public function update(CongrateRequest $request, Congrat $congrat)
    {
      

       if($request->hasFile('image')){
        if($congrat->image){
             Storage::delete($congrat->image);
             
        }
        $image = $request->file('image')->store('image');
  }else{
        $image = $congrat->image;
  }

          $congrat->update([
            'image' => $image,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'heading' => $request->heading,
            'opOne' => $request->opOne,
           'opTwo' => $request->opTwo,
           'opThree' => $request->opThree,
           'opFour' => $request->opFour,
           'icon' => $request->icon,
            'option_title' => $request->option_title,
            'button_one' => $request->button_one,
            'button_two' => $request->button_two,
          ]);
          return Redirect::back()->with('success',' successfully Update');
    }

}
