<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $name = "";
    $email  = "";
    $website = "";
    $phone = "";
    $msg = "";
    $from = "";
    $service="";
    if ($data) {
        if(isset($data['email'])){
            $from = $data['email'];
        }
        if(isset($data['name'])){
            $name = $data['name'];
        }
        if(isset($data['website'])){
            $website = $data['website'];
        }
        if(isset($data['phone'])){
            $phone = $data['phone'];
        }
        if(isset($data['message'])){
            $msg = $data['message'];
        }
        if(isset($data['service'])){
            $service = $data['service'];
        }
        $response = 'success';
    } 
    else {
        $response = 'empty';
        echo ($response);
        die();
    }
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id='support@webmarlins.com';
    $pass='Protect@123';
    $to='webmarlins@gmail.com';
    // $to2='contact@webmarlins.com';
    // $to='nhusain34@gmail.com';
    $subject="Update from webmarlins.com.";
    $message1 = "\nEmail : ".$from."\n\n Name : ".$name."\n\n Website : ".$website."\n\n Phone : ".$phone."\n\n Message : ".$msg."\n\n Service : ".$service;
}
else{
    die();
}


require 'PHPMailer/PHPMailer/src/Exception.php';
require 'PHPMailer/PHPMailer/src/PHPMailer.php';
require 'PHPMailer/PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
//Server settings
$mail->isSMTP();                                            //Send using SMTP
$mail->SMTPDebug = 0;
$mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = $id;                     //SMTP username
$mail->Password   = $pass;                               //SMTP password
$mail->Port       = 465;                                    
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit SMTPS encryption
//Recipients
$mail->setFrom($id,'Web Marlins - Updates');
$mail->addAddress($to);     //Add a recipient

//Content
$mail->Subject = $subject;
$mail->Body    = $message1;


$mail->send();
if($mail){
    echo "success";
}
else {
    echo "failed";
}
?>
