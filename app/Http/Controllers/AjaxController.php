<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
   public function customerMarkAsRead(){
    $customer = User::where('role_id',null)->where('mark_as_read',null)->update(['mark_as_read' => 1]);
    return response()->json('okk.done');
   }
}
