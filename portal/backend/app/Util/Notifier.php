<?php

namespace App\Util;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Http\Request;
use App\Util\Utils\OTP;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Notifier
{

    function sendmail($email, $subject, $name)
    {
        require '../vendor/autoload.php';

        $Utils = new Utils();
        $otp = $Utils->generateOTP();

        $body =

            "
        <p2>Dear " . $name . ",</p2> <br/><br/>

        <p3>Here is your one time password(OTP) <b><p1>" . $otp . "</p1></b> to verify your mail.<br/>
        Please ignore if you did not request for this.</p3><br/><br/>

        Warm Regards,<br/>
        <b><p1><i>SMARTSCHOOLHUB.NET</i></p1></b>.
        
        
        ";
        // require '../phpmailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        $mail->isSMTP();
        // enable in localhost and disable in live
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = '587';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Username = 'smartschoolhub.net@gmail.com';
        $mail->Password = 'SMARTSCHOOLHUB.NET@2022';
        $mail->setFrom('SMARTSCHOOLHUB.NET', 'SMARTSCHOOLHUB.NET');
        $mail->addAddress($email);
        $mail->addReplyTo('smartschoolhub.net@gmail.com');
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $body;


        try {

            if ($mail->send()) {
                // INSERT OTP VALUE
                DB::select('insert into otp (email,value) values (?, ?)', [$email, $otp]);
                return response()->json(['success' => true, 'message' => 'OTP sent, Please check you mail box']);
            } else {
                return response()->json(['success' => false, 'message' => 'Please try again, mail not sent']);
            }
        } catch (Exception $e) {
            Log::debug($e->getMessage());
        }
    }


    public function setEmailAttribute()
    {
    }
}
