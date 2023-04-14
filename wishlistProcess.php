<?php
  session_start();
  include ('connect_db.php');
  if(!isset($_SESSION['customer']) && empty($_SESSION['customer'])){
  header('location:user-login.php');
  }
  else{
     $cusid = $_SESSION['customerid'];
    // echo "$cusid";
     $game_id =  $_POST['product_id'];
    // echo "$game_id";

    $sql_check = "SELECT * FROM wishlist where gameid = $game_id AND userid = $cusid";
    $result_check = mysqli_query($con, $sql_check);

    if(mysqli_num_rows($result_check) == 1){
        echo 'already exist in wishlist';
        header('location:userwish-list.php');
    }
    else{
        $insert = "INSERT INTO wishlist (gameid, userid) values ($game_id, $cusid)";
        if(mysqli_query($con, $insert)){
            header('location:singlepage.php?product_id='.$game_id);

        }
    }
  }
?>