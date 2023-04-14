<?php
  error_reporting(0);
  session_start();
  include ('connect_db.php');
  $id =  $_GET['product_id'];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/e0374b34cb.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Infor</title>
    <script>
     $(function(){
      $("#header-sec").load("header.php");
     $("#footer").load("footer.php");

     })
    </script>
    <style>
        body{
          background-color: rgb(23,30,34);
            font-family: 'Poppins', sans-serif;
        }
        .single-page{
            margin-top: 90px;

        }/*
       @media screen (max-width:420px) {
          .singl-page{
             width: 100%;
          }
       }*/

        .game_name{
            text-align: center;
            margin: 25px;
            font-size: 30px;
            text-transform: uppercase;
            color: #2fe717;
            font-weight: 600;
        }
        .bold-text{
            color: red;
        }
        .details-header{
            text-align: center;
            color:#fec53a;
            font-size: 20px;
        }
        .game_desc{
            font-family: 'Montserrat', sans-serif;
            color: black;
            font-weight: 400;
            line-height: 200%;
            margin: 20px 0;
        }
        .game_style{
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: black;
            font-weight: 400;
        }
        .btn-add{
          transition: all .3s ease;
        }
        .btn-add:hover{
            background-color: orange;
            color: #fff;
        }
        .btn-wish{
          border: none;
          transition: all .3s ease;
        }
        .btn-wish:hover{
            background-color: blue;
            color: #fff;
        }
        .table-style{
           font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .btn-tabs{
    text-align: center;
    margin: 15px 0;
}
.btn-tabs hr{
    margin: 5px 0;
}
.btn-tabs button{
    border: none;
    outline: none;
    color: rgb(174, 173, 173);
    font-weight: bold;
    text-align: center;
    font-size: 14px;
    padding: 0 5px;
}
#videoTab{
    display: none;
}
.btn-tabs #btnInfo{
    color: #FF9600;
}
#reviewTab{
    display: none;
}
.single-page .container p,td{
  color:#7f8b92;
}
h4,h5{
  color: #fff;
  font-family: "Montserrat", sans-serif;
}
h4 span{
  font-family: "Montserrat", sans-serif;
}
.review-star i{
   color: gray;
}
.new-content{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, auto));
            gap: 1.5rem;
            justify-content: center;
        }
        /*--------------------------*/
        .box{
           position: relative;
           width: 100%;
           height: 325px;
        }
        .box img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .box .box-text{
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            padding: 10px;
            background: hsl(227, 14%, 20%, 0.8);
            backdrop-filter: blur(4px);

        }
        .box .box-text h2{
            font-weight: 500;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: aliceblue;
            font-size: 1rem;
            text-align: left;
        }
        .box .box-text h3{
            font-size: 0.9rem;
            font-weight: 400;
            margin-bottom: 0.8rem;
            color: antiquewhite;
        }
        .box .box-text .rating{
            display: flex;
            margin-bottom: 1rem;
        }
        .box .box-text .rating i{
            font-size: 1rem;
            color: rgb(231, 251, 5);
            padding-left: 2px;
        }
        /*---------------------*/
        
    </style>
</head>
<body>

 <!-- Header -->

 <div id="header-sec"></div>

<!------------------------------------>
      

