<?php
use App\Models\Permission;
use App\Models\Feature;
use Illuminate\Support\Facades\Auth;


 function check($main_feature){
    if(!Auth::user()){
        return false;
    }
     $role_id =Auth::user()->role_id;
     $feature_id = Feature::where('name',$main_feature)->where('status',1)->first();
     if($role_id && $feature_id){
        $check = Permission::where('role_id',$role_id)
                            ->where('feature_id', $feature_id->id)->first();
        if($check){
            return $check;
        }else{
            return false;
        }
    }else{
        return false;
    }
}


