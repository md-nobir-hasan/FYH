<?php

namespace App\Http\Controllers;

use App\Models\FeedBack;
use Illuminate\Http\Request;

class FeedBackController extends Controller
{
   public function index()  {
        $feedbacks = FeedBack::latest()->paginate(20);
    return view('pages.feedback.index', ['feedbacks' => $feedbacks]);
    }
}
