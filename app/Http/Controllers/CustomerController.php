<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct() {
        $this->middleware(['auth',"check:Customer"]);
    }


    public function index(){
        $n['mdata'] = User::where('role_id',null)->paginate(2);
        return view('pages.customers.index',$n);
    }
}
