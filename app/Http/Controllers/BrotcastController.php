<?php

namespace App\Http\Controllers;

use App\Events\UserRegister;
use App\Listeners\UserRegInfoToAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BrotcastController extends Controller
{
    public function UserRegInfoAdmin(){
        UserRegister::dispatch(Auth::user());

    }
}
