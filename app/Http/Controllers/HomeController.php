<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
   public function home(Request $request)
   {
      // flash('My message');
      return view('frontend.home');
   }
}