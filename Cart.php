<?php
  error_reporting(0);
  session_start();
  include ('connect_db.php');
  if(isset($_POST['product_id'])){

    $game_id =  $_POST['product_id'];
    $quntity = 1;
 
  }
   $_SESSION['cart'][$game_id]=array($quntity);
   header('location:singlepage.php?product_id='.$game_id);


?>