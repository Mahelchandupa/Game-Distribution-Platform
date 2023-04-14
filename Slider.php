<?php
    session_start();

    include ('connect_db.php');
    include ('functions.php');

 /*   $user_data = check_login($con);*/

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e0374b34cb.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Montserrat:wght@300&family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Montserrat:wght@300&family=Poppins&display=swap" rel="stylesheet">
    <!---Swipper css link-->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <style>
            
      

        body{
          /*  background-color: #1b182b;*/
           
        }
        ::-webkit-scrollbar{
            width: 4px;
        }
        ::-webkit-scrollbar-thumb{
            background-color: #eee;
        }
/*-------------- */
      
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
            grid-template-columns: 1fr 1fr;
    
            grid-template-areas: 
               "video video"
               "latest-news latest-news"
               "latest-post sidbar"
               "latest-picture sidbar"
               "best-seller sidbar"   
            ;
            grid-gap: 25px;
        }
        #video{
            grid-area: video;
        /*    background-color: chartreuse;*/
            padding: 10px 15px;
            margin-bottom: 30px;
        }
        #latest-news{
            grid-area: latest-news;
        /*    background-color: cadetblue;*/
            padding: 10px 15px;
            margin-bottom: 30px;
        }
        #latest-post{
            grid-area: latest-post;
         /*   background-color: burlywood;*/
        }
        #sidbar{
            grid-area: sidbar;
          /*  background-color: blanchedalmond;*/
        }
        #latest-picture{
            grid-area: latest-picture;
        /*    background-color: aquamarine;*/
        }
        #best-seller{
        /*    background-color: aqua;*/
            grid-area: best-seller;
            margin-bottom: 30px;

        }
        /* -------------------------------------- latest video ---------------------- */
        .latest-platform{
            margin-top: 30px;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-gap: 25px;
        }
        .latest-platform h4{
            padding-left: 10px;
            font-size: 15px;
            color: #fff;
            font-family:  sans-serif;
        }
        .latest-platform .pc{
           margin: 15px 0;
           border-radius: 15px;
           padding: 10px 0;
           display: flex;   
           align-items: center;
           justify-content: center;
           background-color: #232930;
        }
        /* -------------------------------------------------------------------------------- */
        .news{
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-areas: 
               "news-grid-1 news-grid-1"
               "news-grid-2 news-grid-2"
            ;
            grid-gap: 30px;
        }
        .news-grid-1{
            background-color:aqua;
            grid-area: news-grid-1;
        }
        .news-grid-2{
           /* background-color: antiquewhite;*/
            grid-area: news-grid-2;
        }

        .inside-news-grid{
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-areas: 
                   "news-list-1 news-list-2" 
            ;
        }
        .news-list-1{
            grid-area: news-list-1;
            background-color: #232930;
           
            padding-right: 0;
            height: 350px;
            overflow: hidden;
            overflow-y: scroll;
        
        }
        .news-list-1 .ss{
            display: flex;
            border-bottom: 1px solid rgb(77, 77, 77);
            transition: all .3s ease;
            padding: 10px;
        }
        .news-list-1 .ss:hover{
            background-color: #dd163b;
        }
        .news-list-1 .ss img{
           width: 100px;
           height: 85px;
           padding:  0 10px;
        }
        .news-list-1 .ss .abcd i{
            margin-right: 5px;
        }
        .news-list-1 .ss .abcd p{
            color: #7f8d92;
            font-family: sans-serif;
            font-size: 14px;
        }
        .news-list-1 .ss h5{
            font-size: 16px;
            color: #fff;
            font-family: sans-serif;
        }

        .news-list-2{
            background-color: #232930;
            border-left: 1px solid rgb(77, 77, 77);
            height: 350px;
            overflow: hidden;
            overflow-y: scroll;
        }
        .news-list-2 .news-img-hover{
            overflow: hidden;
        }
        .news-list-2 img{
            transition: transform .5s ease;
            height: 276px;
            width: 100%;
        }
        .news-list-2 img:hover{
            transform: scale(1.2);
        }

        .news-grid-2 .shsh{
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            grid-template-areas: 
              "contetn-1 contetn-2 contetn-3 contetn-4";
            grid-gap: 15px;
        }
        .news-grid-2 .shsh .abc{
            padding: 10px;
        }
        .news-grid-2 .shsh .abc a{
            background-color: #232930;
            border-radius: 5px;
            padding: 5px 15px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color: #e4e3e6;
            transition: all 0.3s ease;
            border: none;
            text-decoration: none;
            cursor: pointer;
        }
        .news-grid-2 .shsh .abc a:hover{
            background-color: #dd163b;
            color: #fff;
        }
        .news-grid-2 .shsh .abc h5{
            color: #fff;
        }
        .news-grid-2 .shsh .abc p{
            color: #7f8b92;
        }
        .news-grid-2 .shsh img{
            width: 100%;
            height: 180px;
        }

        #latest-post .post{
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-areas: 
               "post1 post2"
            ;
            grid-gap: 20px;
        }
        #latest-post .post img{
            width: 100%;
            height: 200px;
        }
       
        #latest-post .post .nameer{
            display: flex;
            padding: 10px;
            color: #7f8b92;
        }
        #latest-post .post .lg{
            background-color: #dd163b;
            color: #fff;
            padding: 5px 10px;
            border-radius: 50%;
            margin-right: 10px;
        }
        #latest-post .post  .para{
            
            color: #7f8b92;
        }
        .post1{
            grid-area: post1;
        }
        .post2{
            grid-area: post2;
        }
        #latest-post .post button{   
            background-color: #232930;
            border-radius: 5px;
            padding: 5px 15px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color: #e4e3e6;
            transition: all 0.3s ease;
            border: none;
        }
        #latest-post .post  button:hover{
            background-color: #dd163b;
            color: #fff;
        }

        #sidbar .latest-img{
            padding: 20px;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-gap: 15px;
        }
        #sidbar .latest-img img{
            width: 100%;
            height: 250px;
        }

        #latest-picture .social{
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        }
        #latest-picture .social .so{
            position: relative;
            background-color: #273747;
            border-left: 1px solid #7f8b92;
            height: 80px;
            width: 100%;
            transition: all 0.3s ease-in-out;
        }
        #latest-picture .social .so i{
            position: absolute;
            font-size: 20px;
            color: #eee;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        #latest-picture .social .so:hover{
            background-color: #dd163b;
        }

        /* slider */
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


        /*------------------------*/

        .new-content{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, auto));
            gap: 1.2rem;
            justify-content: center;
        }
        /*--------------------------*/


        /*------------------------media query-------------------*/
        @media screen and (max-width:1048px){
            /*------news--------*/
            .news-grid-2 .shsh{
            display: grid;
            grid-template-columns: 1fr 1fr ;
            grid-template-areas: 
              "contetn-1  contetn-2"
              " contetn-3  contetn-4";
            grid-gap: 15px;
        }
        /*--------------latest ppost-----------*/
        #latest-post .post{
            display: grid;
            grid-template-columns: 1fr;
            grid-template-areas: 
               "post1 post1"
               "post2 post2"
            ;
            grid-gap: 20px;
        }
        #latest-post .post img{
            height: 250px;
        }
        /*-------------latest images---------*/
        #sidbar .latest-img{
            padding: 0;
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 15px;
        }
        #sidbar .latest-img img{
            width: 100%;
            height: 250px;
        }
        /*-------slider---------*/
        .box{
           height: 300px;
        }
        }
        @media screen and (max-width:736px){
            .grid{
            display: grid;
            grid-template-columns: 1fr 1fr;
    
            grid-template-areas: 
               "video video"
               "latest-news latest-news"
               "latest-post latest-post"
               "sidbar sidbar"
               "latest-picture latest-picture"
               "best-seller best-seller"   
            ;
            grid-gap: 25px;
        }
        /*------latest-post---------*/
        #latest-post .post img{
            height: 300px;
        }
        /*----------sidbar--------*/
        #sidbar .latest-img img{
            width: 100%;
            height: 300px;
        }
        /*------------news-------*/
      
        .inside-news-grid{
            display: grid;
            grid-template-columns: 1fr;
            grid-template-areas: 
                   "news-list-1 news-list-1" 
                   "news-list-2 news-list-2" 

            ;
        }
        /*-------------------- latest-platfom    -----------*/
        .latest-platform{
            margin-top: 30px;
            display: grid;
            grid-template-columns: 1fr;
            grid-gap: 25px;
        }
        .latest-platform .pc{
           margin: 15px 0;
           border-radius: 15px;
           padding: 10px 20px;
           display: flex;   
           align-items: left;
           justify-content: left;
           background-color: #232930;
        }
        .latest-platform h4{
            padding-left: 35px;
            line-height: 20px;
            border-left: 1px solid #454748;
        }
        .latest-platform img{
            padding-right: 20px;
        }
        }
        @media screen and (max-width:536px){
           /*---------news----------*/
           /*------news--------*/
           .news-grid-2 .shsh{
            display: grid;
            grid-template-columns: 1fr ;
            grid-template-areas: 
              "contetn-1"
              "contetn-2"
              " contetn-3"
              "contetn-4";
            grid-gap: 15px;
        } 
        }
        @media screen and (max-width:437px){
            #sidbar .latest-img img{
            width: 100%;
            height: 250px;
        }
        }
    </style>
    <title>Player2Games | A utopia for gamers</title>
    <script>
     $(function(){
     $("#header-sec").load("header.php");
     $("#footer").load("footer.php");
     })
    </script>
        
