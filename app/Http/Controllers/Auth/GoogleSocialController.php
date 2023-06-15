<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\ClientType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request as inputRequest;
use Illuminate\Support\Facades\Session;

class GoogleSocialController extends Controller
{
    public function redirect($planId=null)
    {
          Session::put('planId', $planId);
        return Socialite::driver('google')->redirect();

    }

    public function callBack(Request $request)
    {
        
         try {
             $google_user = Socialite::driver('google')->user();

             $user = User::where('google_id', $google_user->getId())->first();

             if(! $user){
                $Id = $request->session()->get('planId');
                 if($Id ==null){
                     return to_route('member');
                 }
                 $newUser = User::create([
                      'fname' => $google_user->getName(),
                      'email' => $google_user->getEmail(),
                      'google_id' => $google_user->getId(),
                 ]);
                 Auth::login($newUser);
                 $UseRole = User::find($newUser->id);


                 if($Id !==null && $UseRole->role_id ==null){
                    $planId = ClientType::where('plan_id', $Id)->first();
                    return view('frontend.pages.billing', ['planId' => $planId]);

                 }
                    else{
                    return redirect()->intended('/home');
                 }
                 $request->session()->forget('planId');
                
             }else{
                  Auth::login($user);
                  $UseRole = User::find($user->id);
                  $Id = $request->session()->get('planId');
                 if($UseRole->role_id ==null && $Id !==null){
                    $planId = ClientType::where('plan_id', $Id)->first();
                    return view('frontend.pages.billing', ['planId' => $planId]);
                 }else{
                    return redirect()->intended('/home');
                 }
               
             }

         } catch (\Throwable $th) {
             dd('something wrong'. $th->getMessage());
         }
    }
}
