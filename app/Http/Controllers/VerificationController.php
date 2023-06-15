<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Support\Facades\Crypt;
use Mail;
use App\Mail\VerifyMail;

class VerificationController extends Controller
{
    public function verifyMailSend(Request $requset){
        $encrypt_address = Crypt::encryptString($requset->email);
        //dd($encrypt_address);
        $notifiable = route('getVerifyMail',['hash'=>$encrypt_address]);
        $this->toMail($notifiable, $requset->email);
    }
    public function _verifyMailSend(){
        return view('auth.verify');
    }
    public function toMail($notifiable, $email)
    {
        $actionUrl = $notifiable;     //verificationUrl required for the verification link
        // dd($actionUrl);
        $actionText  = 'Click here to verify your email';
        $mailData = [
            'user'=> $email,
            'actionText' => $actionText,
            'actionUrl' => $actionUrl,
        ];
         
        Mail::to($email)->send(new VerifyMail($mailData));
        return ;
    }

}
