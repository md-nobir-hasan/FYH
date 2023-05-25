<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Laravel\Cashier\Subscription;

class SubcriptionController extends Controller
{
    public function index()
    {
          $subscriptions = Subscription::orderBy('created_at', 'desc')->paginate(50);
          return view('pages.subscribe.index', ['subscriptions' => $subscriptions]);
    }

    public function cancel($userId, $subName)
    {
         $user = User::findOrFail($userId);
        if($subName){
             $user->subscription($subName)->cancel();
             return Redirect::back()->with('success', 'SubsCription Canceled');
        }
    }

    public function resume($userId, $subName)
    {
         $user = User::findOrFail($userId);
        if($subName){
             $user->subscription($subName)->resume();
             return Redirect::back()->with('success', 'SubsCription Resume');
        }
    }



  
}
