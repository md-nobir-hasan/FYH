<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BillingController extends Controller
{
      public function index()
      {
          $billings = Billing::orderBy('created_at', 'desc')->paginate(20);
         return view('pages.bilings.index',['billings' => $billings]);
      }


     public function destroy($id)  {

              $biling->destroy($id);
             return Redirect::back()->with('success','Delete Successfully');
      }
}
