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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Montserrat:wght@300&family=Poppins&display=swap" rel="stylesheet">
    <script>
     $(function(){
     $("#header-sec").load("header.php");
     $("#footer").load("footer.php");
     })
    </script>
    <title>User-Register</title>
</head>
<style>
.user-login-container
{    /* #25145a #812dfd*/
    /*  background: linear-gradient(to right top,#3522c3, #2dfdcd); 
    background: linear-gradient(to right top,#25145a, #812dfd);*/
    min-height: 95vh;
  /*  position: relative;*/
    text-align: center;
background: url("images/review-bg-2.jpg") 0px 0px no-repeat;
background-size:cover;
background-attachment: relative;
}
.user-login-container input[type="text"], input[type="password"], select{
padding: 13px 10px;
font-size: 16px;
outline: none;
background:transparent;
border:0px;
border-bottom: 1px solid #fff;
border-radius: 0px;
font-family: "Montserrat", sans-serif;
letter-spacing:1.6px;
color:#fff;
}
::-webkit-input-placeholder{
   color:#b4b0b0 !important;
   font-weight:400;
}
.log-btn{
font-size: 18px;
padding: 10px 20px;
letter-spacing:1.2px;
border: none;
text-transform: capitalize;
outline: none;
border-radius: 4px;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
background: #D65B88;
color: #fff;
cursor: pointer;
font-family: "Asap-Regular";
-webkit-transition-duration: 0.9s;
transition-duration: 0.9s;
}
.log-btn:hover {
 -webkit-transition-duration: 0.9s;
 transition-duration: 0.9s;
 background:rgba(91, 157, 214, 0.76);
 color: #fff;
}
p{
    font-family: "Montserrat", sans-serif;
    color: white;
    transition: 0.3s;
}
p:hover{
     color: yellow;
     transition: 0.3s;
}
/*
#register-form{
    display: none;
}
*/
.circle1,
.circle2{
    background: white;
    background: linear-gradient(to right bottom,
      rgb(255, 255, 255, 0.8),
      rgba(255, 255, 255, 0.3));
      height: 20rem;
      width: 20rem;
      position: absolute;
      border-radius: 50%
}
.circle1{
    top: 5%;
    right: 15%;
}
.circle2{
    bottom: 5%;
    left: 10%;
}
.anime img{
   position: absolute;
   bottom: 0;
   right: 0;

}
@media(max-width: 991px) {
    .anime img{
        display: none;
    }
    .circle1,
    .circle2{
        display: none;
    }
}
h2{
    font-family: 'Audiowide', cursive;
    color: #fff;
}

</style>
<body>
   
 <!-- Header -->

 <div id="header-sec"></div>

<!------------------------------------>
<div class="user-login-container">
<div class="row m-auto col-md-10"  style="position: absolute; left: 50%; ;top:50%; ;transform: translate(-50%, -50%);">

<div class="col-md-5 col-11 col-lg-5 m-auto p-md-5 mt-md-5 p-3  mt-5 pb-md-4 border border-danger" style="background: rgba(214, 7, 33, 0.30);" id="register-form">
<h2 style=" text-align:center;">REGISTER FORM</h2>
<form action="registerProcess.php" class="row g-3" method="POST">

                     <div class="col-md-12">
                         <select class="form-select  text-muted" name="country" style="padding: 10px 20px; background:transparent;border:0px;border-bottom: 1px solid #fff;border-radius: 0px;">
                             <option value="select">Select Country</option>
                             <option value="Sri Lanka">Sri Lanka</option>
                             <option value="India">India</option>
                             <option value="America">America</option>
                             <option value="Canda">Canda</option>
                             <option value="Japan">Japan</option>
                             <option value="China">China</option>
                         </select>
                     </div>
                     <div class="col-md-6">
                         
                         <input type="text" class="form-control  text-muted" name="Fname" id="name" placeholder="First name.... ">
                     </div>
                     <div class="col-md-6">
                        
                         <input type="text" class="form-control text-muted" name="Lname" id="name" placeholder="Last name.... ">
                     </div><!--
                     <div class="col-md-12">
                         <label for="" class="form-label" style="color: #eee;" >Profile Image </label> 
                         <input type="file"  class="form-control bg-dark border-white" accept="image/png, image/jpeg, image/jpg" name="game_image">    
                     </div>-->
                     <div class="col-md-12">
                         <input type="text" class="form-control border-white text-muted" name="Email" id="name" placeholder="Your email.... ">    
                     </div>
                     <div class="col-md-12">
                         <input type="text" class="form-control  border-white text-muted" name="password" id="name" placeholder="Password.... ">
                     </div>             
                        <button class="btn col-md-3 mx-auto mt-4 mb-2 log-btn" type="submit" name="register">Submit</button>
                 </form>
                 <?php
                   $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                   if(strpos($fullUrl,"signup=empty")==true){
                    echo "<p class='text-info mx-auto pt-3'> You did not fill in all fields !</p>";
                    exit();
                   }
                   else if(strpos($fullUrl,"signup=char")==true){
                    echo "<p class='text-info mx-auto pt-3'> You used invalid characters</p>";
                    exit();
                   }
                   else if(strpos($fullUrl,"signup=validEmail")==true){
                    echo "<p class='text-info mx-auto pt-3'> You used invalid characters</p>";
                    exit();
                   }
                   else if(strpos($fullUrl,"signup=email")==true){
                    echo "<p class='text-info mx-auto pt-3'> Not a valide email address</p>";
                    exit();
                 }
                   else if(strpos($fullUrl,"signup=exists")==true){
                      echo "<p class='text-info mx-auto pt-3'> Email address already exists</p>";
                      exit();
                   }
                   else if(strpos($fullUrl,"signup=succes")==true){
                    echo "<p class='text-info mx-auto pt-3'> Your are now register succesfully</p>";
                    exit();
                 }
                 ?>
                 <!--<p class="mt-4" style="text-align: center; cursor: pointer;" id="signIn-text" onclick="signIn()">Login now</p>-->

                 <a href="user-login.php" style="font-family: sans-serif;">Login</a>

</div>

</div>   <!--- 
<div class="circle1"></div>
    <div class="circle2"></div>
 <div class="anime">
        <img src="images/anime.png" alt="">
    </div>-->
 </div>  
<!---footer section -->
    <div id="footer"></div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
 
<!------------------------------------------------------------------------------------------------------------------------->

     <script>
        var loginFrom = document.getElementById("login-form");
        var registerFrom = document.getElementById("register-form");
       function signOn(){
            loginFrom.style.display = "none";
            registerFrom.style.display = "block";
       }
       function signIn(){
            loginFrom.style.display = "block";
            registerFrom.style.display = "none";
       }
     </script>

</body>
</html>
