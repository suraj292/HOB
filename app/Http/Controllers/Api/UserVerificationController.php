<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Jobs\emailVerification;
use App\Models\User;
use App\Models\UserVerification;
use Illuminate\Http\Request;

class UserVerificationController extends Controller
{
    public function email(Request $request)
    {
        $user = User::find($request->id);
        $email = rand(100000000, 999999999);
        $user->UserVerification()->updateOrCreate(
            ['user_id' => $user->id],
            ['email' => $email]
        );

        emailVerification::dispatch([
            'data' => $user,
        ]);

        return response([
            'data' => 'Verification Link has been Sent to your Email',
            'link' => 'api/user/verification/'.$user->id.'?email='.$email,
        ], 200);

    }

    public function mobile(Request $request)
    {
        $user = User::find($request->id);
        $otp = rand(1000, 9999);

        $user->UserVerification()->updateOrCreate(
            ['user_id' => $user->id],
            ['mobile' => $otp]
        );

        // Account details
        $apiKey = urlencode('NmIzOTQyNTc0YjZlNGY0NjZlNDczNjQ3NTU3MTY1NzU=');
        // Message details
        $numbers = array('91'.$user->mobile);
        $sender = urlencode('HOBHAV');
        $message = rawurlencode('Dear Customer, '.$otp.' is the OTP for your mobile verification at houseofbhavana.in. Thank you');

        $numbers = implode(',', $numbers);

        // Prepare data for POST request
        $data = array('apikey' => $apiKey, 'numbers' => $numbers, 'sender' => $sender, 'message' => $message);
        // Send the POST request with cURL
        $ch = curl_init('https://api.textlocal.in/send/');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        return response([
            'otp' => $otp,
        ], 200);
    }

    public function google(Request $request)
    {
        return response([
            'google' => null
        ], 200);
    }

    public function facebook(Request $request)
    {
        return response([
            'facebook' => null
        ], 200);
    }
    public function verification(Request $request)
    {
        //$user = User::with('UserVerification')->find($request->id);
        $user_verification = UserVerification::where('user_id', $request->id)->first();
        if ($request->email != null && $request->email == $user_verification->email){
            $user_verification->update([
                'email' => now()
            ]);
            $verified = 'email has been verified';
        }
        if ($request->mobile != null && $request->mobile == $user_verification->mobile){
            $user_verification->update([
                'mobile' => now()
            ]);
            $verified = 'OTP has been verified';
        }
        return response([
            'Message' => $verified ?? null,
        ], 200);
    }
}
