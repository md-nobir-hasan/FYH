<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendControler extends Controller
{
  public function homePage(){
    return view('frontend.pages.home');
  }

  public function membershipPage(){
    return view('frontend.pages.member');
  }
}
