<?php
  include ('connect_db.php');
  session_start();

  if(isset($_POST['placeOrderBtn'])){
     $cusid = $_SESSION['customerid'];
     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $company = $_POST['company'];
     $country = $_POST['country'];
     $address = $_POST['address'];
     $city = $_POST['city'];
     $zip = $_POST['zip'];
     $phone = $_POST['phone'];
     $email = $_POST['email'];
     $cart = $_SESSION['cart'];

     $sql = "select * from customerbillingdetails where customerId = '$cusid'";
     $result = mysqli_query($con,$sql);
     $row = mysqli_fetch_assoc($result);

     if(mysqli_num_rows($result) == 0){
        
        $query = "INSERT INTO customerbillingdetails (fname, lname, company, country, address, city, zip, phone, email, customerId) VALUES('$fname', '$lname', '$company', '$country','$address','$city','$zip','$phone','$email','$cusid')";
        mysqli_query($con, $query);
     }

     foreach($cart as $key => $value){
        /*  echo $key . "<br>";*/
  
        $sql = "select * from browsetb where gameId = '$key'";
        $result = mysqli_query($con,$sql);

        while($row = mysqli_fetch_assoc($result)){
        
         $gameid =  $row['gameId'];

        $sql2 = "select * from orders where userid = '$cusid' AND gameId = '$gameid' ";
        $result4 = mysqli_query($con,$sql2);
        $queryResult = mysqli_num_rows($result4);
        if($queryResult == 0){
           $query3 = "insert into orders (userid, gameId) values ('$cusid','$gameid')";
           mysqli_query($con, $query3);
        }
     }
        echo 201;
    }

  }

