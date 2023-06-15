<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomeRequest;
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


    public function store(HomeRequest $request)
    {
       
         if($request->hasFile('image')){
            $image = $request->file('image')->store('image');
      }else{
            $image = null;
      }

      if($request->hasFile('lgImage')){
            $lgImage = $request->file('lgImage')->store('image');
      }else{
            $lgImage = null;
      }
      if($request->hasFile('help_image')){
            $help_image = $request->file('help_image')->store('image');
      }else{
            $help_image = null;
      }

      if($request->hasFile('thank_image')){
            $thank_image = $request->file('thank_image')->store('image');
      }else{
            $thank_image = null;
      }

          Home::create([
              'image' => $image,
              'lgImage' => $lgImage,
              'title_one' => $request->title_one,
              'title_one_description' => $request->title_one_description,
              'title_two' => $request->title_two,
              'title_two_description' => $request->title_two_description,
              'benefit_title' => $request->benefit_title,
              'benefit_subtitle' => $request->benefit_subtitle,
              'story_title' => $request->story_title,
              'story_subtitle' => $request->story_subtitle,
              'feature_title' => $request->feature_title,
              'feature_subtitle' => $request->feature_subtitle,
              'image_title' => $request->image_title,
              'image_subtitle' => $request->image_subtitle,
              'service_title' => $request->service_title,
              'service_subtitle' => $request->service_subtitle,
              'customer_title' => $request->customer_title,
              'customer_subtitle' => $request->customer_subtitle,
              'share_title' => $request->share_title,
              'share_subtitle' => $request->share_subtitle,
              'move_title' => $request->move_title,
'move_subtile' => $request->move_subtile,
'intr_title' => $request->intr_title,
'intr_subtile' => $request->intr_subtile,
'help_image' => $help_image,
'help_title' => $request->help_title,
'help_subtile' => $request->help_subtile,
'thank_heading' => $request->thank_heading,
'thank_image' => $thank_image,
'thank_subtitle' => $request->thank_subtitle,
'thank_title' => $request->thank_title,
          ]);

           
          return Redirect::back()->with('success',' Successfully created');
    }

    public function update(HomeRequest $request, Home $home)
    {
    

       if($request->hasFile('image')){
        if($home->image){
             Storage::delete($home->image);
             
        }
        $image = $request->file('image')->store('image');
  }else{
        $image = $home->image;
  }

  if($request->hasFile('lgImage')){
      if($home->lgImage){
           Storage::delete($home->lgImage);
           
      }
      $lgImage = $request->file('lgImage')->store('image');
}else{
      $lgImage = $home->lgImage;
}


if($request->hasFile('help_image')){
      if($home->help_image){
           Storage::delete($home->help_image);
           
      }
      $help_image = $request->file('help_image')->store('image');
}else{
      $help_image = $home->help_image;
}

if($request->hasFile('thank_image')){
      if($home->thank_image){
           Storage::delete($home->thank_image);
           
      }
      $thank_image = $request->file('thank_image')->store('image');
}else{
      $thank_image = $home->thank_image;
}

          $home->update([
            'title_one' => $request->title_one,
            'title_one_description' => $request->title_one_description,
            'title_two' => $request->title_two,
            'title_two_description' => $request->title_two_description,
            'benefit_title' => $request->benefit_title,
            'benefit_subtitle' => $request->benefit_subtitle,
            'story_title' => $request->story_title,
            'story_subtitle' => $request->story_subtitle,
            'feature_title' => $request->feature_title,
            'feature_subtitle' => $request->feature_subtitle,
            'image_title' => $request->image_title,
            'image_subtitle' => $request->image_subtitle,
            'service_title' => $request->service_title,
            'service_subtitle' => $request->service_subtitle,
            'customer_title' => $request->customer_title,
            'customer_subtitle' => $request->customer_subtitle,
            'share_title' => $request->share_title,
            'share_subtitle' => $request->share_subtitle,
            'image' => $image,
            'lgImage' => $lgImage,
            'move_title' => $request->move_title,
           'move_subtile' => $request->move_subtile,
           'intr_title' => $request->intr_title,
           'intr_subtile' => $request->intr_subtile,
           'help_image' => $help_image,
           'help_title' => $request->help_title,
           'help_subtile' => $request->help_subtile,
           'thank_heading' => $request->thank_heading,
           'thank_image' => $thank_image,
           'thank_subtitle' => $request->thank_subtitle,
           'thank_title' => $request->thank_title,
          ]);
          return Redirect::back()->with('success',' Successfully Update');
    }

 


}