<?php
       $query =" select * from browsetb where gameId = ?"; 
       $stmt = mysqli_stmt_init($con);
       if(!mysqli_stmt_prepare($stmt,$query)){
         echo "SQL statment failed";
       }
       else{
         mysqli_stmt_bind_param($stmt, "s", $id);
       }
       mysqli_stmt_execute($stmt);
       $result = mysqli_stmt_get_result($stmt);
       while($row = mysqli_fetch_assoc($result)){
        ?>
       
<div class="single-page">
    <div class="container">
        <h3 class="game_name"><?php echo $row['gameName'];?></h3>
        <hr style="background-color: red; height: 3px;">
        <div class="row gy-3 gx-2">
            <div class="col-12 col-md-6 col-lg-6">
                    <img class="img-fluid d-block rounded" style="width: 450px; height: 650px; margin: auto;" id="my_image" src="browse_images\<?php echo $row['gameImage'];?>" alt="" >
            </div>

            <div class="col-12 col-md-6 col-lg-6 rounded" >
                    <p class="" style="text-align: center; color: #FF9600; font-size: 42px; font-family: 'Montserrat', sans-serif; font-weight: 1000; font-size: 30px; margin: 10px 0;">$<?php echo $row['gamePrice'];?></p>
                    <hr>
                    <h5 style=" text-transform: uppercase; text-align: center;"><?php echo $row['gameName'];?> WILL BE AVAILABLE ON <?php echo $row['ReleaseDate'];?></h5>
                    <div class="table-responsive col-12 col-md-6 col-lg-6 mx-auto my-4">
                        <table class="table align-middle">
                          <thead>
                            <tr class="align-middle">
                              <td class="game-style" style="color: red; font-family: 'Montserrat', sans-serif;">Developer</td>
                              <td class="game-style" style="font-family: 'Montserrat', sans-serif;"><?php echo $row['Developer'];?></td>
                            </tr>
                          </thead>
                          <tbody>
                            <tr  class="align-middle">
                                <td class="game-style" style="color: red; font-family: 'Montserrat', sans-serif;">Publisher</td>
                                <td class="game-style" style="font-family: 'Montserrat', sans-serif;"><?php echo $row['Publisher'];?></td>
                            </tr>
                            <tr  class="align-middle">
                                <td class="game-style" style="color: red; font-family: 'Montserrat', sans-serif;">Release Date</td>
                                <td class="game-style" style="font-family: 'Montserrat', sans-serif;"><?php echo $row['ReleaseDate'];?></td>
                            </tr>
                            <tr  class="align-middle">
                              <td class="game-style" style="color: red; font-family: 'Montserrat', sans-serif;">Platform</td>
                              <td class="game-style" style="font-family: 'Montserrat', sans-serif;"><?php echo $row['Platform'];?></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                        <div class="row mx-auto my-4 col-12 col-md-9 col-lg-9 mb-5">
                            <div class="col-4 col-lg-4 col-md-4">
                                <div class="card border-0">
                                   <img  class="small-img" src="small-images\<?php echo $row['small_img1'];?>" alt="" style="height: 130px; cursor:pointer;">
                                </div>
                                </div>
                                <div class="col-4 col-lg-4 col-md-4">
                                    <div class="card border-0">
                                       <img  class="small-img" src="small-images\<?php echo $row['small_img2'];?>" alt="" style="height: 130px; cursor:pointer;">
                                    </div>
                                    </div>
                                    <div class="col-4 col-lg-4 col-md-4">
                                        <div class="card border-0">
                                           <img  class="small-img" src="browse_images\<?php echo $row['gameImage'];?>" alt="" style="height: 130px; cursor:pointer;">
                                        </div>
                        </div>
                        </div>
                        <div class="d-grid gap-2 col-12 col-md-8 col-lg-8 mx-auto">
                          <form action="Cart.php" method="post">
                          <input type="hidden" name="product_id" value="<?= $id ?>">
                          <button class="btn btn-warning btn-add col-md-12 col-12" type="submit"><i class="fa-sharp fa-solid fa-cart-shopping" style="padding-right:6px; font-size: 15px;"></i>ADD TO CART</button>
                          </form>
                          <form action="wishlistProcess.php" method="POST">
                          <input type="hidden" name="product_id" value="<?= $id ?>">
                          <button class="btn btn-info mb-4 col-md-12 col-12 btn-wish" type="submit"><i class="fa fa-plus-circle" aria-hidden="true"  style="padding-right:6px; font-size: 15px;" ></i>ADD TO WISHLIST</button>
                          </form>
                          </div>
                  </div>
            </div>


            <div class="row gx-2 mt-4 mb-5 px-3  pb-4 rounded" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;background-color:rgb(23,30,34);">
            <div class="btn-tabs">
                        <hr>
                         <div class="row col-md-4 col-12 mx-auto">
                            <div class="col-md-4 col-12">
                                <button style="background-color:rgb(23,30,34);" id="btnInfo" onclick="VideoC()">INFORMATION</button>
                            </div>
                            <div class="col-md-4 col-12">
                                <button style="background-color:rgb(23,30,34);" id="btnVideo" onclick="InfoC()">VIDEOS</button>
                            </div>
                            <div class="col-md-4 col-12">
                                <button style="background-color:rgb(23,30,34);" id="btnReview" onclick="Review()" style="font-size: 14px;">REVIEWS</button>
                            </div>
                         </div>
                         <hr>
            </div>
               <div class="col-lg-12 col-12 col-md-12 rounded px-0"  id="InfoTab">
               
                <h4>Get your <?php echo $row['gameName'];?> -<span class="bold-text" style="color: red;">Steam Online Activation</span> with <span class="bold-text">player2games.tech</span></h4> 
                <p class="mt-4" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><?php echo $row['gameDescription'];?></p>
                <div class="row">
                    <h5 class="my-3" align="center" style="font-family: 'Montserrat', sans-serif; font-weight:bold;">System Requirements</h5>
                    <div class="col-12 col-lg-6 col-md-6">
                        <div class="table-responsive col-12  col-md-10 col-lg-10 mx-auto my-2 ">
                            <table class="table align-middle table-borderless" >
                               <thead>
                                  <td colspan="2" style="font-weight: bold;" align="center">minimum System Requirements</td>
                               </thead>
                              <tbody>
                                <tr>
                                  <td class="table-style">Processor</td>
                                  <td class="table-style"><?php echo $row['mProcessor'];?></td>
                                </tr>
                              </tbody>
                              <tbody>
                                <tr>
                                    <td class="table-style">GPU</td>
                                    <td class="table-style"><?php echo $row['mCPU'];?></td>
                                </tr>
                                <tr>
                                    <td class="table-style">Memory</td>
                                    <td class="table-style"><?php echo $row['mMemory'];?></td>
                                </tr>
                                <tr>
                                  <td class="table-style">Storage</td>
                                  <td class="table-style"><?php echo $row['mStorage'];?></td>
                                </tr>
                              </tbody>
                            </table>
                        </div>      
                    </div>  
                    
                    <div class="col-12 col-lg-6 col-md-6">
                        <div class="table-responsive col-12  col-md-10 col-lg-10 mx-auto my-2">
                            <table class="table align-middle table-borderless">
                               <thead>
                                    <td colspan="2" align="center" style="font-weight: bold;">Recommended System Requirements</td>
                               </thead>
                              <tbody>
                                <tr>
                                  <td class="table-style">Processor</td>
                                  <td class="table-style"><?php echo $row['rProcessor'];?></td>
                                </tr>
                              </tbody>
                              <tbody>
                                <tr>
                                    <td class="table-style">GPU</td>
                                    <td class="table-style"><?php echo $row['rCPU'];?></td>
                                </tr>
                                <tr>
                                    <td class="table-style">Memory</td>
                                    <td class="table-style"><?php echo $row['rMemory'];?></td>
                                </tr>
                                <tr>
                                  <td class="table-style">Storage</td>
                                  <td class="table-style"><?php echo $row['rStorage'];?></td>
                                </tr>
                              </tbody>
                            </table>
                        </div>      
                    </div>        
                </div>
              
               </div>
                          <!--Video tab-->
    <div class="col-md-12 col-12" style="background-color:rgb(23,30,34);" id="videoTab">
                         <div class="video-wrapper col-12 col-md-11 mx-auto">
                            <iframe   width="100%" height="600px" src="<?php echo $row['gameVideo'];?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                         </div>
                     </div>

              
                           <!--Players review-->
                           <div class="col-md-12 col-12" style="background-color:rgb(23,30,34);" id="reviewTab">

                        <?php
                            
                            $reviewquery = "select * from reviews where proId = '$id'";
                            $getresult = mysqli_query($con,$reviewquery);
                            if(mysqli_num_rows($getresult) > 0){
                             while($rrow = mysqli_fetch_array($getresult)){
                         
                        ?>
                            <div class="card border-0 col-md-8 col-12 mx-auto mb-2">
                                <div class="card-header" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color:rgb(23,30,34); color:#eee;">
                                    <span class="bg-danger text-white" style="border-radius: 50%; width: 50px; padding: 5px 11px; margin-right: 5px;"><?php echo (mb_substr($rrow['cuName'], 0, 1, "UTF-8"));?></span>by <?php echo $rrow['cuName']; ?>
                                  </div>
                                <div class="card-body" style="background-color:rgb(23,30,34); display: flex;   justify-content: space-between; align-items: center;">
                                   
                                  <!--<h5 class="card-title">Special title treatment</h5>-->
                                  <p class="card-text pt-2 ps-3" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><?php echo $rrow['review']; ?></p>
                                  <div class="review-star">
                                    <?php
                                        $start =1;
                                        while($start <= 5){
                                           if($rrow['stars'] < $start){
                                             ?>
                                            <i class="fa-sharp fa-solid fa-star"></i>
                                          <?php
                                           }else{
                                            ?>
                                            <i class="fa-sharp fa-solid fa-star" style="color: yellow;"></i>
                                          <?php
                                           }
                                           $start++;                                      
                                        }
                                    ?>
                                  </div> 
                                </div>
                                <div class="card-footer text-md-end" style="background-color:rgb(23,30,34);">
                                    <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><?php echo $rrow['subtime']; ?></p>
                                  </div>
                              </div>
                <?php
                       }
                    }
                ?>
                
                              <div class="col-12 col-md-8 mx-auto mt-4">
                                <h5 align="center" style="color: lightblue; font-family:sans-serif; margin-bottom:15px;">Add Review</h5>
                                <form action="reviewProcess.php?id=<?= $id ?>" method="POST">
                                     <div class="form-group" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                                       <select class="form-select" style="background-color:rgb(23,30,34); color:#7f8b92;" name="pStar_rate">
                                        <option value="0">*Give your Rate</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                       </select>
                                      </div>
                                    <div class="form-group mt-4" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                                        <input type="text" class="form-control" name="pName" id=""  style="background-color:rgb(23,30,34);" placeholder="*Enter Your Name">
                                      </div>
                                      <div class="form-group mt-4" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                                        <textarea class="form-control text-light" name="pReview" id="" rows="3"  style="background-color:rgb(23,30,34);" placeholder="*Type Review Here"></textarea>
                                      </div>
                                      <div class="col-md-2 mt-3">
                                        <button type="submit" name="reSubmit" class="btn btn-danger col-md-12 mt-2">Submit</button>
                                      </div>
                                  </form>
                              </div>
                        </div>
          </div>
    </div>
</div>  

    <?php
       }
     ?>

