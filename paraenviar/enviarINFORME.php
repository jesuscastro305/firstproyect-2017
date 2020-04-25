<?php


require ('../phpmailer/PHPMailerAutoload.php');
require ("../phpmailer/class.phpmailer.php");
require ("../phpmailer/class.smtp.php");

$mail = new PHPMailer(); // create a new object
//$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 587; // or 587
$mail->IsHTML(true);
$mail->Username = "inventario.aga@gmail.com";
$mail->Password = "@gad3m3xic0";
$mail->SetFrom("Sistema@inventario");
$mail->Subject = "REGISTRO DE SALIDA";
$mail->Body = $html;
//$mail->AddAddress("bnava@agademexico.com.mx");
//$mail->isSendmail("bnava@agademexico.com.mx");
$mail->AddAddress("jesuscastro305@gmail.com");
$mail->isSendmail("jesuscastro305@gmail.com");
 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
     echo "<script>alert('Mailer Error: ' . $mail->ErrorInfo;);</script>";
         echo"<script>window.history.back()</script>";
 } 
     echo "<script>alert('TODO EN ORDEN');</script>";
     echo"<script>window.history.back()</script>";
?>