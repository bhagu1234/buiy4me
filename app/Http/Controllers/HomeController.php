<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
   public function home(Request $request)
   {
      return view('frontend.home');
   }
}