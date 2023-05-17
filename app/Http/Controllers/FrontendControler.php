<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use App\Models\ClientType;
use App\Models\Home;
use App\Models\Service;
use App\Models\Story;
use Illuminate\Http\Request;

class FrontendControler extends Controller
{
  public function homePage(){
     $home = Home::first() ?? null;
     $services = Service::orderBy('priority','asc')->take(4)->get() ?? null;
     $benefits = Benefit::orderBy('priority','asc')->take(6)->get() ?? null;
     $stories = Story::select('id', 'name', 'title', 'priority', 'image', 'description', 'profession')->orderBy('priority','asc')->take(15)->get();
    return view('frontend.pages.home',compact('home', 'services', 'benefits', 'stories'));
  }

  public function membershipPage(){
    $n['membership_types'] = ClientType::with(['currency','payDuration'])->limit(2)->get();
    return view('frontend.pages.member',$n);
  }

  public function communityPage(){
      $stories = Story::orderBy('priority','asc')->take(10)->get();
    return view('frontend.pages.community',compact('stories'));
  }
  public function paymentPage(){
    return view('frontend.pages.payment');
  }
  public function congratsPage(){
    return view('frontend.pages.congrats');
  }
  public function benefitPage(){
    return view('frontend.pages.benefit');
  }
  public function aboutPage(){
    return view('frontend.pages.about');
  }
  public function discoverPage(){
    return view('frontend.pages.discover');
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

}
