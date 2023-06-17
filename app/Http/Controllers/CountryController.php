<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CountryController extends Controller
{
    public function index()
     {
         $countrys = Country::all();
         return view('pages.country.index',compact('countrys'));
     }


     public function create()
     {
        return view('pages.country.create');
     }

     public function store(Request $request)
     {
            $request->validate([
                  'country' => 'required|unique:countries',
            ]);

          
    

            Country::create([
                'country' => $request->country,
            ]);

            return Redirect::back()->with('success',' Successfully created');
     }


     public function edit(Country $country)
     {
        return view('pages.country.edit',compact('country'));
     }


     public function update(Request $request, Country $country)
     {
        $request->validate([
            'country' => 'required',
      ]);

     


      $country->update([
          'country' => $request->country,
      ]);


          return to_route('admin.country.index')->with('success',' Successfully Update');
     }


   


     public function destroy($id)
     {
      
        $country = Country::findOrFail($id);
      
      
       $country->delete();
     
       return Redirect::back()->with('success',' Country Delete SuccessfullY');
     }
}
