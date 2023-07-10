<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    public function index(Request $request)
    {
        $data= Country::all();
        return view('admin.country.index',compact('data'));
    }
    public function create(Request $request)
    {
        return view('admin.country.store');
    }
    public function store(Request $request)
    {
        $files=$request->file('flag');
        if($files !="" || $files !=null)
        {
            $name =  time().rand(1,100).'.'.$files->getClientOriginalName();
            $filePath=$files->move(public_path() . '/upload/country_flag/', $name);
        }
        $data= new Country();
        $data->name=$request->name;
        $data->flag=$name;
        $data->save();
        return back()->with("success");
    }
    public function fatch_country(Request $request)
    {
        // $value=$request->value;
        // $data=Country::where('name','LIKE', '%'.$value.'%')->get();
        $data=Country::all();
        // $opt="<select class='form-select browsers_country vodiapicker'  data-placeholder='Choose one thing' name='from_location'>";
        foreach($data as $row)
        {
            $opt="<option data-name=".$row->name." value=".$row->id." >".$row->name."</option>";
            echo $opt;
            // dd($opt);
           
        }
        // $opt.="</select>";
        // echo $opt;
    }
    public function delete_country(Request $request)
    {
        $id=$request->id;
        $data=Country::where('id',$id)->delete();
        return back()->with("success","deleted");
    }
}
