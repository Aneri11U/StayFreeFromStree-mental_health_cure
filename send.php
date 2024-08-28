<?php
use PHPMailer\PHPMailer\PHPMaileer;
use PHPMailer\PHPMailer\Eception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    $mail=new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth=true;
    $mail->Username='mywishistobeyourfish@gmail.com';
    $mail->Password='cnjecspavklmuizu';
    $mail->SMTPSecure='ssl';
    $mail->Port=465;
    $mail->setFrom('mywishistobeyourfish@gmail.com');
    $mail->addAddress($_POST["email"]);
    $mail->isHTML(true);
    $mail->Subject=$_POST["subject"];
    
}
?>