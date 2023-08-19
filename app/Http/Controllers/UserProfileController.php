<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Trip;
use App\Models\OrderDetail;
use App\Models\MatchedTripOrder;
use App\Models\Country;
use App\Models\State;
use App\Models\Tax;
use App\Models\Shop;
use Illuminate\Support\Facades\Hash;
use Auth;
use Session;
use DB;
class UserProfileController extends Controller
{
    public function profile(Request $request)
    {
        $user_id=Auth::user()->id;
        $data=User::findOrFail($user_id);
        // $request->session()->flash('status', 'Task was successful!');
        return view('frontend.user.profile',compact('data'));
    }
    public function create_trip(Request $request)
    {
        // dd($request);
        // if($request->from_city != $request->to_city)
        // {
            $user=Auth::User();
            $user_id=$user->id;
            $trip=new Trip();
            $trip->user_id=$user_id;
            $trip->from_location_country=$request->from_location;
            $trip->to_location_country=$request->to_location;
            // $trip->from_location_state=$request->from_city;
            $trip->to_location_state=$request->to_city;
            $trip->travel_date=$request->travel_date;
            $trip->save();
            $t_id=Trip::latest()->first();
            $tid=$t_id->id;
            $t_user=$t_id->user_id;
            $OrderDetail=OrderDetail::where('deliver_from_country',$request->from_location)->where('deliver_to_country',$request->to_location)->where('deliver_to_state',$request->to_city)->where('during_time' ,'>=',$request->travel_date)->where('order_status','1')->get();
            foreach($OrderDetail as $r)
            {
                if($t_user != $r->user_id)
                {
                    $MatchedTripOrder=new MatchedTripOrder();
                    $MatchedTripOrder->trip_id=$tid;
                    $MatchedTripOrder->order_id=$r->id;
                    $MatchedTripOrder->trip_user=$t_user;
                    $MatchedTripOrder->order_user=$r->user_id;
                    $MatchedTripOrder->save();
                }
            
            }
            return redirect()->route('user.trip')->withSuccess('Trip Created Successfully');
        // }
        // else
        // {
        //     return back()->withError('Something went Wrong');
        // }
        
    }
    public function edit_profile_data(Request $request)
    {
        // dd($request->mobile);
        $id=Auth::user()->id;
        $files=$request->file('profile');
        if($files !="" || $files !=null)
        {
            $name =  time().rand(1,100).'.'.$files->getClientOriginalName();
            $filePath=$files->move(public_path() . '/upload/profile_img/', $name);
        }
       
        $profile_data=User::findOrFail($id);
        $profile_data->first_name=$request->first_name;
        $profile_data->last_name=$request->last_name;
        $profile_data->mobile=$request->mobile;
        $profile_data->email=$request->email;
        $profile_data->description=$request->description;
        if($files != "" || $files != null)
        {
            $profile_data->profile=$name;
        }
        $profile_data->save();
        $response=array("status"=>200,"msg"=>"Profile updated successfully");
       return $response;
    }
    public function help_desk(Request $request)
    {
        return view('frontend.user.help_center'); 
    }
  
    
}