</head>
<body style="background-color: rgb(23, 30, 34);">
  <!-- Header -->

  <div id="header-sec"></div>

  <!--search bar--->
  <div id="blur"></div>
  <div class="search-bar" id="searchBar">
        <div class="close-and-text">
            <h2>SEARCH</h2>
            <i class="fa fa-times"></i>    
        </div>
        <div class="search-field">
            <input type="text" placeholder="Type Something.................">
            <button type="submit">
                <i class="fa-sharp fa-solid fa-magnifying-glass" ></i>
            </button>
        </div>
</div>

  <!------------------------------------>

  <section>
     <div class="ccontainer">
             <!-- Content -->
   
             <div class="content-wrapper">
                <div class="content-desc">
                    <h1>PLAYER 2 GAMES</h1>
                    <!---                   <p>Welcome to Epic Games Store! Download and play PC Games of every genre. We have mods, DLC and Free Games too! Games for everyone.<p>
-->
                    <p style="">Welcome to Player2Games Store! Download and play PC Games of every genre. We have mods, DLC and Free Games too! Games for everyone..</p>
                </div>
                <div class="caracter"></div>
             </div>
   
       </div>
  </section>

  <div class="banner-bb">
  <div class="slide-right">
  <h5>GAME DISTRIBUTION PLATFORM <span style="margin-left: 70px;">FOLLOW US <span style="margin-left: 40px;" >
                    <a href="" style="padding-right:15px;"><i class="fa-brands fa-facebook text-light"></i></a>
                    <a href="" style="padding-right:15px;"><i class="fa-brands  fa-square-instagram text-light"></i></a>
                    <a href="" style="padding-right:15px;"><i class="fa-brands fa-twitter text-light"></i></a>
                    <a href="" style="padding-right:15px;"><i class="fa-brands fa-github text-light"></i></a></span></span></h5>
