<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
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
        $value=$request->value;
        $data=Country::where('name','LIKE', '%'.$value.'%')->get();
        $opt="<option value='--select--'>";
        foreach($data as $row)
        {
            $opt="<option data-value=".$row->id." value=".$row->name.">";
            echo $opt;
        }
        
        // echo $opt;

    }
}
