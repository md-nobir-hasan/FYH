<?php

namespace App\Http\Controllers;

use App\Models\Term;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TermController extends Controller
{
   public function create()  {
        $term = Term::first() ?? null;
        return view('pages.termCok.edit',compact('term'));
    }

   public function store(Request $request) {
             $request->validate([
                  'term' => 'required',
                  'cookie' => 'required',
                  'privacy' => 'required',
             ]);

             Term::create([
                'term' => $request->term,
                'cookie' => $request->cookie,
                'privacy' => $request->privacy,
             ]);

             return Redirect::back()->with('success', 'Successfully Create');
    }


   public function update(Request $request, $id)  {
      $term = Term::findOrFail($id);
    $request->validate([
        'term' => 'required',
        'cookie' => 'required',
        'privacy' => 'required',
   ]);

   $term->update([
      'term' => $request->term,
      'cookie' => $request->cookie,
      'privacy' => $request->privacy,
   ]);

   return Redirect::back()->with('success', 'Successfully Update');
    }
}
