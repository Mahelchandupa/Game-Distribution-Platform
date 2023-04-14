<?php

error_reporting(0);
session_start();
include ('connect_db.php');
$ss = 1;
$userEmail = $_SESSION['customer'];
$cart = $_SESSION['cart'];
$total = $_SESSION['all_tot'];
$user_name =  $_SESSION['cusname'];
$success_send_mail= false;


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
    $mail->addAddress("{$userEmail}");     //Add a recipient
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
    <div class="content" style="color:white;width:95%; margin:auto; background-color: black; padding-bottom:40px;
    ">
      <h1 align="center" style="padding:5px 0; color: Yellow; font-size:35px;font-family:sans-serif; padding-top:20px;">Thank You.</h1>
      <h3 style="text-align: center; padding-bottom:5px; color: white;">Hi '.$user_name.' !</h3>
     <div class="mail-container">
       <div class="hi" style="margin:0; background-color: black; padding:2px 10px;">
          <h4 style="text-align: center; color: white;padding-bottom:20px;">Thanks for your purchase from player2games International .....</h4>
          <hr style="height:2px;border-width:0;background-color:black;">
          <table border="0"   cellpadding="5" cellspacing="0" style= "width:90%;margin:auto; margin-bottom:10px; background-color: black; color:white; font-family: sans-serif;
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
            <td style="color:blue;">'.$userEmail.'</td>
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
    $mail->Body .='<table border="1"  cellpadding="10" cellspacing="0" style= "width:90%; margin:auto; background-color: black; color:white; font-family: sans-serif;
    ">';
    $mail->Body .=' <tr>
    <th colspan="3"  align="left"  bgcolor="gray">HERE WHAT YOU ORDERED :</th>
    </tr>';
    $mail->Body .=' <tr>
    <th  align="left" style="color:green;">Order Name</th>
    <th  align="left"  style="color:green;">Price </th>
    <th  align="left"  style="color:green;">Invoice Id</th>
    </tr>';
    foreach($cart as $key => $value){
        /*  echo $key . "<br>";*/
  
        $sql = "select * from browsetb where gameId = '$key'";
        $result = mysqli_query($con,$sql);

     while($row = mysqli_fetch_assoc($result)){
        $mail->Body .='<tr><td>' . $row['gameName']. '</td>';
        $mail->Body .='<td>$ ' . $row['gamePrice']. '</td>';
        $mail->Body .='<td>123456' .$ss.  '</td></tr>';
        $ss++;
     }
    };
    $mail->Body .='<tr><th colspan="3" align="right">TOTAL [USD]: ' .$total. '</th></tr>';
   '</table>
   </div>';
  
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
        $success_send_mail = true;

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/e0374b34cb.js" crossorigin="anonymous"></script>
    <title>Thank You page</title>
    <style>
        body{
            font-family: 'sans-serif';
        }
        .body-sec{
            width: 100%;
            height: 80vh;
        }
    </style>
</head>
<body style="background-color: rgb(19,19,34);">
    <?php include('header.php') ?>

    <div class="body-sec">
    <div class="col-md-10 col-11 mx-auto m-5 p-5 rounded-4" style="min-height: 260px; background-color: #eee;">
    <p  style="color: green; font-size: 20px; font-family:sans-serif;">Payment Successful</p>
    <h1 style="color: red; font-size: 50px; font-family:sans-serif;">Thank For Purchase !!</h1>
    <h5 style="margin-top:40px; font-family:sans-serif;">
        <?php 
          if($success_send_mail == true){
               echo "Check Your Email";
          }
        ?>
    </h5>
    </div>
    </div>


    <?php include('footer.php') ?>

     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>