<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;

class TripController extends Controller
{
    public function index(Request $request)
    {
        $TripData=Trip::join('users','users.id','trips.user_id')->get();
        // dd($TripData);
        return view('admin.trips.index',compact('TripData'));
    }
}
