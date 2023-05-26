<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Benefit;
use App\Models\ClientType;
use App\Models\Content;
use App\Models\Home;
use App\Models\Service;
use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontendControler extends Controller
{
  public function homePage(){
     $home = Home::first() ?? null;
     $services = Service::orderBy('priority','asc')->take(4)->get() ?? null;
     $benefits = Benefit::orderBy('priority','asc')->take(6)->get() ?? null;
     $stories = Story::select('id', 'name','slug', 'title', 'priority', 'image', 'description', 'profession')->orderBy('priority','asc')->take(15)->get();
    return view('frontend.pages.home',compact('home', 'services', 'benefits', 'stories'));
  }

  public function membershipPage(){
       $memberShips = ClientType::orderBy('created_at', 'desc')->get();
    return view('frontend.pages.member', ['memberShips' => $memberShips]);
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


  public function paymentPage(){
    return view('frontend.pages.payment');
  }
  public function congratsPage($planId=null){
    return view('frontend.pages.congrats');
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
  public function billingPage(){
    return view('frontend.pages.billing');
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
        return to_route('login');
    }else{
      return view('frontend.pages.checkout', [
        'intent' => $user->createSetupIntent(),
        'stripe_key' => config('services.stripe.key'),
        'plan' => $plan,
      ]);
    }
  
  }


}
