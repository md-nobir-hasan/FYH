<?php

namespace App\Http\Controllers;

use App\Models\Help;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class HelpController extends Controller
{
    public function index()
    {
        $helps = Help::orderBy('created_at', 'desc')->get();
        return view('pages.help.index',compact('helps'));
    }


    public function create()
    {
       return view('pages.help.create');
    }

    public function store(Request $request)
    {
           $request->validate([
                 'title' => 'required|max:240',
                 'image' => 'nullable',
                 'description' => 'required',
           ]);

           if($request->hasFile('image')){
               $image = $request->file('image')->store('image');
         }else{
               $image = null;
         }
   

           Help::create([
               'title' => $request->title,
               'slug' => Str::slug($request->title, '-'),
               'image' => $image,
               'description' => $request->description,
           ]);

           return Redirect::back()->with('success',' Successfully created');
    }


    public function edit(Help  $help)
    {
       return view('pages.help.edit',compact('help'));
    }


    public function update(Request $request, Help $help)
    {
       $request->validate([
           'title' => 'required|max:220',
           'image' => 'nullable',
           'description' => 'required',
     ]);

     if($request->hasFile('image')){
         if($help->image){
            Storage::delete($help->image);
            
         }
       $image = $request->file('image')->store('image');
         }else{
       $image = $help->image;
         }

         $help->update([
           'title' => $request->title,
           'image' => $image,
           'description' => $request->description,
         ]);

         return to_route('admin.helps.index')->with('success',' Successfully Update');
    }


    public function show(Help $help)
    {
        return view('pages.help.show', ['help' => $help]);
    }


    public function destroy($id)
    {
     
       $help = Help::findOrFail($id);
     
       if($help->image){
           Storage::delete($help->image);
           
      }
      $help->delete();
    
      return Redirect::back()->with('success',' Data Delete SuccessfullY');
    }
}
