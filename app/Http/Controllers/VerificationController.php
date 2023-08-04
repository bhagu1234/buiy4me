<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Mail;
use App\Mail\EmailManager;
class VerificationController extends Controller
{
    // public function mail()
    // {
    //     $to_name = ‘RECEIVER_NAME’;
    //     $to_email = ‘RECEIVER_EMAIL_ADDRESS’;
    //     $data = array("name"=>"Cloudways(sender_name)", "body" => "A test mail");
        
    //     Mail::send("mail", $data, function($message) use ($to_name, $to_email) {
    //     $message->to($to_email, $to_name)
    //     ->subject("Laravel Test Mail");
    //     $message->from("SENDER_EMAIL_ADDRESS","Test Mail");
    //     });
    
    //     return 'Email sent Successfully';
    // }
    public function build()
    {
        $array['from'] = env('MAIL_FROM_ADDRESS');
        Mail::send('frontend.email_verification', $array, function($message) use ($array) {
            $message->to("bhagwati@veravalonline.com");
            $message->subject('User Activity Notification');
        });
    }
}
