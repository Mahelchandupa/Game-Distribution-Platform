<?php
  session_start();
  include ('connect_db.php');
  if(!isset($_SESSION['customerid'])){
  header('location:user-login.php');
  }
  else{
  $g_id = $_GET['id'];
  $c_id = $_GET['cid'];
  
  $deletewish = "DELETE FROM wishlist where gameid = '$g_id' AND userid = '$c_id'";
  if(mysqli_query($con, $deletewish)){
    header('location:userwish-list.php');
  }

  }
?>