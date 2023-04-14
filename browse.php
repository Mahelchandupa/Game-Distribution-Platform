<?php
  error_reporting(0);
  session_start();
  include ('connect_db.php');

  $search = $_POST['search'];

  $results_per_page = 9;

  $sql = "SELECT * FROM browsetb";
  $result = mysqli_query($con, $sql);
  $number_of_results = mysqli_num_rows($result);
 /*
  while($row = mysqli_fetch_array($result)){
    echo $row['gameName']. ''. $row['gamePrice']. '<br>';
  }
*/
  $number_of_pages = ceil($number_of_results/ $results_per_page);

  if(!isset($_GET['page'])){
    $page = 1;
  }
  else{
    $page = $_GET['page'];
  }

  $this_page_first_result = ($page - 1)* $results_per_page;

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
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <script>
     $(function(){
     $("#header-sec").load("header.php");
     $("#footer").load("footer.php");
     })
    </script>
    <title>Browse-page</title>
    <style>
         body{
          background-color:  rgb(23, 30, 34);;
          font-family: sans-serif;
         }
        /*--------------------------Search box style-----------------------------------------
        .search-box{
            width: 100%;
            height: 45px;
            background-color: #1b182b;
            margin-bottom: 50px;
        }
        .search-box .search-bar{
            border: none;
            border-radius: 100vh 100vh;
            width: 300px;
            left: 50%;
            transform: translateX(-50%);
            position: absolute;
            background-color: rgb(51,51,51);
            margin: 15px 0;
        }
        input{
          width: 230px;
          height: 40px;
          border-radius: 100vh 0 150vh 100vh;
          border: none;
          outline: none;
          padding: 0 10px;
          background-color: rgb(37,37,38);
          color: white;
        }
        .search-bar i{
            font-size: 20px;
            padding: 5px 7px;
            color: green;
        }
        .search-bar button{
          border: none;
          background-color: rgb(51,51,51);
          outline: none;
          cursor: pointer;
        }

        --------------*/

              
h2 {
    font-family: "Montserrat", sans-serif;
    font-weight: 600;
    color: #fff;
    text-transform: uppercase;
    text-align: center;
}

.nk-decorated-h,
.nk-decorated-h-2 {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}

.nk-decorated-h > span,
.nk-decorated-h > a,
.nk-decorated-h-2 > span,
.nk-decorated-h-2 > a {
    display: block;
    -webkit-box-flex: 1;
        -ms-flex: auto;
            flex: auto;
    padding-right: 20px;
    padding-left: 20px;
}

.nk-decorated-h::after, .nk-decorated-h::before,
.nk-decorated-h-2::after,
.nk-decorated-h-2::before {
    content: "";
    display: block;
    -webkit-box-flex: 100;
        -ms-flex: 100;
            flex: 100;
    border-bottom: 4px solid;
    -webkit-transform: translateY(-10px);
        -ms-transform: translateY(-10px);
            transform: translateY(-10px);
}

.nk-decorated-h::before,
.nk-decorated-h-2::before {
    -webkit-box-flex: 20px;
        -ms-flex: 20px;
            flex: 20px;
    width: 20px;
    min-width: 20px;
}

.nk-decorated-h-2::after, .nk-decorated-h-2::before {
    border-bottom-color: #293139;
}
.text-main-1 {
    color: #dd163b !important;
}

