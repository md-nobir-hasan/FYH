<?php

namespace App\Http\Controllers;

use App\Http\Requests\OpportunityRequest;
use App\Models\Opportunity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OpporcunityController extends Controller
{
    public function create()
    {
          $opportunity = Opportunity::first() ?? null;
          return view('pages.opportunity.edit',compact('opportunity'));
    }


    public function store(OpportunityRequest $request)
    {
      
         

          Opportunity::create([
            'title' => $request->title,
            'heading' => $request->heading,
            'subtitle' => $request->subtitle,
            'opOne' => $request->opOne,
            'opTwo' => $request->opTwo,
            'opThree' => $request->opThree,
            'opFour' => $request->opFour,
            'opFive' => $request->opFive,
            'opSix' => $request->opSix,
            'opSeven' => $request->opSeven,
            'opEight' => $request->opEight,
            'opEight' => $request->opEight,
            'opNine' => $request->opNine,
            'icon' => $request->icon,
         
          ]);

           
          return Redirect::back()->with('success',' Successfully created');
    }

    public function update(OpportunityRequest $request, Opportunity $opportunity)
    {
        
          $opportunity->update([
            'title' => $request->title,
            'heading' => $request->heading,
            'subtitle' => $request->subtitle,
            'opOne' => $request->opOne,
            'opTwo' => $request->opTwo,
            'opThree' => $request->opThree,
            'opFour' => $request->opFour,
            'opFive' => $request->opFive,
            'opSix' => $request->opSix,
            'opSeven' => $request->opSeven,
            'opEight' => $request->opEight,
            'opEight' => $request->opEight,
            'opNine' => $request->opNine,
            'icon' => $request->icon,
          ]);
          return Redirect::back()->with('success',' Successfully Update');
    }

 
}
