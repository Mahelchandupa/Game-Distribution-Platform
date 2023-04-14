<?php

session_start();
include ('connect_db.php');
if(isset($_POST['admin_login'])){
    $email = $_POST['email'];
    $pw = $_POST['password'];


    if(empty($email) || empty($pw)){
        header('location: admin-login.php?error=fieldempty');
        exit();
    }
    else{

        $sql = "select * from adminlogin where Aemail = '$email' and Apassword = '$pw'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($result);

        if(mysqli_num_rows($result) > 0){
            $_SESSION['admin'] = $email;
            header('location:admin_dashboard.php');
        }else{
            header('location: admin-login.php?incorect=EmailorPw');
        }
    }       
}
?>