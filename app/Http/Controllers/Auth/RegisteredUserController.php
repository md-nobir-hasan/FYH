<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\ClientType;
use App\Models\Setting;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create($planId=null)
    {
        if( Setting::first()->trail == null){
            if($planId==null){
                return Redirect::back();
            }
        }
        $planId = ClientType::where('plan_id', $planId)->first();
        return view('auth.register', ['planId' => $planId]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
             'img' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $plan = $request->planId;
        if( $request->file('img')){
            $path = '/storage/'.$request->file('img')->store('user','public');
        }else{
             $path = null;
        }
        $client_type = ClientType::where('plan_id',$plan)->first();
        $user = User::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'client_type_id' => $client_type->id ?? 2,
            'img' => $path,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        $loginUser = auth()->user();


        $planId = ClientType::where('plan_id', $plan)->first();

        if($loginUser->role_id ==null){
            if(Setting::first()->trail == null){
                return view('frontend.pages.billing', ['planId' => $planId]);
            }else{
                return to_route('congrats');
            }

        }

        return redirect()->route('user.home');
    }
}
