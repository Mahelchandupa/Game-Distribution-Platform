<?php
    session_start();
    include ('connect_db.php');
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $pw = $_POST['password'];


        if(empty($email) || empty($pw)){
            header('location: user-login.php?error=fieldempty');
            exit();
        }
        else{
 
            $sql = "select * from users where email = '$email' and pw = '$pw'";
            $result = mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($result);
    
            if(mysqli_num_rows($result) > 0){
                $_SESSION['customer'] = $email;
                $_SESSION['customerid'] = $row['id'];
                $_SESSION['cusname'] = $row['firstName'];
                   header('location:Slider.php');
            }else{
                header('location: user-login.php?incorect=EmailorPw');
            }
        }       
    }
 ?>