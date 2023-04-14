<?php

error_reporting(0);
session_start();
include ('connect_db.php');
if(!isset($_SESSION['admin']) && empty($_SESSION['admin'])){
header('location:admin-login.php');
}
else{

  if(isset($_POST['add_game'])){
     //Information
     $game_name = $_POST['game_name'];        
     $game_image = $_FILES['game_image']['name'];
     $game_image_tmp_name = $_FILES['game_image']['tmp_name'];
     $game_image_folder = 'browse_images/'.$game_image;
     $game_description = $_POST['game_description'];
     $game_price = $_POST['game_price'];
     $game_developer = $_POST['game_developer'];
     $game_ReleaseDate = $_POST['game_ReleaseDate'];
     $game_Platform = $_POST['game_Platform'];
     $game_publisher = $_POST['game_publisher'];
     $game_video = $_POST['game_video'];

     $small_image_1 = $_FILES['game_small-1_image']['name'];
     $game_small_1_image_tmp_name = $_FILES['game_small-1_image']['tmp_name'];
     $game_image_s1_folder = 'small-images/'.$small_image_1;

     $small_image_2 = $_FILES['game_small-2_image']['name'];
     $game_small_2_image_tmp_name = $_FILES['game_small-2_image']['tmp_name'];
     $game_image_s2_folder = 'small-images/'.$small_image_2;


     //minimum requirement
     $game_mProcessor = $_POST['game_mProcessor'];
     $game_mCpu = $_POST['game_mCpu'];
     $game_mMemory = $_POST['game_mMemory'];
     $game_mStorage = $_POST['game_mStorage'];

       //recommended requirement
       $game_rProcessor = $_POST['game_rProcessor'];
       $game_rCpu = $_POST['game_rCpu'];
       $game_rMemory = $_POST['game_rMemory'];
       $game_rStorage = $_POST['game_rStorage'];

     if(empty($game_name) || empty($game_image) || empty($game_price) || empty($game_developer) || empty($game_ReleaseDate) || empty($game_Platform) || empty($game_mProcessor) || empty($game_mCpu) || empty($game_mMemory) || empty($game_mStorage) || empty($game_rProcessor) || empty($game_rCpu) || empty($game_rMemory) || empty($game_rStorage)){
         $message[] = 'please fill out all';
     }
     else{
        $insert = "INSERT INTO browsetb(gameName, gameImage, gameDescription, gamePrice, mProcessor, mCPU, mMemory, mStorage, Developer, ReleaseDate, Platform, rProcessor, rCPU, rMemory, rStorage,Publisher,gameVideo,small_img1,small_img2) VALUES ('$game_name',' $game_image',' $game_description','$game_price', '$game_mProcessor','$game_mCpu','$game_mMemory','$game_mStorage','$game_developer','$game_ReleaseDate','$game_Platform','$game_rProcessor','$game_rCpu','$game_rMemory','$game_rStorage','$game_publisher','$game_video','$small_image_1','$small_image_2')";
        $upload = mysqli_query($con, $insert);
        if($upload){
            move_uploaded_file($game_image_tmp_name,$game_image_folder);
            move_uploaded_file($game_small_1_image_tmp_name, $game_image_s1_folder);
            move_uploaded_file($game_small_2_image_tmp_name, $game_image_s2_folder);
            $message[] = 'new game added succesfully';
        }
        else{
            $message[] = "Could not add the game";
        }
     }
  }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        html{
            font-size: 62.5%;
            overflow-x: hidden;
        }
        .container{
            max-width: 90%;
            padding: 2rem;
            margin: 0 auto;
        }
        .admin-product-form-container{
            max-width: 90%;
            margin: 0 auto;
            padding: 2rem;
            border-radius: .5rem;
            background-color: rgb(243, 243, 243);
        }
        .admin-product-form-container form h3{
            text-transform: uppercase;
            color: red;
            margin-bottom: 2rem;
            text-align: center;
            font-size: 2.5rem;
        }
        .admin-product-form-container form .box{
               width: 350px;
               border-radius: .5rem;
               padding: 1.2rem 1.5rem;
               margin: 1rem 0;
               font-size: 1.3rem ;
               background: white;
        }
        .admin-product-form-container form .btn{
               display: block;
               width: 100%;
               cursor: pointer;
               border-radius: .5rem;
               margin-top: 1rem;
               font-size: 1.7rem;
               padding : 1rem 3rem;
               background: red;
               color: white;
               text-transform: none;
        }
        .message{
            display: block;
            padding: 1.5rem 1rem;
            font-size: 2rem;
            color: black;
            margin-bottom: 2rem;
            background-color: yellow;
        }
        .counts-game-user {
            margin-bottom: 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;

        }
        .total-reg-users{
            background-color: red;
            padding: 30px 40px;
        }
        .total-reg-users h3{
            color: #fff;
            font-family: sans-serif; 
            font-size: 25px;
            text-align: center;
        }
        .total-games-platform{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

    </style>
</head>
<body>
<h1 style="font-family: sans-serif;margin:20px; padding: 20px 0; color: green; font-size: 35px;">Player2Games Offical WebSite Admin Dashboard</h1>

    <div class="counts-game-user col-md-6 mx-auto">
        <div class="hsk">
        <h2 style="font-family: sans-serif; ">Total Registerd Users</h2>
       <div class="total-reg-users bg-danger">
       <?php
         $sql = "SELECT * from users";

         if ($result = mysqli_query($con, $sql)) {
         
             // Return the number of rows in result set
             $rowcount = mysqli_num_rows( $result );
        ?>

             <h3><?php echo $rowcount ?></h3>
       </div>
       <?php
         }
       ?>
        </div>

        <div class="hsk">
        <h2 style="font-family: sans-serif; ">Total Number of Games</h2>
       <div class="total-reg-users bg-danger">
       <?php
         $sql = "SELECT * from browsetb";

         if ($result = mysqli_query($con, $sql)) {
         
             // Return the number of rows in result set
             $rowgames = mysqli_num_rows( $result );
        ?>

             <h3><?php echo $rowgames ?></h3>
       </div>
       <?php
         }
       ?>
        </div>
      
    </div>

    <h1 class="col-md-10 mx-auto mb-5 bg-info" style="font-family: sans-serif; padding:10px 20px;">Platform</h1>
    <div class="total-games-platform mb-5 col-md-10 mx-auto">
        
    <div class="hsk">
        <h2 style="font-family: sans-serif; text-align: center;">STEAM</h2>
       <div class="total-reg-users bg-success">
       <?php
         $sql = "SELECT * from browsetb where Platform = 'Steam'";

         if ($result = mysqli_query($con, $sql)) {
         
             // Return the number of rows in result set
             $rowsteam = mysqli_num_rows( $result );
        ?>

             <h3><?php echo $rowsteam ?></h3>
       </div>
       <?php
         }
       ?>
        </div>

        <div class="hsk">
        <h2 style="font-family: sans-serif; text-align: center;">UBISOFT</h2>
       <div class="total-reg-users bg-success">
       <?php
         $sql = "SELECT * from browsetb where Platform = 'Ubisoft'";

         if ($result = mysqli_query($con, $sql)) {
         
             // Return the number of rows in result set
             $rowsub = mysqli_num_rows( $result );
        ?>

             <h3><?php echo $rowsub ?></h3>
       </div>
       <?php
         }
       ?>
        </div>

        <div class="hsk">
        <h2 style="font-family: sans-serif; text-align: center;">EPIC</h2>
       <div class="total-reg-users bg-success">
       <?php
         $sql = "SELECT * from browsetb where Platform = 'Epic'";

         if ($result = mysqli_query($con, $sql)) {
         
             // Return the number of rows in result set
             $rowepic = mysqli_num_rows( $result );
        ?>

             <h3><?php echo $rowepic ?></h3>
       </div>
       <?php
         }
       ?>
        </div>

        <div class="hsk">
        <h2 style="font-family: sans-serif; text-align: center;">ROCKSTAR</h2>
       <div class="total-reg-users bg-success">
       <?php
         $sql = "SELECT * from browsetb where Platform = 'Rockstar'";

         if ($result = mysqli_query($con, $sql)) {
         
             // Return the number of rows in result set
             $rowsrock = mysqli_num_rows( $result );
        ?>

             <h3><?php echo $rowsrock ?></h3>
       </div>
       <?php
         }
       ?>
        </div>


        <div class="hsk">
        <h2 style="font-family: sans-serif; text-align: center;">ORIGIN</h2>
       <div class="total-reg-users bg-success">
       <?php
         $sql = "SELECT * from browsetb where Platform = 'Origin'";

         if ($result = mysqli_query($con, $sql)) {
         
             // Return the number of rows in result set
             $rowsor = mysqli_num_rows( $result );
        ?>

             <h3><?php echo $rowsor ?></h3>
       </div>
       <?php
         }
       ?>
        </div>

        <div class="hsk">
        <h2 style="font-family: sans-serif; text-align: center;">MICRSOFT</h2>
       <div class="total-reg-users bg-success">
       <?php
         $sql = "SELECT * from browsetb where Platform = 'Steam'";

         if ($result = mysqli_query($con, $sql)) {
         
             // Return the number of rows in result set
             $rowsmic = mysqli_num_rows( $result );
        ?>

             <h3><?php echo $rowsmic ?></h3>
       </div>
       <?php
         }
       ?>
        </div>

        <div class="hsk">
        <h2 style="font-family: sans-serif; text-align: center;">OTHERS</h2>
       <div class="total-reg-users bg-success">
       <?php
         $sql = "SELECT * from browsetb where Platform = 'Other'";

         if ($result = mysqli_query($con, $sql)) {
         
             // Return the number of rows in result set
             $rowsother = mysqli_num_rows( $result );
        ?>

             <h3><?php echo $rowsother ?></h3>
       </div>
       <?php
         }
       ?>
        </div>
    </div>

   <?php
      if(isset($message)){
        foreach($message as $message){
            echo '<span class="message">' .$message. '</span>';
        }
      }
   ?>

    <div class="container">
        <div class="admin-product-form-container">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
              <h3>Add New Game</h3>
        <div class="row">
            <div class="col-md-4" style="background-color: rgb(243, 243, 243);">
                 <h4>Information</h4>
                    <input type="text" placeholder="Enter Game Name" name="game_name" class="box">
                    <input type="file" accept="image/png, image/jpeg, image/jpg" name="game_image" class="box">
                    <input type="text" placeholder="Enter Game Description" name="game_description" class="box"> 
                    <input type="text" placeholder="Enter Game Developer" name="game_developer" class="box">  
                    <input type="text" placeholder="Game Publisher" name="game_publisher" class="box">      
                    <input type="text" placeholder="Game Release Date " name="game_ReleaseDate" class="box"> 
                    <input type="text" placeholder="Game Platform " name="game_Platform" class="box">         
                    <input type="text" placeholder="Enter Game price" name="game_price" class="box">
                    <input type="text" placeholder="Game video Url" name="game_video" class="box">
                    <p>Small Image 1</p>
                    <input type="file" accept="image/png, image/jpeg, image/jpg" name="game_small-1_image" class="box">
                    <p>Small Image 2</p>
                    <input type="file" accept="image/png, image/jpeg, image/jpg" name="game_small-2_image" class="box">

            </div>
            <div class="col-md-4" style="background-color: rgb(243, 243, 243);">
              <h4>Minimum System Requirements</h4>
              <input type="text" placeholder="Processor" name="game_mProcessor" class="box">
              <input type="text" placeholder="CPU" name="game_mCpu" class="box">
              <input type="text" placeholder="Memory" name="game_mMemory" class="box">
              <input type="text" placeholder="Strorage" name="game_mStorage" class="box"> 
            </div>
            <div class="col-md-4" style="background-color: rgb(243, 243, 243);">
              <h4>Recommended System Requirements</h4>
              <input type="text" placeholder="Processor" name="game_rProcessor" class="box">
              <input type="text" placeholder="CPU" name="game_rCpu" class="box">
              <input type="text" placeholder="Memory" name="game_rMemory" class="box">
              <input type="text" placeholder="Strorage" name="game_rStorage" class="box"> 
            </div>
        </div>
             
              <input type="submit" class="btn" name="add_game" value="ADD">
        </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>