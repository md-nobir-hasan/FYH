<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserCommonController extends Controller
{
   

    public function dashboard(){
        return view('frontend.dashboard');
    }
}