<div class="related-game">
  <h2 style="text-align: center; color:#fec53a; font-size: 30px; margin: 0 0 40px 0;">RELATED GAMES</h2>
  <div class="new-content col-md-10 mx-auto mb-5">
    <?php
  $query =" select * from browsetb order by rand() limit 8"; 
  $result = mysqli_query($con,$query);
  if(mysqli_num_rows($result) > 0){
   while($row = mysqli_fetch_array($result)){
 ?>
    <div class="box">
  
            <a href="singlepage.php?product_id=<?= $row['gameId']; ?>">
            <img  src="browse_images\<?php echo $row['gameImage'];?>" alt="">
            </a>
          
  
         <div class="box-text">
             <h2><?php echo $row['gameName'];?></h2>
             <h3><span>$</span><?php echo $row['gamePrice'];?></h3>
             <div class="rating">
                 <i class="fa-sharp fa-solid fa-star"></i>
                 <i class="fa-sharp fa-solid fa-star"></i>
                 <i class="fa-sharp fa-solid fa-star"></i>
                 <i class="fa-sharp fa-solid fa-star"></i>
                 <i class="fa-sharp fa-solid fa-star"></i>
             </div> 
      
         </div>
         </div> 
<?php
   }
}
?>
     
    </div>

</div>
<!-- footer section-->
<div id="footer"></div>

    
 <!--JQuery references/installing Jquery-->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

     <script>
        $(document).ready(function(){
            $('.small-img').click(function(){
                var $smallImage = $(this).attr('src');
                $('#my_image').attr('src',$smallImage);  
            });
           });
          
    </script>
 

   <script>
        var videoTab = document.getElementById('videoTab');
        var infoTab = document.getElementById('InfoTab');
        var btnInfo = document.getElementById('btnInfo');
        var btnVideo = document.getElementById('btnVideo');

        function InfoC(){
            infoTab.style.display = "none";
            videoTab.style.display = "block";
            btnInfo.style.color = " rgb(174, 173, 173)";
            btnVideo.style.color = "#ff9600";
            btnReview.style.color = "rgb(174, 173, 173)";
            reviewTab.style.display = "none";

        }
        function VideoC(){
          
            infoTab.style.display = "block";
            videoTab.style.display = "none";
            btnVideo.style.color = " rgb(174, 173, 173)";
            btnInfo.style.color = "#ff9600";
            btnReview.style.color = "rgb(174, 173, 173)";
            reviewTab.style.display = "none";

        }
        function Review(){
           reviewTab.style.display = "block";
           infoTab.style.display = "none";
           videoTab.style.display = "none";
           btnInfo.style.color = "rgb(174, 173, 173)";
           btnVideo.style.color = "rgb(174, 173, 173)";
           btnReview.style.color = "#ff9600";

        }

    </script>

</body>
</html>