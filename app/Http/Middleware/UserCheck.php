<?php

namespace App\Http\Middleware;

use App\Models\Feature;
use Closure;
use Illuminate\Http\Request;
use App\Models\Permission;
use Illuminate\Support\Facades\Auth;

class UserCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param string $main_feature
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next,$main_feature=null)
    {
        // dd($permission1);

       if(Auth::user()){
        $role_id =Auth::user()->role_id;
        $feature_id = Feature::where('name',$main_feature)->where('status',1)->first();
        if($role_id && $feature_id){


            $check = Permission::where('role_id',$role_id)
                                ->where('feature_id', $feature_id->id)->first();
            if($check){

            return $next($request);

            }else{
                return redirect()->back();
            }
        }else{
            return redirect()->back();
        }
       }else{
        return $next($request);
       }
    }
}
