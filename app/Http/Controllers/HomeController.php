<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Trip;
use App\Models\OrderDetail;
use App\Models\MatchedTripOrder;
use App\Models\Country;
use App\Models\State;
class HomeController extends Controller
{
   public function home(Request $request)
   {
      $latestProduct=OrderDetail::orderBy('id','Desc')->take(8)->where('status','1')->get();
      $lestesTrip=Trip::take(4)->orderBy('trips.id','DESC')
               ->where('trips.status','1')
               ->join('users','users.id','trips.user_id')
               ->leftJoin('countries as from_countries','from_countries.id','trips.from_location_country')
               ->leftJoin('countries as to_countries','to_countries.id','trips.to_location_country')
               ->leftJoin('states','states.id','trips.to_location_state')
               ->select('trips.*','users.first_name','users.last_name','users.email','users.mobile','users.profile','from_countries.name as from_countryname','to_countries.name as toCountryName','states.city_name as TOstate_name')
               ->get();
               // dd($latestProduct);
      return view('frontend.home',compact('latestProduct','lestesTrip'));
   }
}