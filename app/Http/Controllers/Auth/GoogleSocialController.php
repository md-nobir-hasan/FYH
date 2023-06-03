<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request as inputRequest;

class GoogleSocialController extends Controller
{
    public function redirect($planId=null)
    {
        return Socialite::driver('google')->redirect();
    }

    public function callBack()
    {

         try {
             $google_user = Socialite::driver('google')->user();

             $user = User::where('google_id', $google_user->getId())->first();

             if(! $user){
                 $newUser = User::create([
                      'name' => $google_user->getName(),
                      'email' => $google_user->getEmail(),
                      'google_id' => $google_user->getId(),
                 ]);
                 Auth::login($newUser);
                 $UseRole = User::find($newUser->id);
                 if($UseRole->role_id ==null){
                     return redirect()->intended('membership');
                 }else{
                    return redirect()->intended('dashboard');
                 }
                
             }else{
                  Auth::login($user);
                  $UseRole = User::find($user->id);
                 if($UseRole->role_id ==null){
                     return redirect()->intended('dashboard');
                 }else{
                    return redirect()->intended('dashboard');
                 }
               
             }

         } catch (\Throwable $th) {
             dd('something wrong'. $th->getMessage());
         }
    }
}
