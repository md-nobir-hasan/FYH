<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Laravel\Cashier\Subscription;
class SubcriptionController extends Controller
{
    public function index()
    {

        $n['paypal_subscriptions'] = Payment::with('user')->where('order_status','COMPLETED')->orderBy('id','desc')->paginate(50);
        $n['subscriptions'] = Subscription::orderBy('created_at', 'desc')->paginate(50);
        // dd($n);
        return view('pages.subscribe.index', $n);
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
