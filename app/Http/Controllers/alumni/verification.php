<?php

namespace App\Http\Controllers\alumni;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\OtpCode;
use App\Models\graduates;
use App\Models\programs;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use App\Mail\alumni\verificationMail;
use Illuminate\Support\Str;

class verification extends Controller
{
    public function index() : View
    {
        return view('alumni.verification');
    }


    public function generateOtp(Request $request) : JsonResponse
    {
        $firstname = $request->fname;
        $lastname = $request->lname;
        $otp = random_int(100000, 999999);


        $getdata = graduates::where('first_name', $firstname)
            ->where('last_name', $lastname)
            ->first();

       $email=  $this->maskEmail($getdata->email);

        $data = [
            'graduate_id' => $getdata->graduate_id,
            'otp_code'  => $otp
        ];

        OtpCode::create($data);


        $email_data = [
          'otp' => $otp,
          'name' => $firstname . ' ' . $lastname,
        ];
        $this->sendMail($getdata->email,$email_data);
        return response()->json([
            'status' => 200,
            'message' => 'OTP generated successfully',
            'email' => $email,
        ]);
    }

    private function maskEmail($email)
    {
        [$name, $domain] = explode('@', $email);

        return substr($name, 0, 1) . '****@' . $domain;
    }

    public function verifyOtp(Request $request) : JsonResponse
    {
        $firstname = $request->fname;
        $lastname = $request->lname;
        $otps = $request->otp;
        $getdata = graduates::where('first_name', $firstname)
            ->where('last_name', $lastname)
            ->first();

        $otp = OtpCode::where('graduate_id', $getdata->graduate_id)
            ->where('otp_code', $otps)->first();

        if($otp){
            $uuid = Str::uuid();
            OtpCode::where('graduate_id', $getdata->graduate_id)
                ->where('otp_code', $otps)
                ->update([
                    'is_used' => 1
                ]);

            Graduates::where('graduate_id', $getdata->graduate_id)->update([
                'guid' => $uuid,
            ]);

            return response()->json([
                'status' => 200,
                'message' => 'OTP  successfully',
                'guid' => $uuid,
            ]);
        }else{
            return response()->json([
                'status' => 404,
                'message' => 'OTP Incorrect',
                $otp

            ]);
        }
    }

    public function getProgram() : JsonResponse
    {
        return response()->json([
            'status' => 200,
            'message' => 'Successfully Load Program',
            'data' => programs::all(),
        ]);
    }


    private function sendMail($email,$data)
    {


        Mail::to($email)->send(new verificationMail($data));

        return "Email Sent!";
    }
}
