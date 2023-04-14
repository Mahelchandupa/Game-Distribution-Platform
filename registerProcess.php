<?php
 session_start();
 // initializing variables
/*$username = "";
$email    = "";*/
$errors = array();
 include ('connect_db.php');
 if(isset($_POST['register'])){
    $email = $_POST['Email'];
    $fname = $_POST['Fname'];
    $lname = $_POST['Lname'];
    $country = $_POST['country'];
    $pw = $_POST['password'];

    $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($con, $user_check_query);
    $user = mysqli_fetch_assoc($result);

      if($country == 'select' || empty($fname) || empty($lname) || empty($email) || empty($pw)){
        header('location: user-register.php?signup=empty');
        exit();
      }
      else{
        if(!preg_match("/^[a-zA-Z]*$/",$fname) || !preg_match("/^[a-zA-Z]*$/",$lname)){
            header('location: user-register.php?signup=char');
           exit(); 
        }
        else{
          if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
              header('location: user-register.php?signup=email');
              exit();
          }
          else{
            if($user['email'] === $email){
              header('location: user-register.php?signup=exists');
              exit();
            }
            else{
              $query = "INSERT INTO users (firstName, lastName, email, country, pw) VALUES('$fname', '$lname', '$email', '$country','$pw')";
  	          mysqli_query($con, $query);
              header('location: user-register.php?signup=succes');
            exit();
            }
          }
        }
        
      
    }

      
  }
    
  
    // Finally, register user if there are no errors in the form
   /* if (count($errors) == 0) {
        $password = md5($password_1);//encrypt the password before saving in the database
  
        $query = "INSERT INTO users (username, email, password) 
                  VALUES('$username', '$email', '$password')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
    }*/
  
  
 
?>