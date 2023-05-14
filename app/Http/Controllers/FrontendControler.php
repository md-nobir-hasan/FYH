<?php

namespace App\Http\Controllers;

use App\Models\ClientType;
use Illuminate\Http\Request;

class FrontendControler extends Controller
{
  public function homePage(){
    return view('frontend.pages.home');
  }

  public function membershipPage(){
    $n['membership_types'] = ClientType::with(['currency','payDuration'])->limit(2)->get();
    return view('frontend.pages.member',$n);
  }

  public function communityPage(){
    return view('frontend.pages.community');
  }
  public function paymentPage(){
    return view('frontend.pages.payment');
  }
  public function congratsPage(){
    return view('frontend.pages.congrats');
  }
}
