<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Trip;
use App\Models\OrderDetail;
use App\Models\MatchedTripOrder;
use Illuminate\Support\Facades\Hash;
use Auth;
use Session;
class UserProfileController extends Controller
{
    public function profile(Request $request)
    {
        $user_id=Auth::user()->id;
        $data=User::findOrFail($user_id);
        // $request->session()->flash('status', 'Task was successful!');
        return view('frontend.user.profile',compact('data'));
    }
    public function trip(Request $request)
    {
        $user_id=Auth::User()->id;
        $today=date('y-m-d');
        // dd($today);
        $current=Trip::where('travel_date' ,'=', $today)->where('user_id',$user_id)->get();
        $cur=$current->count();
        $upcoming=Trip::where('travel_date' ,'>', $today)->where('user_id',$user_id)->get();
        $upc=$upcoming->count();
        $past=Trip::where('travel_date' ,'<', $today)->where('user_id',$user_id)->get();
        $pastCount=$past->count();
        // dd($upcoming);
        return view('frontend.user.trips',compact('upcoming','current','past','cur','upc','pastCount'));
    }
    public function create_trip(Request $request)
    {
        $user=Auth::User();
        $user_id=$user->id;
        $trip=new Trip();
        $trip->user_id=$user_id;
        $trip->from_location=$request->from_location;
        $trip->to_location=$request->to_location;
        $trip->travel_date=$request->travel_date;
        $trip->save();
        $t_id=Trip::latest()->first();
        $tid=$t_id->id;
        $t_user=$t_id->user_id;
        $OrderDetail=OrderDetail::where('deliver_from',$request->from_location)->where('deliver_to',$request->to_location)->where('during_time' ,'>',$request->travel_date)->where('order_status','1')->get();
        foreach($OrderDetail as $r)
        {
            // dd($r->user_id);
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
        // dd($OrderDetail);

        return back()->withSuccess('User Created Successfully');
    }
    public function phone_verify(Request $request)
    {
    }
    public function orders(Request $request)
    {
        $user_id=Auth::User()->id;
        $data=OrderDetail::where('user_id',$user_id)->get();
        $reCount=OrderDetail::where('user_id',$user_id)->where('order_status',1)->count();
        $intrailcoun=OrderDetail::where('user_id',$user_id)->where('order_status',2)->count();
        $receviedc=OrderDetail::where('user_id',$user_id)->where('order_status',3)->count();
        $inaCount=OrderDetail::where('user_id',$user_id)->where('order_status',4)->count();
        return view('frontend.user.orders',compact('data','inaCount','reCount','intrailcoun','receviedc'));  
    }
    public function order_details(Request $request)
    {
        $id= $request->id;
        $data=OrderDetail::where('id',$id)->first(); 
        $from="from_order";
        return view('frontend.user.order_details',compact('data','from'));  
    }
    public function order_product(Request $request)
    {	
        // dd($request);
        $curDate=strtotime(date('y-m-d'));
        $during_d=$request->during_time;
        // dd($during_d);
        if($during_d=='up_one_month')
        {
            $d= date("Y-m-d", strtotime("+1 month", $curDate));
        }
        elseif($during_d=='up_3_week')
        {
            $d= date("Y-m-d", strtotime("+3 week", $curDate));
        }
        elseif($during_d=='up_2_week')
        {
            $d= date("Y-m-d", strtotime("+2 week", $curDate));
        }
        elseif($during_d=='up_2_months')
        {
            $d= date("Y-m-d", strtotime("+2 month", $curDate));
        }
        else
        {
            $d=date('y-m-d');
        }
        $files=$request->file('file');
        $data=array();
        foreach($files as $file)
        {
            $name =  time().rand(1,100).'.'.$file->getClientOriginalName();
            $filePath=$file->move(public_path() . '/upload/product_img/', $name);
            $data[] = $name;
        }
        $filePathar=$filePath;
        $data=json_encode($data);
        $data=str_ireplace(['"',' ;']," ",$data);
        $user=Auth::User();
        $estimated_total=$request->product_price+30;
        $user_id=$user->id;
        $OrdersDetail= new OrderDetail();
        $OrdersDetail->user_id=$user_id;
        $OrdersDetail->product_name=$request->product_name;
        $OrdersDetail->product_url=$request->product_link;
        $OrdersDetail->product_price=$request->product_price;
        $OrdersDetail->product_imgs=$data;
        $OrdersDetail->img_path=$filePathar;
        $OrdersDetail->product_qty=$request->product_qty;
        $OrdersDetail->product_details=$request->product_details;
        $OrdersDetail->box=$request->box;
        $OrdersDetail->us_sale_tax=10;
        $OrdersDetail->traveller_reward=10;
        $OrdersDetail->buy4me_fee=10;
        $OrdersDetail->estimated_total=$estimated_total;
        // $OrdersDetail->payment_id="";
        $OrdersDetail->order_status=1;
        $OrdersDetail->deliver_from=$request->devliver_from;
        $OrdersDetail->deliver_to=$request->devliver_to;
        $OrdersDetail->during_time=$d;
        // dd($OrdersDetail);
        $OrdersDetail->save();
        $or_id=OrderDetail::latest()->first();
        $oid=$or_id->id;
        $or_user=$or_id->user_id;
        $trip_de=trip::where('from_location',$request->devliver_from)->where('to_location',$request->devliver_to)->where('travel_date' ,'<',$d)->get();
        foreach($trip_de as $r)
        {
            if($or_user != $r->user_id)
            {
                $MatchedTripOrder=new MatchedTripOrder();
                $MatchedTripOrder->trip_id=$r->id;
                $MatchedTripOrder->order_id=$oid;
                $MatchedTripOrder->trip_user=$r->user_id;
                $MatchedTripOrder->order_user=$or_user;
                $MatchedTripOrder->save();
            }
           
        }
        echo "data stored succesfully";
        // return redirect()->route('user.orders')->with("success");
    }
    public function order_cancle(Request $request)
    {
        $status=$request->status;
        $id=$request->id;
        if($status=='delete')
        {
            $data=OrderDetail::where('id',$id)->delete();            
        }
        else
        {
            $data=OrderDetail::findOrFail($id);
            if($status=='publish')
            {
                $data->order_status=1;
            }
            elseif($status=='cancle')
            {
                $data->order_status=4;
            }
            $data->save();
        }
       
        return redirect()->route('user.orders')->with("success");
    }
    public function edit_order(Request $request)
    {
        $id=$request->id;
        $data=OrderDetail::findOrFail($id);
        return view('frontend.user.edit_order',compact('data')); 
    }
    public function update_order(Request $request)
    {
        // dd($request);
        $id=$request->id;
        $files=$request->file('product_img');
        $data=array();
        if($request->box==null)
        {
            $request->box='0';
        }
        // dd($request->box);
        $estimated_total=$request->product_price+30;
        // dd($files);
        if($files == !null)
        {
            foreach($files as $file)
            {
                $name =  time().rand(1,100).'.'.$file->getClientOriginalName();
                $filePath=$file->move(public_path() . '/upload/product_img/', $name);
                $data[] = $name;
            }
            $filePathar=$filePath;
            $data=json_encode($data);
            $data=str_ireplace(['"',' ;']," ",$data);
        }
        $d=date("Y-m-d", strtotime($request->during_date));
        $OrderDetail=OrderDetail::findOrFail($id);
        $OrderDetail->product_name=$request->product_name;
        $OrderDetail->product_price=$request->product_price;
        if($files != null)
        {
            $OrderDetail->product_imgs=$data;
            $OrderDetail->img_path=$filePathar;
        }
        $OrderDetail->product_qty=$request->product_qty;
        $OrderDetail->product_details=$request->product_details;
        $OrderDetail->box=$request->box;
        $OrderDetail->us_sale_tax=10;
        $OrderDetail->traveller_reward=10;
        $OrderDetail->buy4me_fee=10;
        $OrderDetail->estimated_total=$estimated_total;
        // $OrderDetail->payment_id="";
        $OrderDetail->order_status=1;
        $OrderDetail->deliver_from=$request->deliver_from;
        $OrderDetail->deliver_to=$request->deliver_to;
        $OrderDetail->during_time=$d;
        $OrderDetail->save();
        return redirect()->route('user.orders')->with("success");
    }
    public function create_order(Request $request)
    {
        return view('frontend.user.create_order');  
    }
    public function product_details(Request $request)
    {
        return view('frontend.user.product_details');  
    }
    public function setting(Request $request)
    {
        $user_id=Auth::user()->id;
        $user_data=User::findOrFail($user_id);
        return view('frontend.user.settings',compact('user_data'));
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
        echo "Profile updated successfully";
    }
    public function help_desk(Request $request)
    {
        // flash('success', 'Success!', 'Successfully created new list!');
        // flash(translate('Email or Phone already exists.'));
        $request->session()->flash('status', 'Task was successful!');
        return view('frontend.user.help_center'); 
    }
    public function matched_trip(Request $request)
    {
        $id=$request->id;
        $data=MatchedTripOrder::where('matched_trip_orders.trip_id',$id)->leftJoin('trips','trips.id','matched_trip_orders.trip_id')->leftJoin('order_details','order_details.id','matched_trip_orders.order_id')->select('matched_trip_orders.id as ma_id','matched_trip_orders.trip_status','matched_trip_orders.order_status as orStatus','matched_trip_orders.order_id as o_id','order_details.*')->get();
        // dd($data);
        // dd($data);
        $from="from_trip";
        return view('frontend.user.matched_orders',compact('data','from')); 
    }
    public function send_tripRequest(Request $request)
    {
        // dd($request->from);
        $id=$request->id;
        // dd($id);
        $status=$request->status;
        // dd($status);
        $data=MatchedTripOrder::findOrFail($id);
        $orId=$data->order_id;
        $trId=$data->trip_id;
        if($request->from=='from_order')
        {
            if($status=='requested')
            {
                $data->order_status='1';
            }
            if($status=='pick_up')
            {
                $data->order_status='3';
            }
            if($status=='delivered')
            {
                $data->order_status='4';
            }
            $data->save();
        }
        else
        {
            $orde=OrderDetail::findOrFail($orId);
            // dd($data->order_id);
            if($status=='requested')
            {
                $data->trip_status='1';
                $orde->trip_id=$data->trip_id;
            }
            if($status=='pick_up')
            {
                $data->trip_status='3';
                $data->order_status='3';
                $orde->order_status='2';
            }
            if($status=='delivered')
            {
                $data->trip_status='4';
                $data->order_status='4';
                $orde->order_status='3';
            }
            if($status=='accept_orderRe')
            {
                $data->trip_status='2';
                $data->order_status='2';
            }
            if($status=='cancle_orderRe')
            {
                $data->trip_status='0';
                $data->order_status='0';
            }
            $data->save();
            $orde->save();
        }
       
       
        return redirect()->route('user.orders')->with("success");
    }
    public function check_trOffer(Request $request)
    {
        $ord_id=$request->id;
        $data=MatchedTripOrder::where('order_id',$ord_id)
                ->leftJoin('order_details','order_details.id','matched_trip_orders.order_id')
                ->leftJoin('users','users.id','matched_trip_orders.trip_user')
                ->select('matched_trip_orders.id as m_id','users.*','order_details.*')->where('trip_status', '!=' ,'0')->first();
        if($data != null)
        {
            return view('frontend.user.order_travel_offer',compact('data')); 
        }        // dd($data);
        else
        {
            return redirect()->route('user.trip')->with("success");
        }
    }
    public function travel_offer_reChange(Request $request)
    {
        $id=$request->id;
        $status=$request->status;
        $data=MatchedTripOrder::findOrFail($id);
        if($status=='accept')
        {
            $data->trip_status='2';
        }
        elseif($status=='cancle')
        {
            $data->trip_status='0';
        }
        $data->save();
        return redirect()->route('user.trip')->with('success');
    }
    public function matched_order(Request $request)
    {
        $id=$request->id;
        $data=MatchedTripOrder::where('matched_trip_orders.order_id',$id)->leftJoin('trips','trips.id','matched_trip_orders.trip_id')
        ->leftJoin('users','users.id','matched_trip_orders.trip_user')->leftJoin('order_details','order_details.id','matched_trip_orders.order_id')->select('matched_trip_orders.id as ma_id','matched_trip_orders.trip_status','matched_trip_orders.order_status as orStatus','matched_trip_orders.order_id as o_id','order_details.*','users.first_name','users.last_name','users.email','users.mobile')->get();
        // dd($data);
        $from="from_order";
        return view('frontend.user.matched_trips',compact('data','from')); 
    }
    public function treveller_store(Request $request)
    {
        $data= Country::all();
        return view('frontend.user.create_trip',compact('data'));
    }
}
