<?php

namespace App\Http\Controllers;
use App\Models\Country;
use App\Models\State;

use Illuminate\Http\Request;

class StateController extends Controller
{
   public function index(Request $request)
   {
        $data=State::all();
        return view('admin.States.index',compact('data'));
   }
   public function create(Request $request)
   {
        return view('admin.States.create');
   }
   public function store(Request $request)
   {
       
   }
   public function edit(Request $request)
   {
        return view('admin.States.edit');
   }
   public function update(Request $request)
   {
    
   }
   public function delete(Request $request)
   {
    
   }
}
