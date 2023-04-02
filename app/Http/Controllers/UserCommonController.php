<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserCommonController extends Controller
{
    public function dashboard(){
        return view('frontend.dashboard');
    }

    public function index(){
        $n['mdata'] = User::where('role_id',null)->paginate(2);
        return view('frontend.customer.index',$n);
    }
}