.grid{
            display: grid;
            grid-template-columns: 0.8fr 2fr;
            grid-gap: 15px;
            grid-template-areas: 
               "category games"
            ;
        }
        .category{
            grid-area: category;
         /*   background-color: aquamarine;*/
            padding: 0 0;
        }
        .games{
            grid-area: games;
        }
        .category .cat{
            background-color: rgb(249, 185, 9);
            padding: 15px;
            margin: 10px 0;
            border-radius: 10px;
            color: #fff;
            transition: all 0.5s ease;
            cursor: pointer;
            width:100%;
        }
        .category .cat:hover{
            background-color: #000;
            border: 1px solid #fff;
        }
        
        .category .cat .cat-heading{
            display: flex;
        }
        .category .cat .cat-heading h5{
            margin: 0;
            top: -50%;
            transform: translateY(30%);
            padding-left: 20px;
        }
        .category .cat .cat-heading svg{
            fill: #fff;
        }
        .games .new-content{
            padding: 20px 30px;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 3rem;
        }
        .box{
           position: relative;
           width: 100%;
           height: 320px;
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

        @media  (max-width: 1243px) {
/*
            .grid{
            display: grid;
            grid-template-columns: 1fr;
            grid-gap: 15px;
            grid-template-areas: 
               "games"
               "category"
               
            ;
        }*/
            .games .new-content{
            padding: 0;
            display: grid;
            grid-template-columns: 1fr 1fr  1fr;
            gap: 1rem;
        }
        .box{
            height: 260px;
        }
        }
        @media (max-width: 991px){
            .games .new-content{
            padding: 20px 30px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }
        }
        @media (max-width: 717px) {
            .grid{
            display: grid;
            grid-template-columns: 1fr;
            grid-gap: 15px;
            grid-template-areas: 
               "games"
               "category"
               
            ;
        }
        .games .new-content{
            padding: 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }
        }
        @media (max-width: 553px){
            .games .new-content{
            padding: 0;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }
        @media (max-width: 360px){
            .games .new-content{
            padding: 0;
            display: grid;
            grid-template-columns: 1fr;
            gap: 1rem;
        }
        }
        }

        .next{
            
            background-color: red;
            padding: 8px 15px;
            border-radius: 10px;
            color: #fff;
            left: 40%;
            position: relative;
            transform: translateX(-50%);
            transition: 0.3s ease-in;
            
        }
        .next:hover{
           color: #000;
           background-color: #fff;
           transition: 0.3s ease-in;
        }
        @media (max-width:540px) {
            .next{
                top:10px;
                left:30%;
                padding: 5px;
                border-radius: 0px;
            }
        }
        a{
            text-decoration: none;
         
        }
        .disresultcount{
            margin-top: 90px;
            color: #fff;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            text-align: center;
            font-weight: 600;

        }
        .usesearch{
            text-align: center;
            color:#7f8b92;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-weight: 600;
            text-transform: uppercase;
        }

        /*--------------*/
        
    </style>
</head>
<body>

 <!-- Header -->

 <div id="header-sec"></div>

<?php
         if(isset($_POST['search-btn'])){
            $query =" select * from browsetb  where gameName LIKE '%$search%' or  gameDescription LIKE '%$search%' or Platform  LIKE '%$search%' "; 
            $result = mysqli_query($con,$query);
            $queryResult = mysqli_num_rows($result);
        if($queryResult > 0){
            echo '<h2 class="disresultcount">'.$queryResult. ' SEARCH RESULTS FOUND </h2>';
            echo '<h5 class="usesearch"> YOU SEARCHED FOR: "'.$search.'" </h5>';
        }
        else{
            echo '<h3 class="disresultcount"> There are no results matching your search! </h3>';
        }
      }
?>
  
<div class="col-md-10 mt-5 mb-5 col-10 mx-auto">
        <div class="grid" style="margin-top:90px;">
            <div class="category">
               <h3 class="nk-decorated-h-2 mb-5" style="color: #fff;"><span><span class="text-main-1">CATEGORIES</span></span></h3>
               <form action="" method="POST">
               <button type="submit" name="steam_btn" class="cat">
                    <div class="cat-heading">
                         <i aria-hidden="true" class="fab fa-steam" style="font-size: 45px;"></i>
                        <h5>STEAM</h5>
                   </div>
               </button>
               </form> 
               <form action="" method="POST">
                <button class="cat" name="ubisoft_btn">
                    <div class="cat-heading">
                        <svg xmlns="http://www.w3.org/2000/svg" width="45px" height="45px" viewBox="0 0 32 32">
                            <path d="M31.416 15.984c-0.348-16.391-22.145-22.505-30.541-7.14 0.376 0.276 0.88 0.635 
                            1.256 0.896-0.62 1.296-1.057 2.676-1.303 4.093-0.161 0.912-0.244 1.833-0.244 2.76 0 8.5 
                            6.911 15.407 15.421 15.407 8.516 0 15.411-6.896 15.411-15.407zM4.385 18.729c-0.203 1.667-0.073
                             2.183-0.073 2.385l-0.375 0.131c-0.14-0.272-0.489-1.24-0.651-2.543-0.407-4.957 2.979-9.421 8.14-10.265
                              4.724-0.692 9.251 2.245 10.303 6.349l-0.375 0.131c-0.115-0.115-0.303-0.448-1.027-1.172-5.708-5.709-14.672-3.095-15.943 
                              4.989zM19.057 21.505c-0.787 1.135-2.079 1.812-3.453 1.807-2.328 0.005-4.213-1.88-4.208-4.208 0.005-2.197 1.708-4.025 
                              3.901-4.187 1.359-0.057 2.629 0.676 3.224 1.864 0.651 1.301 0.411 2.88-0.604 3.927 0.389 0.276 0.765 0.537 1.14 0.797zM27.828 
                              21.667c-2.224 5.041-6.807 7.688-11.692 7.615-9.381-0.464-12.109-11.287-5.839-15.188l0.276 0.271c-0.104 0.147-0.48 0.439-1.057 
                              1.579-0.677 1.385-0.896 2.776-0.808 3.641 0.489 7.561 11.089 9.109 14.729 1.619 4.641-10.244-7.677-20.667-18.604-12.703l-0.245-0.245c2.876-4.509 
                              8.5-6.52 13.86-5.176 8.197 2.067 12.604 10.609 9.38 18.588z"></path></svg>
                        <h5>UBISOFT</h5>
                    </div>
               </button>
               </form>
               <form action="" method="POST">
                <button class="cat" name="epic_btn">
                    <div class="cat-heading">
                                <svg xmlns="http://www.w3.org/2000/svg" width="45px" height="45px" viewBox="0 0 32 32"><path d="M4.719 0c-1.833 0-2.505 0.677-2.505 2.505v22.083c0 0.209 0.011 0.401 0.027 0.579 0.047 0.401 0.047 0.792 0.421 1.229 0.036 0.052 0.412 0.328 0.412 0.328 0.203 0.099 0.343 0.172 0.572 0.265l11.115 4.656c0.573 0.261 0.819 0.371 1.235 0.355h0.005c0.421 0.016 0.667-0.093 1.24-0.355l11.109-4.656c0.235-0.093 0.369-0.167 0.577-0.265 0 0 0.376-0.287 0.412-0.328 0.375-0.437 0.375-0.828 0.421-1.229 0.016-0.177 0.027-0.369 0.027-0.573v-22.088c0-1.828-0.677-2.505-2.505-2.505zM22.527 4.145h0.905c1.511 0 2.251 0.735 2.251 2.267v2.505h-1.833v-2.407c0-0.489-0.224-0.713-0.699-0.713h-0.312c-0.489 0-0.713 0.224-0.713 0.713v7.749c0 0.489 0.224 0.713 0.713 0.713h0.349c0.468 0 0.692-0.224 0.692-0.713v-2.771h1.833v2.86c0 1.525-0.749 2.276-2.265 2.276h-0.921c-1.521 0-2.267-0.756-2.267-2.276v-7.923c0-1.525 0.745-2.281 2.267-2.281zM6.276 4.251h4.151v1.703h-2.287v3.468h2.204v1.699h-2.204v3.697h2.319v1.704h-4.183zM11.364 4.251h2.928c1.515 0 2.265 0.755 2.265 2.28v3.261c0 1.525-0.751 2.276-2.265 2.276h-1.057v4.453h-1.871zM17.401 4.251h1.864v12.271h-1.864zM13.229 5.901v4.52h0.771c0.469 0 0.693-0.228 0.693-0.719v-3.083c0-0.489-0.224-0.719-0.693-0.719zM8.088 19.437h0.276l0.063 0.011h0.1l0.052 0.016h0.052l0.047 0.015 0.052 0.011 0.041 0.011 0.093 0.021 0.053 0.015 0.036 0.011 0.041 0.016 0.052 0.016 0.036 0.015 0.053 0.021 0.047 0.021 0.041 0.025 0.047 0.021 0.036 0.025 0.053 0.027 0.041 0.025 0.041 0.021 0.041 0.031 0.043 0.027 0.036 0.031 0.125 0.095-0.032 0.041-0.036 0.036-0.032 0.037-0.036 0.041-0.025 0.036-0.032 0.037-0.036 0.036-0.032 0.041-0.025 0.036-0.037 0.043-0.031 0.036-0.036 0.041-0.032 0.037-0.025 0.041-0.037 0.036-0.031 0.043-0.036 0.036-0.032 0.036-0.036-0.025-0.041-0.037-0.043-0.025-0.077-0.052-0.047-0.027-0.043-0.025-0.047-0.027-0.036-0.021-0.041-0.020-0.084-0.032-0.052-0.009-0.041-0.011-0.047-0.011-0.053-0.011-0.052-0.005h-0.052l-0.061-0.011h-0.1l-0.052 0.005h-0.052l-0.052 0.016-0.041 0.011-0.047 0.016-0.047 0.009-0.043 0.021-0.052 0.021-0.072 0.052-0.043 0.025-0.036 0.032-0.036 0.025-0.037 0.032-0.025 0.036-0.043 0.036-0.052 0.073-0.025 0.041-0.021 0.047-0.025 0.037-0.027 0.047-0.016 0.047-0.020 0.041-0.016 0.052-0.005 0.052-0.015 0.048-0.011 0.052v0.052l-0.005 0.052v0.12l0.005 0.052v0.041l0.005 0.052 0.009 0.047 0.016 0.041 0.005 0.053 0.016 0.041 0.015 0.036 0.021 0.052 0.027 0.052 0.020 0.037 0.052 0.083 0.032 0.041 0.025 0.037 0.043 0.031 0.025 0.036 0.036 0.032 0.084 0.063 0.036 0.020 0.041 0.027 0.048 0.021 0.052 0.020 0.036 0.021 0.104 0.031 0.047 0.005 0.052 0.016 0.052 0.005h0.224l0.063-0.005h0.047l0.053-0.021 0.052-0.005 0.052-0.015 0.041-0.011 0.047-0.021 0.041-0.020 0.047-0.021 0.032-0.021 0.041-0.025v-0.464h-0.735v-0.744h1.661v1.667l-0.036 0.025-0.036 0.031-0.037 0.027-0.041 0.031-0.041 0.021-0.036 0.032-0.084 0.052-0.052 0.025-0.083 0.052-0.053 0.021-0.041 0.020-0.047 0.021-0.104 0.041-0.041 0.021-0.095 0.031-0.047 0.011-0.047 0.016-0.052 0.016-0.041 0.009-0.156 0.032-0.048 0.005-0.104 0.011-0.057 0.005-0.052 0.004-0.057 0.005h-0.26l-0.052-0.009h-0.052l-0.052-0.011h-0.047l-0.052-0.016-0.152-0.031-0.041-0.016-0.047-0.005-0.052-0.021-0.095-0.031-0.093-0.041-0.052-0.021-0.036-0.021-0.052-0.020-0.037-0.032-0.052-0.020-0.031-0.027-0.041-0.025-0.084-0.063-0.041-0.027-0.032-0.031-0.041-0.032-0.068-0.067-0.036-0.032-0.031-0.036-0.037-0.037-0.025-0.041-0.032-0.031-0.025-0.043-0.032-0.041-0.025-0.036-0.027-0.041-0.025-0.048-0.021-0.041-0.021-0.047-0.020-0.041-0.041-0.095-0.016-0.036-0.021-0.047-0.011-0.047-0.009-0.041-0.011-0.052-0.016-0.048-0.011-0.052-0.005-0.041-0.009-0.052-0.011-0.093-0.011-0.104v-0.276l0.011-0.053v-0.052l0.016-0.052v-0.052l0.015-0.047 0.016-0.052 0.021-0.093 0.015-0.052 0.016-0.047 0.063-0.141 0.020-0.041 0.021-0.047 0.027-0.048 0.020-0.041 0.027-0.036 0.052-0.084 0.031-0.041 0.032-0.036 0.025-0.041 0.068-0.068 0.031-0.037 0.037-0.036 0.031-0.036 0.043-0.032 0.072-0.063 0.041-0.031 0.043-0.027 0.036-0.031 0.041-0.027 0.043-0.020 0.047-0.027 0.052-0.025 0.036-0.027 0.052-0.020 0.047-0.021 0.047-0.025 0.043-0.011 0.052-0.016 0.041-0.021 0.047-0.009 0.047-0.016 0.052-0.011 0.043-0.016 0.052-0.011h0.052l0.047-0.015h0.052l0.052-0.011h0.047zM24.073 19.448h0.276l0.063 0.011h0.099l0.052 0.015h0.057l0.052 0.016 0.093 0.021 0.052 0.011 0.047 0.009 0.053 0.016 0.047 0.016 0.041 0.011 0.047 0.015 0.052 0.016 0.041 0.021 0.052 0.020 0.048 0.021 0.047 0.027 0.036 0.020 0.047 0.027 0.047 0.020 0.043 0.027 0.047 0.031 0.036 0.027 0.084 0.063 0.041 0.025-0.032 0.041-0.025 0.043-0.031 0.036-0.032 0.041-0.025 0.047-0.027 0.043-0.031 0.036-0.032 0.041-0.025 0.043-0.032 0.041-0.025 0.036-0.032 0.041-0.025 0.048-0.032 0.041-0.031 0.036-0.032 0.041-0.025 0.043-0.041-0.032-0.048-0.025-0.036-0.027-0.041-0.025-0.047-0.021-0.043-0.027-0.047-0.020-0.036-0.021-0.052-0.020-0.037-0.021-0.041-0.016-0.093-0.031-0.104-0.032-0.156-0.031-0.052-0.005-0.095-0.011h-0.109l-0.057 0.011-0.052 0.011-0.047 0.011-0.041 0.020-0.037 0.021-0.041 0.036-0.031 0.047-0.021 0.048v0.124l0.027 0.057 0.020 0.032 0.032 0.031 0.052 0.027 0.041 0.025 0.047 0.021 0.052 0.020 0.068 0.016 0.036 0.016 0.043 0.011 0.052 0.011 0.041 0.015 0.047 0.011 0.057
                         0.016 0.052 0.016 0.057 0.015 0.057 0.011 0.047 0.016 0.057 0.015 0.052 0.011 0.047 0.011 0.157
                          0.047 0.041 0.016 0.052 0.016 0.047 0.020 0.052 0.027 0.104 0.041 0.047 0.027 0.084 0.052 0.077
                           0.057 0.048 0.031 0.036 0.036 0.036 0.043 0.037 0.036 0.025 0.036 0.037 0.052 0.025 0.037 0.021
                            0.052 0.020 0.031 0.016 0.052 0.016 0.043 0.011 0.047 0.020 0.104 0.005 0.052 0.005 0.047v0.125l-0.005 
                            0.057-0.011 0.104-0.011 0.052-0.015 0.047-0.011 0.052-0.016 0.052-0.015 0.047-0.021 0.037-0.021 0.047-0.025 
                            0.041-0.032 0.037-0.052 0.083-0.063 0.073-0.036 0.025-0.041 0.037-0.032 0.031-0.041 0.031-0.041 0.021-0.041
                             0.032-0.048 0.025-0.093 0.047-0.052 0.021-0.047 0.020-0.052 0.016-0.047 0.016-0.043 0.011-0.104 0.020-0.036 
                             0.011-0.052 0.011h-0.052l-0.047 0.011h-0.052l-0.052 0.011h-0.371l-0.156-0.016-0.052-0.011-0.047-0.005-0.104-0.020-0.057-0.011-0.047-0.011-0.052-0.016-0.053-0.011-0.047-0.015-0.052-0.016-0.052-0.021-0.041-0.015-0.052-0.016-0.052-0.021-0.037-0.020-0.052-0.016-0.041-0.027-0.052-0.020-0.041-0.027-0.037-0.025-0.052-0.027-0.036-0.020-0.041-0.032-0.041-0.025-0.043-0.032-0.036-0.031-0.041-0.032-0.037-0.025-0.041-0.037
                              0.032-0.041 0.036-0.036 0.031-0.037 0.037-0.041 0.025-0.036 0.032-0.041 0.036-0.037 0.031-0.036 0.037-0.041 0.025-0.037
                               0.037-0.036 0.031-0.041 0.032-0.037 0.036-0.041 0.025-0.036 0.037-0.037 0.036-0.041 0.036 0.032 0.048 0.031 0.036 0.031 0.052 
                               0.027 0.036 0.027 0.047 0.031 0.043 0.027 0.047 0.020 0.036 0.027 0.047 0.015 0.052 0.021 0.043 0.021 0.047 0.015 0.041 0.021
                                0.052 0.016 0.047 0.015 0.052 0.016 0.052 0.005 0.048 0.016 0.052 0.005h0.057l0.047 0.015h0.281l0.047-0.009 0.052-0.011 0.036-0.005
                                 0.043-0.016 0.036-0.020 0.047-0.032 0.027-0.036 0.020-0.041 0.016-0.048v-0.12l-0.021-0.047-0.025-0.041-0.032-0.031-0.047-0.032-0.036-0.015-0.047-0.021-0.052-0.021-0.057-0.025-0.037-0.011-0.041-0.011-0.052-0.016-0.036-0.009-0.052-0.016-0.052-0.005-0.053-0.021-0.052-0.005-0.057-0.015-0.047-0.011-0.052-0.016-0.052-0.011-0.052-0.015-0.047-0.016-0.052-0.011-0.041-0.016-0.095-0.031-0.052-0.021-0.052-0.015-0.104-0.043-0.047-0.025-0.052-0.027-0.036-0.025-0.048-0.027-0.036-0.025-0.047-0.027-0.068-0.068-0.036-0.031-0.063-0.073-0.027-0.036-0.020-0.036-0.032-0.048-0.015-0.036-0.048-0.125-0.009-0.052-0.011-0.047v-0.047l-0.011-0.052v-0.213l0.011-0.104 0.011-0.043 0.009-0.047 0.016-0.041 0.011-0.052 0.021-0.036 0.020-0.053 0.021-0.041 0.020-0.052 0.027-0.036 0.036-0.041 0.027-0.043 0.041-0.036 0.031-0.036 0.032-0.043 0.047-0.036 0.032-0.027 0.041-0.031 0.083-0.052 0.047-0.027 0.095-0.047 0.041-0.015 0.047-0.016 0.052-0.021 0.052-0.015 0.037-0.011 0.047-0.011 0.041-0.011 0.047-0.011 0.052-0.011 0.104-0.009 0.048-0.005zM11.755 19.484h0.943l0.043 0.095 0.020 0.041 0.016 0.052 0.021 0.047 0.015 0.041 0.027 0.047 0.031 0.095 0.027 0.047 0.041 0.093 0.011 0.041 0.083 0.188 0.016 0.047 0.021 0.043 0.025 0.047 0.011 0.047 0.027 0.052 0.009 0.047 0.048 0.093 0.020 0.037 0.021 0.052 0.016 0.052 0.015 0.036 0.027 0.052 0.016 0.043 0.020 0.052 0.016 0.036 0.021 0.052 0.047 0.093 0.015 0.047 0.011 0.048 0.021 0.047 0.025 0.041 0.021 0.052 0.021 0.047 0.015 0.041 0.043 0.095 0.015 0.047 0.021 0.047 0.016 0.047 0.020 0.041 0.027 0.048 0.020 0.047 0.021 0.041 0.011 0.052 0.041 0.093 0.021 0.043 0.015 0.047 0.043 0.093 0.025 0.052 0.011 0.041 0.027 0.053 0.009 0.036 0.021 0.052 0.027 0.052 0.020 0.036 0.016 0.052 0.021 0.043 0.015 0.052 0.027 0.036 0.031 0.104 0.021 0.037 0.020 0.052 0.027 0.041 0.021 0.052 0.009 0.047 0.016 0.041 0.021 0.047 0.025 0.043h-1.041l-0.025-0.043-0.016-0.047-0.021-0.047-0.020-0.052-0.011-0.041-0.043-0.093-0.015-0.043-0.041-0.093-0.016-0.041-0.021-0.052-0.031-0.095-0.021-0.041h-1.448l-0.020 0.047-0.016 0.043-0.021 0.052-0.020 0.047-0.011 0.041-0.021 0.052-0.020 0.041-0.016 0.047-0.021 0.043-0.020 0.052-0.016 0.036-0.021 0.052-0.015 0.052-0.021 0.037-0.016 0.052h-1.031l0.015-0.048 0.043-0.093 0.015-0.052 0.016-0.041 0.027-0.047 0.020-0.047 0.021-0.043 0.011-0.047 0.020-0.052 0.027-0.041 0.020-0.047 0.032-0.095 0.047-0.093 0.016-0.047 0.020-0.041 0.016-0.048 0.063-0.14 0.021-0.052 0.015-0.041 0.016-0.047 0.027-0.043 0.020-0.052 0.016-0.047 0.016-0.041 0.020-0.052 0.027-0.037 0.016-0.052 0.020-0.041 0.016-0.047 0.021-0.052 0.025-0.041 0.016-0.052 0.020-0.037 0.016-0.052 0.021-0.052 0.020-0.036 0.021-0.052 0.016-0.043 0.020-0.052 0.016-0.036 0.027-0.052 0.020-0.052 0.021-0.041 0.011-0.047 0.020-0.048 0.027-0.047 0.020-0.041 0.011-0.052 0.021-0.047 0.021-0.043 0.041-0.093 0.015-0.041 0.043-0.104 0.020-0.037 0.021-0.052 0.016-0.041 0.015-0.052 0.021-0.047 0.027-0.041 0.020-0.052 0.016-0.037 0.016-0.052 0.020-0.041 0.027-0.047 0.016-0.052 0.015-0.043 0.021-0.052 0.020-0.036 0.027-0.052 0.016-0.052 0.015-0.036 0.021-0.052zM14.683 19.511h1.031l0.032 0.041 0.052 0.084 0.025 0.047 0.027 0.036 0.025 0.047 0.027 0.041 0.025 0.048 0.027 0.041 0.025 0.036 0.027 0.047 0.025 0.043 0.037 0.041 0.015 0.041 0.032 0.047 0.025 0.043 0.032 0.036 0.021 0.047 0.025 0.041 0.032 0.043 0.015 0.041 0.037 0.047 0.077 0.125 0.021 0.041 0.031 0.041 0.027 0.041 0.025 0.048 0.079 0.124 0.025 0.048 0.027 0.041 0.031-0.041 0.021-0.053 0.031-0.036 0.027-0.047 0.025-0.036 0.021-0.052 0.036-0.037 0.027-0.047 0.021-0.036 0.025-0.043 0.032-0.047 0.025-0.036 0.027-0.052 0.025-0.036 0.032-0.048 0.020-0.036 0.027-0.052 0.025-0.031 0.027-0.043 0.031-0.052 0.027-0.036 0.020-0.047 0.032-0.037 0.025-0.052 0.027-0.031 0.031-0.041 0.027-0.052 0.025-0.037 0.027-0.047 0.025-0.036 0.027-0.052 0.031-0.037 0.021-0.047 0.027-0.036h1.047v3.719h-0.98v-2.188l-0.025 0.037-0.032 0.052-0.025 0.031-0.032 0.041-0.020 0.052-0.032 0.037-0.025 0.036-0.032 0.052-0.052 0.073-0.031 0.041-0.027 0.052-0.031 0.037-0.027 0.036-0.020 0.052-0.032 0.036-0.025 0.037-0.032 0.052-0.025 0.036-0.032 0.041-0.025 0.047-0.021 0.037-0.031 0.041-0.027 0.047-0.031 0.036-0.032 0.043-0.020 0.041-0.027 0.047-0.031 0.037-0.032 0.041-0.020 0.052-0.037 0.031-0.020 0.041-0.032 0.053-0.025 0.036h-0.021l-0.031-0.047-0.027-0.043-0.025-0.047-0.027-0.036-0.031-0.047-0.027-0.041-0.031-0.043-0.027-0.041-0.025-0.047-0.027-0.036-0.036-0.048-0.021-0.041-0.031-0.047-0.027-0.036-0.025-0.047-0.032-0.043-0.025-0.052-0.032-0.036-0.025-0.047-0.027-0.043-0.025-0.047-0.032-0.036-0.025-0.047-0.032-0.041-0.020-0.043-0.032-0.041-0.025-0.047-0.032-0.036-0.025-0.048-0.032-0.041-0.020-0.047-0.037-0.036-0.020-0.048-0.032-0.041v2.193h-0.963v-3.683zM19.307 19.511h2.933v0.839h-1.959v0.599h1.76v0.792h-1.76v0.635h1.984v0.844h-2.953v-3.677zM12.213 20.651l-0.016 0.047-0.015 0.043-0.021 0.052-0.021 0.047-0.015 0.047-0.043 0.093-0.020 0.052-0.016 0.043-0.016 0.052-0.020 0.036-0.016 0.052-0.021 0.052-0.020 0.037-0.016 0.052-0.020 0.041-0.016 0.052-0.027 0.047-0.011 0.041-0.020 0.052-0.021 0.048-0.016 0.041-0.020 0.052h0.859l-0.020-0.052-0.016-0.047-0.041-0.095-0.016-0.047-0.021-0.041-0.015-0.052-0.021-0.047-0.016-0.047-0.020-0.043-0.016-0.047-0.021-0.052-0.015-0.041-0.043-0.093-0.009-0.048-0.021-0.047-0.021-0.052-0.015-0.036-0.043-0.104-0.015-0.047zM10.683 27.615h10.681l-5.452 1.797z"></path></svg>
                                <h5>EPIC</h5>
                                </div>
               </button>
               </form>
               <form action="" method="POST">
                <button class="cat" name="rockstar_btn">
                    <div class="cat-heading" >
                    <img decoding="async" width="45px" height="45px" alt="" data-srcset="https://buycheapplaycheap.com/wp-content/uploads/2021/08/rockstar_games_icon_146104-1024x1024.png 1024w, https://buycheapplaycheap.com/wp-content/uploads/2021/08/rockstar_games_icon_146104-300x300.png 300w, https://buycheapplaycheap.com/wp-content/uploads/2021/08/rockstar_games_icon_146104-150x150.png 150w, https://buycheapplaycheap.com/wp-content/uploads/2021/08/rockstar_games_icon_146104-768x768.png 768w, https://buycheapplaycheap.com/wp-content/uploads/2021/08/rockstar_games_icon_146104-1536x1536.png 1536w, https://buycheapplaycheap.com/wp-content/uploads/2021/08/rockstar_games_icon_146104-2048x2048.png 2048w, https://buycheapplaycheap.com/wp-content/uploads/2021/08/rockstar_games_icon_146104-600x600.png 600w, https://buycheapplaycheap.com/wp-content/uploads/2021/08/rockstar_games_icon_146104-100x100.png 100w" data-src="https://buycheapplaycheap.com/wp-content/uploads/2021/08/rockstar_games_icon_146104-1024x1024.png" data-sizes="(max-width: 1024px) 100vw, 1024px" class="attachment-large size-large lazyloaded" src="https://buycheapplaycheap.com/wp-content/uploads/2021/08/rockstar_games_icon_146104-1024x1024.png" sizes="(max-width: 1024px) 100vw, 1024px" srcset="https://buycheapplaycheap.com/wp-content/uploads/2021/08/rockstar_games_icon_146104-1024x1024.png 1024w, https://buycheapplaycheap.com/wp-content/uploads/2021/08/rockstar_games_icon_146104-300x300.png 300w, https://buycheapplaycheap.com/wp-content/uploads/2021/08/rockstar_games_icon_146104-150x150.png 150w, https://buycheapplaycheap.com/wp-content/uploads/2021/08/rockstar_games_icon_146104-768x768.png 768w, https://buycheapplaycheap.com/wp-content/uploads/2021/08/rockstar_games_icon_146104-1536x1536.png 1536w, https://buycheapplaycheap.com/wp-content/uploads/2021/08/rockstar_games_icon_146104-2048x2048.png 2048w, https://buycheapplaycheap.com/wp-content/uploads/2021/08/rockstar_games_icon_146104-600x600.png 600w, https://buycheapplaycheap.com/wp-content/uploads/2021/08/rockstar_games_icon_146104-100x100.png 100w">
                    <h5>ROCKSTAR</h5>
                    </div>
               </button>
                </form>
                <form action="" method="POST">
                <button class="cat" name="origin_btn">
                    <div class="cat-heading">
                        <svg xmlns="http://www.w3.org/2000/svg" width="45px" height="45px" viewBox="0 0 32 32"><path d="M16.786 4.146c1.583 0.094 3.135 0.51 4.552 1.224 1.375 0.688 2.599 1.635 3.609 2.792 1 1.156 1.76 2.474 2.286 3.953 0.521 1.479 0.729 3.036 0.62 4.672-0.047 0.844-0.182 1.667-0.406 2.464-0.224 0.781-0.526 1.542-0.901 2.271-0.583 1.13-1.24 2.198-1.958 3.214-0.719 1.010-1.5 1.953-2.349 2.823-0.854 0.87-1.755 1.672-2.714 2.406-0.958 0.724-1.958 1.38-3.005 1.969l-0.047 0.036c-0.047 0.021-0.094 0.036-0.146 0.031-0.083-0.021-0.156-0.068-0.214-0.13-0.052-0.068-0.083-0.151-0.083-0.229 0-0.042 0.005-0.078 0.016-0.115 0.016-0.031 0.031-0.057 0.052-0.083 0.37-0.526 0.672-1.073 0.917-1.646 0.24-0.578 0.401-1.182 0.49-1.813 0-0.042-0.021-0.083-0.052-0.115-0.026-0.031-0.073-0.052-0.115-0.052-0.349 0.047-0.703 0.073-1.057 0.083-0.354 0.016-0.708 0-1.063-0.047-1.583-0.094-3.135-0.516-4.557-1.224-1.375-0.688-2.599-1.635-3.609-2.792-1.005-1.161-1.781-2.5-2.286-3.953-0.521-1.5-0.734-3.083-0.62-4.672 0.047-0.844 0.182-1.667 0.411-2.464s0.526-1.536 0.901-2.24c0.583-1.151 1.24-2.234 1.958-3.245s1.5-1.953 2.344-2.828c0.854-0.865 1.755-1.667 2.714-2.396s1.958-1.385 3.005-1.974l0.047-0.031c0.047-0.026 0.094-0.036 0.146-0.036 0.089 0.021 0.161 0.068 0.214 0.13 0.057 0.068 0.083 0.141 0.083 0.234 0 0.036-0.005 0.073-0.016 0.109-0.010 0.031-0.031 0.057-0.052 0.083-0.365 0.516-0.672 1.068-0.917 1.651-0.24 0.578-0.396 1.177-0.484 1.807 0 0.047 0.016 0.083 0.047 0.115s0.073 0.052 0.115 0.052c0.349-0.047 0.703-0.073 1.057-0.083 0.365-0.010 0.714 0.005 1.068 0.047zM15.708 20.635c1.229 0.104 2.448-0.307 3.359-1.141 0.964-0.849 1.479-1.917 1.568-3.198 0.104-1.24-0.307-2.464-1.141-3.38-0.802-0.943-1.964-1.51-3.198-1.552-1.234-0.104-2.458 0.313-3.38 1.141-0.943 0.802-1.51 1.964-1.552 3.203-0.104 1.234 0.307 2.453 1.13 3.38 0.833 0.964 1.906 1.484 3.214 1.547z"></path></svg>
                        <h5>ORIGIN</h5>
                    </div>
               </button>
               </form>
               <form action="" method="POST">
                <button class="cat" name="micrsoft_btn">
                    <div class="cat-heading">
                        <i aria-hidden="true" class="fab fa-microsoft" style="font-size: 45px;"></i>
                        <h5>MICRSOFT</h5>
                    </div>
               </button>
               </form>
               <form action="" method="POST">
                <button class="cat" name="xbox_btn">
                   <div class="cat-heading">
                    <i aria-hidden="true" class="fab fa-xbox" style="font-size: 45px;"></i>
                    <h5>XBOX</h5>
                   </div>
               </button>
               </form>
               <form action="" method="POST">
                <button class="cat" name="other_btn">
                    <div class="cat-heading">
                        <i aria-hidden="true" class="fas fa-bars" style="font-size: 45px;"></i>
                        <h5>OTHER</h5>
                    </div>
               </button>
               </from>
            </div>
            <div class="games">
                <div class="new-content">
             <?php
              /* where gameName LIKE '%$search%' */

       if(isset($_POST['search-btn'])){
        $query =" select * from browsetb  where gameName LIKE '%$search%' or  gameDescription LIKE '%$search%' or Platform  LIKE '%$search%' "; 
        $result = mysqli_query($con,$query);
        $queryResult = mysqli_num_rows($result);
       }
       elseif(isset($_POST['steam_btn'])){
        $query =" SELECT * FROM `browsetb` WHERE Platform = 'Steam';"; 
        $result = mysqli_query($con,$query);
        $queryResult = mysqli_num_rows($result);
       }
       elseif(isset($_POST['ubisoft_btn'])){
        $query =" SELECT * FROM `browsetb` WHERE Platform = 'Ubisoft';"; 
        $result = mysqli_query($con,$query);
        $queryResult = mysqli_num_rows($result);
       }
       elseif(isset($_POST['epic_btn'])){
        $query =" SELECT * FROM `browsetb` WHERE Platform = 'Epic';"; 
        $result = mysqli_query($con,$query);
        $queryResult = mysqli_num_rows($result);
       }
       elseif(isset($_POST['rockstar_btn'])){
        $query =" SELECT * FROM `browsetb` WHERE Platform = 'Rockstar';"; 
        $result = mysqli_query($con,$query);
        $queryResult = mysqli_num_rows($result);
       }
       elseif(isset($_POST['origin_btn'])){
        $query =" SELECT * FROM `browsetb` WHERE Platform = 'Origin';"; 
        $result = mysqli_query($con,$query);
        $queryResult = mysqli_num_rows($result);
       }
       elseif(isset($_POST['microsoft_btn'])){
        $query =" SELECT * FROM `browsetb` WHERE Platform = 'Microsoft';"; 
        $result = mysqli_query($con,$query);
        $queryResult = mysqli_num_rows($result);
       }
       elseif(isset($_POST['xbox_btn'])){
        $query =" SELECT * FROM `browsetb` WHERE Platform = 'Xbox';"; 
        $result = mysqli_query($con,$query);
        $queryResult = mysqli_num_rows($result);
       }
       elseif(isset($_POST['other_btn'])){
        $query =" SELECT * FROM `browsetb` WHERE Platform = 'Other';"; 
        $result = mysqli_query($con,$query);
        $queryResult = mysqli_num_rows($result);
       }
       else{
        $query =" select * from browsetb limit $this_page_first_result ,$results_per_page "; 
        $result = mysqli_query($con,$query);
        $queryResult = mysqli_num_rows($result);
       }
      
       if($queryResult > 0){
        while($row = mysqli_fetch_array($result)){
      ?>
                
                <div class="box">
  
            <a href="singlepage.php?product_id=<?= $row['gameId']; ?>">
            <img  src="browse_images\<?php echo $row['gameImage'] ?>" alt="">
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
      }else{
      //  echo '<p class="empty">no products added yet!</p>';
      }
      ?>

     </div>
     
     <?php
      
      for($i = 1; $i<= $number_of_pages; $i++){
        echo '<a class="next" href = "browse.php?page=' .$i. '">' . $i . '</a> ';
    }
       ?>
        </div>
        
    </div>
</div>


<!----------------------------------------------------------->

      <!---footer section--->
      <div id="footer"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    
   

</body>
</html>