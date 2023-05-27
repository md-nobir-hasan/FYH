<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Benefit;
use App\Models\Billing;
use App\Models\ClientType;
use App\Models\Congrat;
use App\Models\Content;
use App\Models\Home;
use App\Models\Opportunity;
use App\Models\Service;
use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class FrontendControler extends Controller
{
  public function homePage(){
     $home = Home::first() ?? null;
     $services = Service::orderBy('priority','asc')->take(4)->get() ?? null;
     $benefits = Benefit::orderBy('priority','asc')->take(6)->get() ?? null;
     $stories = Story::select('id', 'name','slug', 'title', 'priority', 'image', 'description', 'profession')->orderBy('priority','asc')->take(15)->get();
     $allTitle = Opportunity::select('benefit_title',	'benefit_subtitle',	'story_title',	'story_subtitle',	'service_title',	'service_subtitle')->first();
    return view('frontend.pages.home',compact('home', 'services', 'benefits', 'stories', 'allTitle'));
  }

  public function membershipPage(){
       $memberShips = ClientType::orderBy('created_at', 'desc')->get();
       $opportunity = Opportunity::select('title',	'subtitle',	'description')->first();
    return view('frontend.pages.member', compact('memberShips','opportunity'));
  }

  public function communityPage(){
      $stories = Story::orderBy('priority','asc')->take(10)->get();
    return view('frontend.pages.community',compact('stories'));
  }


  public function dynamicMenu($slug)
  {
      $content = Content::where('slug', $slug)->first();
      return view('frontend.pages.dynamicMenu', ['content' => $content]);
  }


 
  public function congratsPage($planId=null){

    $Congrat = Congrat::first();
    return view('frontend.pages.congrats', compact('Congrat'));
  }

  public function about(){
     $about = About::first();
     $stories = Story::orderBy('priority','asc')->take(3)->get();
    return view('frontend.pages.about', compact('about', 'stories'));
  }

  public function discover(){
    return view('frontend.pages.discover');
  }

  public function benefitPage(){
      $Benefits = Benefit::orderBy('priority','asc')->get();
      return view('frontend.pages.benefit', ['Benefits' => $Benefits]);
  }
  public function singleStory($slug){
       $story = Story::where('slug', $slug)->first(); 
    return view('frontend.pages.single-story', ['story' => $story]);
  }

  public function moveSwitzerland(){
    return view('frontend.pages.move-ch');
  }
  public function integrationSwitzerland(){
    return view('frontend.pages.integration-ch');
  }
  public function billingPage($planId =null){
    if($planId ==null){
      return Redirect::back();
  }
   $plan = ClientType::where('plan_id', $planId)->first();
    return view('frontend.pages.billing', ['plan' => $plan]);
  }

  public function billingStore(Request $request, $planId)
  {
        if($planId==null){
           return Redirect::back();
        }
       $id =  Billing::insertGetId([
          'f_name' => $request->f_name,
           'l_name' => $request->l_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'country' => $request->country,
            'city' => $request->city,
            'zip' => $request->zip,
            'user_id' => auth()->user()->id,	
            'plan_id' => $planId,
        ]);
      
          $user = auth()->user();
         $intent = $user->createSetupIntent();
        $stripe_key = config('services.stripe.key');
         
         return view('frontend.pages.payment',[
       
        'billing' => Billing::findOrFail($id),
         'intent' => $user->createSetupIntent(),
         'stripe_key' => config('services.stripe.key'),
         'planId' => ClientType::where('plan_id', $planId)->first(),
         ]);
  }

  public function paymentPage($planId, $billing){
         
    return "all done";
    
    // $billing = Billing::findOrFail($billing);
    // $user = auth()->user();
    //  $intent = $user->createSetupIntent();
    //     $stripe_key = config('services.stripe.key');
        
    return view('frontend.pages.payment',compact('planId', 'billing', 'stripe_key', 'intent'));
  }

  // checkout
  public function checkout($planId)
  {
    $user  = auth()->user() ?? null;
    $plan = ClientType::where('plan_id', $planId)->first();
    if(!$plan){
          Session::flash('error', 'unable To Locate Membership');
        return redirect()->back();
    }

    if($user==null){
        return to_route('register');
    }else{
      return view('frontend.pages.checkout', [
        'intent' => $user->createSetupIntent(),
        'stripe_key' => config('services.stripe.key'),
        'plan' => $plan,
      ]);
    }
  
  }


}
