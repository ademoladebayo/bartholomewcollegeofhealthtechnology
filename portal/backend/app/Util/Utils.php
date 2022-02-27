<?php

namespace App\Util;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Utils
{
    function getPosition($number)
    {
        $ends = array('th', 'st', 'nd', 'rd', 'th', 'th', 'th', 'th', 'th', 'th');
        if ((($number % 100) >= 11) && (($number % 100) <= 13))
            return $number . 'th';
        else
            return $number . $ends[$number % 10];
    }

    function sendOTP(Request $request)
    {
        $Notifier = new Notifier();
        return  $Notifier->sendMail($request->email, "EMAIL VERIFICATION", 'ADEMOLA');
    }

    function verifyOTP(Request $request)
    {
        $data = DB::table('otp')->where('email', $request->email)->where('value', $request->otp)->get();

        if (count($data) < 1) {
            // NOT OTP FOUND FOR SUCH EMAIL
            return response()->json(['success' => false, 'message' => 'Invalid OTP']);

        } else {
            // OTP FOUND, DELETE ONCE
            DB::table('otp')->where('id', $data[0]->id)->delete();
            return response()->json(['success' => true, 'message' => 'OTP is valid']);
        }
    }

    public function generateOTP()
    {
        $n1 = rand(1, 9);
        $n2 = rand(1, 9);
        $n3 = rand(1, 9);
        $n4 = rand(1, 9);
        $n5 = rand(1, 9);
        $n6 = rand(1, 9);

        while (true) {
            $n1 = rand(1, 9);
            $n2 = rand(1, 9);
            $n3 = rand(1, 9);
            $n4 = rand(1, 9);
            $n5 = rand(1, 9);
            $n6 = rand(1, 9);
            //echo  $n1.$n2.$n3.$n4.$n5.$n6.'<br/>';
            if ($n1 != $n2 && $n1 != $n3 && $n1 != $n4 && $n1 != $n5 && $n1 != $n6 && $n2 != $n3 && $n2 != $n4 && $n2 != $n5 && $n2 != $n6 && $n3 != $n4 && $n3 != $n5 && $n4 != $n5 && $n4 != $n6 && $n5 != $n6) {
                return $n1 . $n2 . $n3 . $n4 . $n5 . $n6;
                break;
            }
        }
    }
}
