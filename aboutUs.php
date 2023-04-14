<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Lobster&family=Montserrat:wght@300&family=Poppins:wght@100;300;400;500;600;700;800;900&family=Raleway:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e0374b34cb.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script>
      $(function(){
     $("#header-sec").load("header.php");
     $("#footer").load("footer.php");
     })
    </script>
    <style>
       body{
         background-color: black;
       }
       .about-us{
         z-index: -99;
          background-image:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)),url(images/3.jpg);
          background-position: center;
          background-size: cover;
          width: 100%;
          min-height: 65vh;
          position: relative;
       }
       .head-text{
         position: absolute;
         top: 40%;
         left: 10%;
       }
       .head-text h1{
          font-size: 90px;
          color: #fff;
          font-family: 'Poppins', sans-serif;
          margin:0;
        }
        .head-text p{
            color: #fff;
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            text-align: justify;
        }
        .head-text a{
            margin-top: 20px;
            text-decoration: none;
            padding: 10px 18px;
            color: #fff;
            background-color: red;
            font-family: 'Poppins', sans-serif;
            transition: .3s ease-in;
        }
        .head-text a:hover{
            background-color: green;
            transition: .3s ease-in;
        }
        .who-we{
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-areas:
                "who-text who-img";
        }
        .who-text{
            grid-area: who-text;
            color: #fff;
            padding: 45px 40px;
        }
        .who-text h3,p{
            font-family: 'Raleway', sans-serif;
        }
        .who-text h3{
            text-align: center;
            position: relative;
        }
        .who-text h3::after{
            content: "";
            position: absolute;
            background-color: red;
            bottom: -30%;
            left: 40%;
            width: 80px;
            height: 3px;
        }
        .who-text p{
            margin-top: 30px;
            line-height: 1.8;
            text-align: justify;
        }
        .who-img{
            grid-area: who-img;
            padding-left: 100px ;
        }
        .our-mission-vission{
            background-color: rgb(17, 17, 17);
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-areas:
                "m-v-image mission-vission ";
        }
        .m-v-image{
            grid-area: m-v-image;
        }
        .mission-vission{
            grid-area: mission-vission;
            padding: 70px 80px;
        }
        .mission-vission h4{
            text-align: center;
            color: orange;
            font-family: sans-serif;
            animation: myfirst 5s linear 2s infinite alternate;
        }
     
        .mission-vission .mission{
            margin-bottom: 60px;
        }
        .mission-vission h4{
            color: #fff;
            text-align: center;
        }
        .mission-vission p{
            color: #fff;
            text-align: center;
        }
        .our-members{
          background-image:url(images/review-bg-2.jpg);
          background-position: center;
          background-size: cover;
          width: 100%;
          min-height: 65vh;
        }
        .our-members .our-team{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }
        .our-members .our-team .user-card{
            width: 260px;
            height: 300px;
            padding: 30px 30px;
            margin: 20px;
            background: #f2f3f7;
            box-shadow: 0.6em 0.6em 1.2em #030b78,
                        -0.5em -0.5em 1em #000000;
            border-radius: 20px;
        }
        .user-card .user-content{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .user-card .user-content .imgBx{
            width: 120px;
            height: 120px;
            border-radius: 50%;
            position: relative;
            overflow: hidden;
            margin-bottom: 20px;
        }
        .user-card .user-content .imgBx img{
            top: 0;
            left: 0;
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .user-card .user-content .contentBx h4{
            color: #36187d;
            font-size: .9rem;
            font-weight: bold;
            text-align: center;
            letter-spacing: 1px;
            font-family: 'Poppins', sans-serif;
        }
        .user-card .user-content .contentBx h5{
            color: #6c758f;
            font-size: .8rem;
            font-weight: bold;
            text-align: center;
            letter-spacing: 1px;
            font-family: 'Poppins', sans-serif;
        }
        .user-card .user-content .contentBx .sci{
            margin-top: 10px;
        }
        .user-card .user-content .sci a{
            text-decoration: none;
            color: #6c758f;
            font-size: 25px;
            margin: 10px;
            transition: color 0.4s;
        }
        .user-card .user-content .sci a:hover{
            color: #0196e3;
        }
    </style>
</head>
<body class="bg-dark">
<!---- header --->
<div id="header-sec"></div>


<?php
      require("header.php");
    ?>
<div class="col-md-12">
    <div class="about-us">
        <div class="head-text">
            <h1>About Us</h1>
            <p>typographic experts from around the world of all skill <br> sets to choose and use type with purpose.</p>
            <a href="">Learn More</a>
        </div>
    </div>
<div class="who-we col-md-9 mt-5 mx-auto">
    <div class="who-text">
        <h3>Who We Are</h3>
        <p>As a heart-centered brand that cares about its global impact, Iya Foods emphasizes that key part of its brand in its mission statement. 
           Describing your brand values and what you stand for is one of the best ways to reach your audience.
           As a heart-centered brand that cares about its global impact, Iya Foods emphasizes that key part of its brand in its mission statement. 
           Describing your brand values and what you stand for is one of the best ways to reach your audience. 
        </p>
    </div>
    <div class="who-img">
        <img src="images/footer-top-bg.png" alt="">
    </div>
</div>
<div class="our-mission-vission mt-5 col-md-9 mx-auto">
    <div class="m-v-image">
        <img src="images/anime.png" alt="">
    </div>
    <div class="mission-vission">
      <div class="mission ">
           <h4>Mission</h4>
           <p>As a heart-centered brand that cares about its global impact,
             Iya Foods emphasizes that key part</p>
       </div>
       <div class="vission">
           <h4>Vission</h4>
           <p>As a heart-centered brand that cares about its global impact, 
            Iya Foods emphasizes that key part</p>
       </div>
    </div>
</div>
<div class="our-members mt-5">
     <h2 style="color: #fff; text-align: center; font-family: 'Poppins', sans-serif; padding: 20px 0;">Our Team</h2>
    <div class="our-team">
       <div class="user-card">
            <div class="user-content">
                <div class="imgBx">
                    <img src="authors/2.jpg" alt="">
                </div>
                <div class="contentBx">
                    <h4>Bhanuka Senevirathna</h4>
                    <h5>Director General</h5>
                </div>
                <div class="sci">
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-square-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="user-card">
            <div class="user-content">
                <div class="imgBx">
                    <img src="authors/user-1.jpg" alt="">
                </div>
                <div class="contentBx">
                    <h4>Mahel Chandupa</h4>
                    <h5>Developer</h5>
                </div>
                <div class="sci">
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-square-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="user-card">
            <div class="user-content">
                <div class="imgBx">
                    <img src="authors/7.jpg" alt="">
                </div>
                <div class="contentBx">
                    <h4>Nimeshika Gamage</h4>
                    <h5>Ui Designer</h5>
                </div>
                <div class="sci">
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-square-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>
</body>
</html>