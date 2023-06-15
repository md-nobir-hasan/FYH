<?php

namespace App\Http\Middleware;

use App\Models\Payment;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class PaymentDurationCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd(Auth::user());
        if(Auth::user()){
            $paypal = Payment::where('user_id',Auth::user()->id)->first();
            if(Carbon::now()>$paypal->end_time){
            return redirect()->route('update_payment',[$paypal->client_type_id]);
            }
        }
        return $next($request);
    }
}
