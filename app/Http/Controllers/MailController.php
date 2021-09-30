<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class MailController extends Controller
{
    function mail()
    {
        return view('mail');
    }

    function sendmail(Request $request)
    {
        if (!$request->isMethod('post'))
            return;

        $address = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $mail = new PHPMailer(true);
        
        try 
        {
            $mail->SMTPDebug = SMTP::DEBUG_OFF;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'nikolaykalyshnuy@gmail.com';
            $mail->Password = 'hi6pR25s7';
            $mail->SMTPSecure = "tls";
            $mail->Port = 587;
            $mail->setFrom('nikolaykalyshnuy@gmail.com', 'Nikolay Kalyshnuy');
            $mail->addAddress($address);
            $mail->Subject = $subject;
            $mail->Body = $message;
            $mail->send();
            echo "<h3>Message to $address has been sent</h3>";
        } 
        catch (Exception $e) 
        {
            echo "<h2>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</h2>";
        }
    }
}
