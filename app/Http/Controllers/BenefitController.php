<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use App\Http\Requests\StoreBenefitRequest;
use App\Http\Requests\UpdateBenefitRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BenefitController extends Controller
{
    public function __construct() {
        $this->middleware(['auth',"check:Benefit"]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $n['mdata'] = Benefit::orderBy('priority','asc')->get();
        return view('pages.benefit.index',$n);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(!check('Benefit')->add){
            return back();
        }
    return view('pages.benefit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBenefitRequest $request)
    {
        if(!check('Benefit')->add){
            return back();
        }


        if($request->hasFile('image')){
            $image = $request->file('image')->store('image');
      }else{
            $image = null;
      }

        Benefit::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'image' => $image,
            'description' => $request->description,
            'priority' => $request->priority,
        ]);
        return redirect()->route('admin.page.benefit.index')->with('success',$request->name.' successfylly created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Benefit $benefit)
    {
        $n['mdata'] = $benefit;
        return view('pages.benefit.show',$n);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Benefit $benefit)
    {
        if(!check('Benefit')->edit){
            return back();
        }

        return view('pages.benefit.edit',['mdata' =>$benefit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBenefitRequest $request, Benefit $benefit)
    {
        if(!check('Benefit')->edit){
            return back();
        }

        if($request->hasFile('image')){
            if($benefit->image){
                 Storage::delete($benefit->image);

            }
            $image = $request->file('image')->store('image');
      }else{
            $image = $benefit->image;
      }

        $benefit->update([
            'title' => $request->title,
            'image' => $image,
            'slug' => Str::slug($request->title, '-'),
            'description' => $request->description,
            'priority' => $request->priority,
        ]);
        return redirect()->route('admin.page.benefit.index')->with('success',$benefit->name.' successfylly updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
           $benefit = Benefit::findOrFail($id);


        if($benefit->image){
            Storage::delete($benefit->image);

       }
       $benefit->delete();

       return Redirect::back()->with('success',' Benefit Delete SuccessfullY');
    }
}