</div>
  </div>

  <!------>
  <div class="col-md-10 col-10 mx-auto">
    <div class="grid">
        <div  id="video">
            <h3 class="nk-decorated-h-2 mb-5 mt-lg-5 mt-mb-5 mt-sm-5" style="color: #fff;"><span><span class="text-main-1">LATEST</span> GAMES</span></h3>
            <div class="trending-content swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="box">
                            <img src="img/trending1.webp" alt="">
                            <div class="box-text">
                                <h2>Cyber Prank 2070</h2>
                                <h3>$23.67</h3>
                                <div class="rating">
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="swiper-slide">
                        <div class="box">
                            <img src="browse_images\Dying-Light-2-Stay-Human-Bloody-Ties-Buy-Cheap-Play-Cheap-Cover-Arts.jpg" alt="">
                            <div class="box-text">
                                <h2>Dying Light 2</h2>
                                <h3>$39.99</h3>
                                <div class="rating">
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="swiper-slide">
                        <div class="box">
                            <img src="img/trending3.jpg" alt="">
                            <div class="box-text">
                                <h2>Assassin's Creed Valhalla</h2>
                                <h3>$34.99</h3>
                                <div class="rating">
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="swiper-slide">
                        <div class="box">
                            <img src="img/trending2.jpg" alt="">
                            <div class="box-text">
                                <h2>Battle Field</h2>
                                <h3>$21.34</h3>
                                <div class="rating">
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="box">
                            <img src="img/trending7.png" alt="">
                            <div class="box-text">
                                <h2>Halo Infinite</h2>
                                <h3>$18.46</h3>
                                <div class="rating">
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="swiper-slide">
                        <div class="box">
                            <img src="img/trending5.png" alt="">
                            <div class="box-text">
                                <h2>Grand Theft Auto V</h2>
                                <h3>$31.14</h3>
                                <div class="rating">
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="box">
                            <img src="img/trending4.jpg" alt="">
                            <div class="box-text">
                                <h2>Ghost of Tsushima</h2>
                                <h3>$17.23</h3>
                                <div class="rating">
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                </div>
    
                            </div>
                        </div>
                    </div>
                  </div>
            </div>  
            <div class="latest-platform">
                <div class="pc">
                    <img src="img\icon-mouse.png" alt="">
                    <h4>PC <br>
                       <span  style="color: red;">VIEW GAMES</span> </h4>
                </div>
                <div class="pc">
                   <img src="img\icon-gamepad.png" alt="">
                   <h4>PS4<br>
                    <span  style="color: red; ">VIEW GAMES</span></h4>
                </div>
                <div class="pc">
                    <img src="img\icon-gamepad-2.png" alt="">
                    <h4>XBOX<br>
                        <span style="color: red;">VIEW GAMES</span></h4>
                </div>
            </div>  
        </div>     
        <div   id="latest-news">
            <h3 class="nk-decorated-h-2 mb-5" style="color: #fff;"><span><span class="text-main-1">LATEST</span> NEWS</span></h3>
            <div class="news">
                <div class="news-grid-1">
                    <div class="inside-news-grid">
                        <div class="news-list-1">
                            <div class="scrollbox">
                                
                                    <div class="ss">
                                        <img src="img/post-1-mid-square.jpg" alt="" class="small-news-img">
                                        <div class="abcd">
                                        <h5 class="small-h5">SMELL MAGIC IN THE AIR. OR MAYBE BARBECUE</h5><br>
                                        <p><i class="fa-solid fa-calendar-days"></i>Aug 27, 2022</p>
                                        </div>
                                    </div>
                                    <div class="ss">
                                        <img src="img/post-3-mid-square.jpg" alt="" class="small-news-img">
                                        <div class="abcd">
                                           <h5 class="small-h5">WE FOUND A WITCH! MAY WE BURN HER?</h5>
                                           <p><i class="fa-solid fa-calendar-days"></i>Aug 21, 2022</p>
                                        </div>
                                    </div>
                                    <div class="ss">
                                        <img src="img/post-5-mid-square.jpg" alt="" class="small-news-img">
                                        <div class="abcd">
                                          <h5 class="small-h5">HE MADE HIS PASSENGER CAPTAIN OF ONE</h5>
                                          <p><i class="fa-solid fa-calendar-days"></i>Aug 18, 2022</p>
                                        </div>
                                    </div>
                                    <div class="ss">
                                        <img src="img/post-7-mid-square.jpg" alt="" class="small-news-img">
                                        <div class="abcd">
                                          <h5 class="small-h5">SMELL MAGIC IN THE AIR. OR MAYBE BARBECUE</h5>
                                          <p><i class="fa-solid fa-calendar-days"></i>Aug 13, 2022</p>
                                        </div>
                                    </div>
                                    <div class="ss">
                                        <img src="img/post-2-mid-square.jpg" alt="" class="small-news-img">
                                        <div class="abcd">
                                          <h5 class="small-h5">GRAB YOUR SWORD AND FIGHT THE HORDE</h5>      
                                          <p><i class="fa-solid fa-calendar-days"></i>Aug 27, 2022</p>              
                                        </div>
                                    </div>
                                    <div class="ss">
                                        <img src="img/post-4-mid-square.jpg" alt="" class="small-news-img">
                                        <div class="abcd">
                                          <h5 class="small-h5">FOR GOOD, TOO THOUGH, IN CONSEQUENCE</h5>
                                          <p><i class="fa-solid fa-calendar-days"></i>Aug 12, 2022</p>
                                        </div>
                                    </div>
                                    <div class="ss">
                                        <img src="img/post-6-mid-square.jpg" alt="" class="small-news-img">
                                        <div class="abcd">
                                          <h5 class="small-h5">AT FIRST, FOR SOME TIME, I WAS NOT ABLE TO ANSWER</h5>
                                          <p><i class="fa-solid fa-calendar-days"></i>Aug 07, 2022</p>
                                        </div>
                                    </div>
                            
                            </div>
                        </div>
                        <div class="news-list-2">
                            <div class="news-img-hover">
                            <img src="img/post-1-mid-square.jpg" alt="" id="big-news-img">
                            </div>
                            <div class="data m-3">
                                <h5 class="text-danger" id="big-h5">SMELL MAGIC IN THE AIR. OR MAYBE BARBECUE</h5>
                                <p class="text-white">With what mingled joy and sorrow do I take up the pen to write to my dearest friend! Oh,
                                     what a change between to-day and yesterday! Now I am friendless and alone
                                     With what mingled joy and sorrow do I take up the pen to write to my dearest friend! Oh,
                                     what a change between to-day and yesterday! Now I am friendless and alone
                                     With what mingled joy and sorrow do I take up the pen to write to my dearest friend! Oh,
                                     what a change between to-day and yesterday! Now I am friendless and alone
                                     With what mingled joy and sorrow do I take up the pen to write to my dearest friend! Oh,
                                     what a change between to-day and yesterday! Now I am friendless and alone
                                     With what mingled joy and sorrow do I take up the pen to write to my dearest friend! Oh,
                                     what a change between to-day and yesterday! Now I am friendless and alone</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="news-grid-2">
                    <div class="shsh">
                       <div class="contetn-1">
                         <img src="img/post-3-mid-square.jpg" alt="">
                         <div class="abc">
                            <h5>HE MADE HIS PASSENGER CAPTAIN OF ONE</h5>
                         <p>Just then her head struck against the roof of the hall: 
                            in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>
                            <a href="index.php">READ MORE</a>
                         </div>
                       </div>
                       <div class="contetn-2">
                         <img src="img/post-6-mid-square.jpg" alt="">
                         <div class="abc">
                            <h5>AT FIRST, FOR SOME TIME, I WAS NOT ABLE TO ANSWER</h5>
                         <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>
                            <a href="index.php">READ MORE</a>

                         </div>
                       </div>
                       <div class="contetn-3">
                         <img src="img/post-8-mid-square.jpg" alt="">
                         <div class="abc">
                            <h5>AT LENGTH ONE OF THEM CALLED OUT IN A CLEAR</h5>
                         <p>TJust then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>
                            <a href="index.php">READ MORE</a>

                         </div>
                       </div>
                       <div class="contetn-4">
                         <img src="img/post-9-mid-square.jpg" alt="">
                         <div class="abc">
                            <h5>FOR GOOD, TOO THOUGH, IN CONSEQUENCE</h5>
                         <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>
                            <a href="index.php">READ MORE</a>
                         </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <div  id="latest-post">
            <h3 class="nk-decorated-h-2 mb-5" style="color: #fff;"><span><span class="text-main-1">LATEST</span> POST</span></h3>
            <div class="post">
                <div class="post1">
                    <img src="images\524556-godfall-game-art-thumbnail-1260x709.webp" alt="">
                    <div class="nameer">
                        <span class="lg">M</span>
                        <p>by Mahel chandupa</p>
                    </div>
                    <p class="para">Just then her head struck against the roof of the hall: 
                       in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>
                       <button>READ MORE</button>
                </div>
                <div class="post2">
                   <img src="images\AssasinsCrees.png" alt="">
                   <div class="nameer">
                       <span class="lg">M</span>
                       <p>by Mahel chandupa</p>
                   </div>
                   <p class="para">Just then her head struck against the roof of the hall: 
                      in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>
                      <button>READ MORE</button>
               </div>
            </div>
        </div>
        <div   id="sidbar">
            <div class="social-media mt-lg-3">
                <h3 class="nk-decorated-h-2 mb-5" style="color: #fff;"><span><span class="text-main-1">LATEST</span> IMAGES</span></h3>
                <div class="latest-img">
                    <img src="img/new8.jpg" alt="">
                    <img src="img/new1.jpg" alt="">
                    <img src="img/new2.jpg" alt="">
                    <img src="img/new3.jpg" alt="">
                    <img src="img/new4.jpg" alt="">
                    <img src="img/new5.png" alt="">
                    <img src="img/new6.png" alt="">
                    <img src="img/new7.png" alt="">
                    <img src="img/trending1.webp" alt="">
                    <img src="img/trending2.jpg" alt="">
                    <img src="img/trending3.jpg" alt="">

                </div>
            </div>
        </div>
        <div  id="latest-picture">
            <h3 class="nk-decorated-h-2 mb-5" style="color: #fff;"><span><span class="text-main-1">WE</span> ARE SOCIAL</span></h3>
            <div class="social">
                <div class="so">
                    <a href=""><i class="fa-brands fa-youtube"></i>
                    </a>
                </div>
                <div class="so">
                    <a href=""><i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
                <div class="so">
                    <a href=""><i class="fa-brands fa-square-facebook"></i>
                    </a>
                </div>
                <div class="so">
                    <a href=""><i class="fa-brands fa-github"></i>
                    </a>
                </div>
                <div class="so">
                    <a href="">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
        <div  id="best-seller">
            <h3 class="nk-decorated-h-2 mb-4 mt-5" style="color: #fff;"><span><span class="text-main-1">LATEST </span> VIDEO</span></h3>
            <div class="play-video-back p--lg-3 p-md-3 p-sm-0" style="background-color:#241f3e;">
                <iframe   width="100%" height="300px" src="https://www.youtube.com/embed/r72GP1PIZa0"  title="YouTube video player" 
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
   </div>

  <!------>

  <!----------->

  <section class="new-container mb-5 col-md-10 mx-auto col-10" id="new">
    <h3 class="nk-decorated-h-2 mb-5" style="color: #fff;"><span><span class="text-main-1">BEST</span> SELLER</span></h3>
    <div class="new-content">
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
  </section>

  <!----------->

 <!--
  <section>
     <div class="free-games">
    -<h2>BEST SELLER</h2>
     <div class="col-md-11 col-11 mx-auto mb-5">
     <h3 class="nk-decorated-h-2" style="color: #fff;"><span><span class="text-main-1">BEST</span> SELLER</span></h3>
     </div>
      <div class="box-container">
      <?php
       
    //   $query =" select * from browsetb order by rand() limit 8"; 
    //   $result = mysqli_query($con,$query);
     //  if(mysqli_num_rows($result) > 0){
     //   while($row = mysqli_fetch_array($result)){
      ?>
          <form action="singlepage.php" class="boxx" method="GET">
          <input type="hidden" name="product_id" value="<//?= $row['gameId']; ?>">
          <button type="submit" style="border:1px solid #fff;">
            <img class="imagee" src="<//?php echo $row['gameImage'];?>" alt="">
          </button>  
          <p class="namee"><//?php echo $row['gameName'];?></p>
          <p class="pricee"><span>$</span><//?php echo $row['gamePrice'];?></p>
       
          </form>
    <?php
   //     }
    //  }else{
      //  echo '<p class="empty">no products added yet!</p>';
     // }
      //?>
      </div>


     </div>
  </section>
-->
  <div id="footer"></div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  <script src="css/swiper-bundle.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <script>
        $(document).ready(function(){
            $('.ss').click(function(){
                var $smallImage = $(this).children('.small-news-img').attr('src');
                var $smallH5 = $(this).children('.abcd').text();
                $('#big-news-img').attr('src',$smallImage); 
                $('#big-h5').html($smallH5);   
            });
           });
          
    </script>

  <script>
        var swiper = new Swiper(".trending-content", {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        autoplay:{
            delay : 2500,
            disableOnInteraction : false,
        },
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 10,
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 15,
          },
          1068: {
            slidesPerView: 4,
            spaceBetween: 20,
          },
        },
      });

     </script>

</body>
</html>
