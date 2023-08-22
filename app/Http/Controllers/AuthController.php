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
use App\Mail\MyCustomMail;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
class AuthController extends Controller
{
  
    public function Registrion(Request $request)
    {
        if(Auth::user()==null)
        {
            return view('frontend.Auth.registrion');
        }
        else
        {
         return redirect("/");
        }
    }
    public function userRegistration(Request $request)
    {
        // Mail::to($request->email)->send(new MyCustomMail());
        // dd("dffd");
        // Mail::to($request->email)->send(new MyCustomMail());
        
        // $user = Auth::user();  // Replace with your logic to get the user
        // Mail::to("dharmaram503@gmail.com")->send(new MyCustomMail());
        // dd("dffd");

        if (filter_var($request->email, FILTER_VALIDATE_EMAIL)) 
        {
            if(User::where('email', $request->email)->first() != null)
            {
                if($request->sub=='modal')
                {
                    return array("status"=>500,'msg'=>'Email already exits!!');
                }
                else
                {
                    Session::put('error','Email already exits!!');
                    return back();
                }
               
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
                $array=array();
                $array['email'] = $request->email;
                Mail::send('frontend.emails.verify_email', $array,function($message) use ($array) {
                    $message->to($array['email']);
                    $message->subject('buy4me email verify');
                });
               
                
        }
        // Session::put('success','You are logged in successfully!!');
        if($request->sub=='modal')
        {
            return array("status"=>200,'msg'=>'Welcome'.$userModel->first_name);
        }
        else
        {
            if(Auth::user()->email_veryfied=="1")
            {
                return redirect()->route("home")->withSuccess("Welcome " .$userModel->first_name);
            } 
            else
            {
                return redirect()->route("check_mail")->withSuccess("check your mail");
            }
           
        }
      
       
    }
   public function login(Request $request)
   {
       if(Auth::user()==null)
       {
            return view('frontend.Auth.login');
       } 
       else
       {
        return redirect("/");
       }
       
   }
   public function User_Login(Request $request)
   {
        $previous_url=$request->previous_url;
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
                if($request->sub=='modal')
                {
                    return array("status"=>200,'msg'=>'You have successfully loggedin !');
                }
              return redirect($previous_url)->withSuccess('You have Successfully loggedin');
            }   
            else
            {
                if($request->sub=='modal')
                {
                    return array("status"=>500,'msg'=>'Something Went wrong!!');
                }
                Session::put('error','Something Went wrong!!');
                return back();
            }
        }
        if($request->sub=='modal')
        {
            return array("status"=>500,'msg'=>'Something Went wrong!!');
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
    // public function sendNotification()
    // {

    //     $random = $this->generateVerificationCode(6);

    //     $details = [
    //         'title' => 'Mail from https://b4m.veravalonline.com/b4m',
    //         'body' =>$random,
    //     ];

    //     Mail::to('bhagwati@veravalonline.com')->send(new VerifyMail($details));

    //     return response()->json([
    //         'message'=>'your email verification code sent to your email'
    //     ] , 201);
    // }
    // public function generateVerificationCode($length = 6) {
    //     $characters = '0123456789';
    //     $charactersLength = strlen($characters);
    //     $code = '';
    //     for ($i = 0; $i < $length; $i++) {
    //         $code .= $characters[rand(0, $charactersLength - 1)];
    //     }

    //         $token = new Token();
    //         $token->user_id = JWTAuth::user()->id;
    //         $token->code = $code;
    //         $token->status = 0;
    //         $token->save();

    //     return $code;
    // }


}