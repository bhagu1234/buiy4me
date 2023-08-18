<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\OrderDetail;
use Auth;
use App\Models\MatchedTripOrder;

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
    public function make_deliveryOffer(Request $request)
    {
        // dd($request);
        $orderId=$request->or_id;
        $for_trip=OrderDetail::findOrFail($orderId);
        $for_trip->product_price=$request->change_product_price_fee;
        $for_trip->traveller_reward=$request->travel;
        $for_trip->estimated_total=$request->pro_total_price_changed;
        $for_trip->save();
            $user=Auth::User();
            $user_id=$user->id;
            $trip=new Trip();
            $trip->user_id=$user_id;
            $trip->from_location_country=$for_trip->deliver_from_country;
            $trip->to_location_country=$for_trip->deliver_to_country;
            // $trip->from_location_state=$for_trip->deliver_from_state;
            $trip->to_location_state=$for_trip->deliver_to_state;
            $trip->travel_date=$for_trip->during_time;
            $trip->save();
            $t_id=Trip::latest()->first();
            $tid=$t_id->id;
            $t_user=$t_id->user_id;
            // $OrderDetail=OrderDetail::where('deliver_from_country',$for_trip->from_location)->where('deliver_to_country',$for_trip->to_location)->where('deliver_to_state',$for_trip->to_city)->where('during_time' ,'>=',$for_trip->travel_date)->where('order_status','1')->get();
            // dd($OrderDetail);
            // foreach($OrderDetail as $r)
            // {
                // if($t_user != $r->user_id)
                // {
                    $MatchedTripOrder=new MatchedTripOrder();
                    $MatchedTripOrder->trip_id=$tid;
                    $MatchedTripOrder->order_id=$orderId;
                    $MatchedTripOrder->trip_user=$t_user;
                    $MatchedTripOrder->order_user=$for_trip->user_id;
                    $MatchedTripOrder->trip_status='1';
                    $MatchedTripOrder->save();
            //     }
            
            // }
            return redirect()->route('user.trip')->withSuccess('Trip Created Successfully');
       
    }
}
