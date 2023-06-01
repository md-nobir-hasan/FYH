<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\ClientType;
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
        if($planId==null){
             return Redirect::back();
        }
        $planId = ClientType::where('plan_id', $planId)->first();
        return view('auth.register', compact('planId'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            // 'img' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        if( $request->file('img')){
            $path = '/storage/'.$request->file('img')->store('user','public');
        }else{
             $path = null;
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'img' => $path,
            'password' => Hash::make($request->password),
        ]);

       
        event(new Registered($user));

        Auth::login($user);
     
        $loginUser = auth()->user();

        $planId = $request->planId;
        if($loginUser->role_id ==null){
            return Redirect::route('web.billing',$planId);
        }

        return redirect(RouteServiceProvider::HOME);
    }
}
