<?php
  error_reporting(0);
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
  }

?>
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
    <title>Document</title>
    <style>
        .error{
            color: #eee;
        }
    </style>
</head>
<body style = "background-color: #1b182b;">
<?php include('header.php') ?>

<div class="" style="min-height: 85vh;margin-bottom: 35px; margin-top: 100px;">
    
<h2 class="my-4 mb-5 text-info" align="center" style="">ORDERS</h2>

<div class="box-container">

<?php
 
 $cusid = $_SESSION['customerid'];

 $sql = "select * from orders JOIN browsetb on browsetb.gameId = orders.gameId where userid = '$cusid'";
 $result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result)){

?>
   <form action="singlepage.php" class="boxx" method="GET">
          <input type="hidden" name="product_id" value="<?= $row['gameId']; ?>">
          <button type="submit" style="border:1px solid #fff; border-radius:0;">
            <img class="imagee" src="browse_images\<?php echo $row['gameImage'];?>" alt="" style="border-radius:0;">
          </button>  
          </form>
<?php
}
}else{
    echo '<h4 class="text-light error">You not buy any game yet!</h4>';
}
?>
   </div>
</div>

<?php include('footer.php') ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>