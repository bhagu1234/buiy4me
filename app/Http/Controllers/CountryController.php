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
        // $data=Country::all();
        // $opt="<select class='form-select browsers_country vodiapicker'  data-placeholder='Choose one thing' name='from_location'>";
        // foreach($data as $row)
        // {
        //     $opt.="<option data-value=".$row->id." value=".$row->id." data-thumbnail='https://b4m.veravalonline.com/b4m/public/upload/country_flag/168864031131.flag-of-Andorra.png'>".$row->name." , <img src='https://b4m.veravalonline.com/b4m/public/upload/country_flag/168864031131.flag-of-Andorra.png'></option>";
        //     // dd($opt);
           
        // }
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
