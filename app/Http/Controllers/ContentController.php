<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContentRequest;
use App\Models\Content;
use App\Models\Menu;
use App\Models\Submenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ContentController extends Controller
{
    public function index()
    {
        $contents = Content::orderBy('priority', 'asc')->get();
        return view('pages.content.index',compact('contents'));
    }


    public function create()
    {
         $menus = Menu::select('id', 'name')->get();
      //   $subMenus = Submenu::select('')
       return view('pages.content.create', ['menus' => $menus]);
    }

    public function store(ContentRequest $request)
    {
         
       
           if($request->hasFile('image')){
               $image = $request->file('image')->store('image');
         }else{
               $image = null;
         }

         $menuName = Menu::find($request->menu_id);
       

           Content::create([
               'title' => $request->title,
               'image' => $image,
               'description' => $request->description,
               'priority' => $request->priority,
               'slug' => Str::slug($menuName->name, '-'),
               'user_id' => Auth::user()->id,
               'menu_id' => $request->menu_id,
           ]);

           return Redirect::back()->with('success',' Successfully created');
    }


    public function edit($id)
    {
       $content = Content::findOrFail($id);
     
      $menus = Menu::select('id', 'name')->get();
       return view('pages.content.edit',compact('content', 'menus'));
    }


    public function update(ContentRequest $request, Content $content)
    {
  
          
     if($request->hasFile('image')){
         if($content->image){
            Storage::delete($content->image);
            
         }
       $image = $request->file('image')->store('image');
         }else{
       $image = $content->image;
         }

         $menuName = Menu::find($request->menu_id);
         $content->update([
          'title' => $request->title,
          'image' => $image,
          'description' => $request->description,
          'priority' => $request->priority,
          'slug' => Str::slug($menuName->name, '-'),
          'user_id' => Auth::user()->id,
          'menu_id' => $request->menu_id,
         ]);

         return to_route('admin.contents.index')->with('success',' Successfully Update');
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
