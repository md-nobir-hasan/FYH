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
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'benefit_title' => $request->benefit_title,
            'benefit_subtitle' => $request->benefit_subtitle,
                'story_title' => $request->story_title,
                'story_subtitle' => $request->story_subtitle,
                'service_title' => $request->service_title,
                'service_subtitle'	=> $request->service_subtitle,
          ]);

           
          return Redirect::back()->with('success',' Successfully created');
    }

    public function update(OpportunityRequest $request, Opportunity $opportunity)
    {
        
          $opportunity->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'benefit_title' => $request->benefit_title,
            'benefit_subtitle' => $request->benefit_subtitle,
                'story_title' => $request->story_title,
                'story_subtitle' => $request->story_subtitle,
                'service_title' => $request->service_title,
                'service_subtitle'	=> $request->service_subtitle,
          ]);
          return Redirect::back()->with('success',' Successfully Update');
    }

 
}
