<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MiscellaneousController extends Controller
{
    public function SingleDelete(Request $req,$id,$modal){
        $modalClass =  '\\App\\Models\\'.$modal;
        $id = (int)$id;
        $modalClass::find($id)->delete();
        return back()->with('success','Delete successfully');

        // $modalClass =  '\\App\\Models\\'.$modal;
        // $id = (int)$id;
        // $delete = $modalClass::find($id);
        // $delete->deleted_at = Carbon::now();
        // $delete->deleted_by = Auth::user()->id;
        // $delete->save();
        // $req->session()->flash('suc_msg',$delete->name.' সফলভাবে ডিলিট হয়েছে');
        // return redirect()->back();
    }
}
