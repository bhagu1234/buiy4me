<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Auth;
use Session;
use App\Models\User;
use Mail; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests;
class AuthController extends Controller
{
  
    public function Registrion(Request $request)
    {
        return view('frontend.Auth.registrion');
    }
    public function userRegistration(Request $request)
    {
        if (filter_var($request->email, FILTER_VALIDATE_EMAIL)) 
        {
            if(User::where('email', $request->email)->first() != null)
            {
                Session::put('error','Email already exits!!');
                return back();
            }

        }
        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        if($user==true)
        {
            $email = $request->email;
            $password = $request->password;
            $user_data = User::where('email',$email)->first();
                $userModel = new User();
                $userModel->id = $user_data->id;
                $userModel->email = $user_data->email;
                $userModel->password = $user_data->password;
                $userModel->first_name = $user_data->first_name;
                Auth::login($userModel); 
        }
        // Session::put('success','You are logged in successfully!!');
        return redirect()->route("home");
    }
   public function login(Request $request)
   {
    //   dd(Auth::User());
       return view('frontend.Auth.login');
   }
   public function User_Login(Request $request)
   {
    //   dd($request->password);
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $email = $request->email;
        $password = $request->password;
        $user = User::where('email',$email)->first();
        if($user !=null)
        {
            $pas_check= Hash::check($password, $user->password);
            if($pas_check==true)
            {
                if ($user) 
                {
                    $userModel = new User();
                    $userModel->id = $user->id;
                    $userModel->email = $user->email;
                    $userModel->password = $user->password;
                    $userModel->first_name = $user->first_name;
                    Auth::login($userModel); 
                }
                // Session::flush();
                // Session::put('success','You are logout successfully!!');
                return redirect('/')->withSuccess('You have Successfully loggedin');
            }
                
            else
            {
                Session::put('error','Something Went wrong!!');
                return back();
            }
        }
        Session::put('error','Something Went wrong!!');
                return back();
       
       
   }
   public function logout(Request $request)
   {
        flash('logged in !', 'success');
        Session::put('success','You are logout successfully!!');
        Auth::logout();
   
        return Redirect('login');
   }
   

}