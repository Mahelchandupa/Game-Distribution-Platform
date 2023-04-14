<?php

$tot = 45.77;
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);
$ss = 1;


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 //Load Composer's autoloader
 require 'phpmailer/vendor/autoload.php';
 
 //Create an instance; passing `true` enables exceptions
 $mail = new PHPMailer();

 
try {
    //Server settings
 //   $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'mcr200111@gmail.com';                     //SMTP username
    $mail->Password   = 'kewlhjyqpgbudgpb';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('player2games@gmail.com', 'Player2Games.tech');
    $mail->addAddress('chandupamahel@gmail.com', 'Joe User');     //Add a recipient
  /*  $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');*/

    //Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
 //   $mail->addAttachment('C:\xampp\htdocs\IMAGE-SLIDER\phpmailer\LOGO1.png', 'logo.png');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Sending buying games key';
    $mail->Body    = '
    <div class="content" style="color:white;width:80%; margin:auto; background-color: black; padding-bottom:40px;
    ">
      <h1 align="center" style="padding:5px 0; color: Yellow; font-size:35px;font-family:sans-serif; padding-top:20px;">Thank You.</h1>
      <h3 style="text-align: center; padding-bottom:5px; color: white;">Hi Mahel!</h3>
     <div class="mail-container">
       <div class="hi" style="margin:0; background-color: black; padding:2px 10px;">
          <h4 style="text-align: center; color: white;padding-bottom:20px;">Thanks for your purchase from player2games International .....</h4>
          <h1 style="text-align: center; color: white;">INVOICE ID:<br>F235678091567</h1>
          <hr style="height:2px;border-width:0;background-color:black;">
          <table border="0"   cellpadding="5" cellspacing="0" style= "width:70%;margin:auto; margin-bottom:10px; background-color: black; color:white; font-family: sans-serif;
          ">
          <tr>
             <th align="left" colspan="2"  bgcolor="gray">YOUR ORDER INFORMATION:</th>
          </tr>
          <tr>
            <th align="left">Order id:</th>
            <th align="left">Bill To:</th>
          </tr>
          <tr>
            <td>F235678091567</td>
            <td style="color:blue;">chandupamahel@gmail.com</td>
          </tr>
          <tr>
            <th align="left">Order Date:</th>
            <th align="left">Source:</th>
          </tr>
          <tr>';
          $mail->Body .='<td>'.date("l jS \of F Y ") .'</td>
          <td>Player2Games Store</td>
        </tr>
         </table>
       </div>
     </div>
    ';
    $mail->Body .='<table border="1"  cellpadding="10" cellspacing="0" style= "width:70%;margin:auto; background-color: black; color:white; font-family: sans-serif;
    ">';
    $mail->Body .=' <tr>
    <th colspan="3"  align="left"  bgcolor="gray">HERE WHAT YOU ORDERED :</th>
    </tr>';
    $mail->Body .=' <tr>
    <th  align="left" style="color:green;">Order Name</th>
    <th  align="left"  style="color:green;">Price </th>
    <th  align="left"  style="color:green;">Invoice Id</th>
    </tr>';
    for($x = 0; $x < $arrlength; $x++) {
      $mail->Body .='<tr><td>' .$cars[$x]. '</td>';
      $mail->Body .='<td>$ ' .$tot. '</td>';
      $mail->Body .='<td>123456' .$ss.  '</td></tr>';

      $ss++;
   };
   $mail->Body .='<tr><th colspan="3" align="right">TOTAL [USD]: ' .$tot. '</th></tr>';
   '</table>
   </div>';
  
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
       echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>