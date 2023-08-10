<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\OrderDetail;

class TripController extends Controller
{
    public function index(Request $request)
    {
        $TripData=Trip::join('users','users.id','trips.user_id')
        ->leftJoin('countries as coun1','coun1.id','trips.from_location_country')
        ->leftJoin('countries as coun2','coun2.id','trips.to_location_country')
        ->select('trips.*','coun1.name as fromCountry','coun2.name as toCountry')
        ->get();
        // dd($TripData);
        return view('admin.trips.index',compact('TripData'));
    }
    public function make_offer_html(Request $request)
    {
        $id=$request->id;
        $data=OrderDetail::leftJoin('countries as coun1','coun1.id','order_details.deliver_from_country')
        ->leftJoin('countries as coun2','coun2.id','order_details.deliver_to_country')
        ->leftJoin('states as states1','states1.id','order_details.deliver_from_state')
        ->leftJoin('states as states2','states2.id','order_details.deliver_to_state')
        ->orderBy('order_details.id','desc')
        ->where('order_details.deliver_to_country',$id)
        ->select('order_details.*','coun1.name as fromCountry','coun2.name as toCountry','states1.city_name as fromCity','states2.city_name as toCIty')->get();
        // dd($data);
        return view('frontend.travels.make_offer_html',compact('data'));
    }
    public function create_offer(Request $request)
    {
        $id=$request->id;
        $data=OrderDetail::where('order_details.id',$id)
        ->leftJoin('countries as coun1','coun1.id','order_details.deliver_from_country')
        ->leftJoin('countries as coun2','coun2.id','order_details.deliver_to_country')
        ->leftJoin('states as states1','states1.id','order_details.deliver_from_state')
        ->leftJoin('states as states2','states2.id','order_details.deliver_to_state')
        ->select('order_details.*','coun1.name as fromCountry','coun2.name as toCountry','states1.city_name as fromCity','states2.city_name as toCIty')
        ->first(); 
$from="from_order";
        return view('frontend.travels.create_offer',compact('data'));
    }
}
