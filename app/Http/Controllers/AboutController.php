<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function create()
    {
          $about = About::first() ?? null;
          return view('pages.about.edit',compact('about'));
    }


    public function store(AboutRequest $request)
    {
   
 
            //multiple image
         if($request->hasFile('images')){
            $images = $request->file('images');
            foreach ($images as $image) {
            $path[] = $image->store('image');
            }
      }else{
            $path[] = null;
      }

      //  fast image 
      if($request->hasFile('first_image')){
            $first_image = $request->file('first_image')->store('image');
      }else{
            $first_image = null;
      }



      // second image

      if($request->hasFile('second_image')){
            $second_image = $request->file('second_image')->store('image');
      }else{
            $second_image = null;
      }
       

          About::create([
              'title' => $request->title,
              	'title_description' => $request->title_description,
               'heading' => $request->heading,
              	'heading_description' => $request->heading_description,
              'images' => json_encode($path),
               'images_description' => $request->images_description,
               'youtube' => $request->youtube,
                'youtube_description' => $request->youtube_description,
                 'first_image' => $first_image , 
                 'first_image_story' => $request->first_image_story, 
                 'second_image' => $second_image,
                 	'second_image_story' => $request->second_image_story,
          ]);

           
          return Redirect::back()->with('success',' Successfully created');
    }

    public function update(AboutRequest $request, About $about)
    {
      
      // multiple image 
       if($request->hasFile('images')){
            $images = $request->file('images');
            if($about->images){
                  foreach(json_decode($about->images) as $item){
                        Storage::delete(($item));
                  }
               }
               foreach ($images as $image) {
                  $img[] = $image->store('image');
                  }

                  $path = json_encode($img);
       }else{
            $path = $about->images;  
       }
          

      // fast image
      if($request->hasFile('first_image')){
            if($about->first_image){
               Storage::delete($about->first_image);
               
            }
          $image = $request->file('first_image')->store('image');
            }else{
          $first_image = $about->first_image;
            }


              // second image
            if($request->hasFile('second_image')){
                  if($about->second_image){
                     Storage::delete($about->second_image);
                     
                  }
                $second_image = $request->file('second_image')->store('image');
                  }else{
                $second_image = $about->second_image;
                  }

          $about->update([
            'title' => $request->title,
            'title_description' => $request->title_description,
       'heading' => $request->heading,
            'heading_description' => $request->heading_description,
      'images' => $path,
       'images_description' => $request->images_description,
       'youtube' => $request->youtube,
        'youtube_description' => $request->youtube_description,
         'first_image' => $first_image , 
         'first_image_story' => $request->first_image_story, 
         'second_image' => $second_image,
               'second_image_story' => $request->second_image_story,
          ]);
          return Redirect::back()->with('success',' successfylly Update');
    }

 
}
