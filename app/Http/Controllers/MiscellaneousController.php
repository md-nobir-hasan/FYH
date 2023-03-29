<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiscellaneousController extends Controller
{
    public function SingleDelete($id,$modal){
        $modalClass =  '\\App\\Models\\'.$modal;
        $id = (int)$id;
        $modalClass::find($id)->delete();
        return back()->with('success','Delete successfully');
    }
}
