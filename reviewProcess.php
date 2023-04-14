<?php
  error_reporting(0);
  session_start();
  include ('connect_db.php');

  if(isset($_POST['reSubmit'])){
         $star_rate = $_POST['pStar_rate'];
         $name = $_POST['pName'];
         $revdes = $_POST['pReview'];
         $proId = $_GET['id'];
        if(empty($name) || empty($revdes)){
            header('location: singlepage.php?reviewfildes=empty?id=$proId');
            exit();
         }
         else{
            $query = "INSERT INTO reviews (proId, cuName, review,stars) values('$proId', '$name', '$revdes',$star_rate)";
            mysqli_query($con, $query);
            header('location: singlepage.php?product_id='.$proId);
            exit();
            
       /*  echo $name;
         echo $revdes;
         echo $proId;*/
         }

        }