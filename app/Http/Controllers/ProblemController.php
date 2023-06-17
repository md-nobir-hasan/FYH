<?php

namespace App\Http\Controllers;

use App\Models\Problem;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProblemController extends Controller
{
   public function index() {
         $problems = Problem::orderBy('status', 'asc')->paginate(20);
         return view('pages.problem.index',compact('problems'));
         
    }

    public function edit(Problem $problem)
    {
       return view('pages.problem.edit',compact('problem'));
    }


    public function update(Request $request, Problem $problem)
    {
    
        $request->validate([
            'answer' => 'required'
        ]);
         $problem->update([
           'answer' => $request->answer,
           'solveDate' => Carbon::now(), 
           'admin_id' => auth()->user()->id,
           'status'  => 1,
         ]);

         return to_route('admin.problem.index')->with('success',' Successfully Update');
    }


    public function show(Problem $problem)
    {
         $user = User::find($problem->user_id);
        return view('pages.problem.show',compact('problem', 'user'));
    }


    public function destroy($id)
    {
     
     $problem = Problem::destroy($id);
    
    
      return Redirect::back()->with('success',' Problem Data Delete SuccessfullY');
    }
}
