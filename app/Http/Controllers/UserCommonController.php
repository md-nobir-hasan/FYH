<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserCommonController extends Controller
{
   

    public function redirect(){

         $user = auth()->user();
         if($user ==null){
                 return to_route('member');
         }elseif($user->role_id ==null){
             return to_route('user.home');
         }else{
             return to_route('dashboard');
         }
        
    }
}


