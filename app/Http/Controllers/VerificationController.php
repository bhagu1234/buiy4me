<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Mail;
use App\Mail\EmailManager;
class VerificationController extends Controller
{
    public function email_verification(Request $request)
    {
        $user = User::where('id',$id)->first();
        if(!$user || $user->is_verified == 1){
            return redirect('/');
        }
        $email = $user->email;

        $this->sendOtp($user);//OTP SEND

        return view('verification',compact('email'));
        // return redirect("frontend.verification/".$user->id);
        // $array['from'] = env('MAIL_FROM_ADDRESS');
        // Mail::send('frontend.email_verification', $array, function($message) use ($array) {
        //     $message->to("bhagwati@veravalonline.com");
        //     $message->subject('User Activity Notification');
        // });
    }
    public function sendOtp(Request $request)
    {
        $otp = rand(100000,999999);
        $time = time();

        // EmailVerification::updateOrCreate(
        //     ['email' => $user->email],
        //     [
        //     'email' => $user->email,
        //     'otp' => $otp,
        //     'created_at' => $time
        //     ]
        // );
            $data=array();
        // $data['email'] = $request->email;
        // $data['title'] = 'Mail Verification';

        // $data['body'] = 'Your OTP is:- '.$otp;

        Mail::send('frontend.email_verification',['data'=>$data],function($message) use ($data){
            $message->to($data['email'])->subject($data['title']);
        });
    }
    public function verifiedOtp(Request $request)
    {
        $user = User::where('email',$request->email)->first();
        $otpData = EmailVerification::where('otp',$request->otp)->first();
        if(!$otpData){
            return response()->json(['success' => false,'msg'=> 'You entered wrong OTP']);
        }
        else{

            $currentTime = time();
            $time = $otpData->created_at;

            if($currentTime >= $time && $time >= $currentTime - (90+5)){//90 seconds
                User::where('id',$user->id)->update([
                    'is_verified' => 1
                ]);
                return response()->json(['success' => true,'msg'=> 'Mail has been verified']);
            }
            else{
                return response()->json(['success' => false,'msg'=> 'Your OTP has been Expired']);
            }

        }
    }

    public function resendOtp(Request $request)
    {
        $user = User::where('email',$request->email)->first();
        $otpData = EmailVerification::where('email',$request->email)->first();

        $currentTime = time();
        $time = $otpData->created_at;

        if($currentTime >= $time && $time >= $currentTime - (90+5)){//90 seconds
            return response()->json(['success' => false,'msg'=> 'Please try after some time']);
        }
        else{

            $this->sendOtp($user);//OTP SEND
            return response()->json(['success' => true,'msg'=> 'OTP has been sent']);
        }

    }
    public function mobile_verification(Request $request)
    {
        return view("frontend.mobile_verify");
    }
    public function processMobileVerification(Request $request)
    {
        switch ($request["action"]) {
            case "send_otp":
            $mobile_number = $request['mobile_number'];
            $apiKey = urlencode(env('STRIPE_SECRET_KEY', null));
            $Textlocal = new Textlocal(false, false, $apiKey);
            $numbers = array(
                $mobile_number
            );
            $sender = 'PHPPOT';
            $otp = rand(100000, 999999);
            $_SESSION['session_otp'] = $otp;
            $message = "Your One Time Password is " . $otp;
            try{
                $response = $Textlocal->sendSms($numbers, $message, $sender);
                require_once ("verification-form.php");
                exit();
            }catch(Exception $e){
                die('Error: '.$e->getMessage());
            }
            break;
            case "verify_otp":
            $otp = $_POST['otp'];
            
            if ($otp == $_SESSION['session_otp']) {
                unset($_SESSION['session_otp']);
                echo json_encode(array("type"=>"success", "message"=>"Your mobile number is verified!"));
            } else {
                echo json_encode(array("type"=>"error", "message"=>"Mobile number verification failed"));
            }
            break;
        }
    }
    public function stripeIdentity(Request $request)
    {
        return view("frontend.stripe_verification.index");
    }
    public function create_verification_session(Request $request)
    {
        $stripe = new \Stripe\StripeClient([
            'api_key' => $_ENV['STRIPE_SECRET_KEY'],
            'stripe_version' => '2020-08-27',
        ]);
        $verification_session = $stripe->identity->verificationSessions->create([
            'type' => 'document',
            'metadata' => [
            'user_id' => '{{USER_ID}}',
            ]
        ]);
        echo json_encode(['client_secret' => $verification_session->client_secret]);
    }
    public function submitted(Request $request)
    {
        return view("frontend.stripe_verification.submitted");
    }
    public function create_concted_account(Request $request)
    {
        // Set your secret key. Remember to switch to your live secret key in production.
        // See your keys here: https://dashboard.stripe.com/apikeys
        $stripe = new \Stripe\StripeClient(
             $_ENV['STRIPE_SECRET_KEY']
        );
        // $stripe = new \Stripe\StripeClient('sk_test_51MOweQArAHfnnpVFMWRkZnxNSt8BVrZcubmiKiVHkr5xnembMFAeLfS0QrmFTT8Kk7R9apchfwNDE21E9XNllzBY00KCpMpQzq');

        
        // $stripe->accounts->create(['type' => 'express']);
        dd($stripe->accountLinks);
        $verification_session=$stripe->accountLinks->create([
            'account' => '{{CONNECTED_ACCOUNT_ID}}',
            'refresh_url' => 'https://example.com/reauth',
            'return_url' => 'https://example.com/return',
            'type' => 'account_onboarding',
        ]);
        echo json_encode(['client_secret' => $verification_session]);
    }
    public function checkout(Request $request)
    {
        return view("frontend.stripe_conect_payout.checkout");
    }
}
