<?php

namespace App\Http\Controllers;
use App\Models\Country;
use App\Models\State;
use Session;

use Illuminate\Http\Request;

class StateController extends Controller
{
     public function index(Request $request)
     {
          $data=State::join('countries','countries.id','states.country_id')->select('states.*','countries.name')->orderBy('states.id','DESC')->get();
          return view('admin.States.index',compact('data'));
     }
     public function create(Request $request)
     {
          return view('admin.States.create');
     }
     public function store(Request $request)
     {
          $data=new State();
          $data->country_id=$request->country;
          $data->city_name=$request->city_name;
          $data->save();
          // Session::flush();
          // Session::put('success','You are logout successfully!!');
       return redirect()->route('admin.index_state');
     }
     public function edit(Request $request)
     {
          $id=$request->id;
          $data=State::findOrFail($id);
          $country=Country::all();
          return view('admin.States.edit',compact('data','country'));
     }
     public function update(Request $request)
     {
          $id=$request->id;
          $data= State::findOrFail($id);
          $data->country_id=$request->country;
          $data->city_name=$request->city_name;
          $data->save();
       return redirect()->route('admin.index_state');
     }
     public function delete(Request $request)
     {
          $id=$request->id;
          $data=State::where('id',$id)->delete();
          return back();
     }
     public function fatch_state(Request $request)
     {
          $countryId=$request->id;
          $data=State::where('country_id',$countryId)->get();
          $opt="<option selected disabled>--select--</option>";
          foreach($data as $row)
          {
               $opt.="<option value=".$row->id.">".$row->city_name."</option>";
          }
          echo $opt;
     }
}
