<?php
    error_reporting(0);
    session_start();
    include ('connect_db.php');
    $username = $_SESSION['cusname'];

    
    $cart = $_SESSION['cart'];
    $count = count($cart);
?>

    <header class="header">
        <div class="container">
            <div class="header-main">
                <a href="Slider.php">
                <div class="logo">
                    <img src="images/logo4.png" alt="">
                </div>
                </a>
                <div class="open-nav-menu">
                    <span></span>
                </div>
                <div class="menu-overlay">

                </div>
                <nav class="nav-menu">
                    <div class="close-nav-menu">
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                    <ul class="menu">
                        <li class="menu-item"><a href="Slider.php">Home</a></li>
                        <li class="menu-item"><a href="browse.php">Browse</a></li>
                        <li class="menu-item"><a href="index.php">News</a></li>
                        <li class="menu-item"><a href="test.php">About Us</a></li>
                        <li class="menu-item menu-item-has-children"><a href="" data-toggle="sub-menu"> 
                        <?php
                            if(empty($username)){
                                echo "My Account";
                            }
                            else{
                             echo "Hello, " .$username;
                            }
                        ?>  <i class="plus"></i></a>
                          <ul class="sub-menu">
                            <li class="menu-item"><a href="user-login.php">Login</a></li>
                            <li class="menu-item"><a href="userwish-list.php">WishList</a></li>
                            <li class="menu-item"><a href="userOrders.php">Orders</a></li>
                            <li class="menu-item"><a href="logout.php">Logout</a></li>
                          </ul>
                        </li>
                    </ul>
                </nav>
                 <div class="icons">
                    <div class="search-boxxx">
                    <i class="fa-sharp fa-solid fa-magnifying-glass" style="color: #fff; cursor: pointer;" onclick="searchIcon()"></i>                  
                        <!--search bar--->
 <div id="blur"></div>
  <div class="search-bar" id="searchBar">
        <div class="close-and-text">
            <h2>SEARCH</h2>
            <i class="fa fa-times" aria-hidden="true" onclick="searchIcon()"></i>    
        </div>
        <div class="search-field">
        <form action="browse.php" method="POST">
            <input type="text" name="search"  required  placeholder="Type Something.................">
            <button  type="submit" name="search-btn">
                <i class="fa-sharp fa-solid fa-magnifying-glass" ></i>
            </button>
        </form>
        </div>
</div>
</div>
  <!------------------------------------>
                 
                     <div class="cart-box" onmouseover="myOverFunction()"  onmouseleave="myLeaveFunction()">
                        <a href=""><i class="fa-sharp fa-solid fa-cart-shopping" >
                        <div class="cart-count">
                            <p><?php echo $count ?></p>
                        </div>
                    </i></a>
                        <div class="drop-down-cart"  id="first">
                            <table width="260px" style="align-items: center; justify-content: center; border-spacing: 10px;">
                     
                         <?php
                         $total = 0;
                         foreach($cart as $key => $value){
                         /*  echo $key . "<br>";*/
        
                          $sql = "select * from browsetb where gameId = '$key'";
                          $result = mysqli_query($con,$sql);
        
                          $row = mysqli_fetch_assoc($result)
              
                             ?>
                            
                                <tbody>
                                    <tr style="border-top: 1px solid #6f6e6b;">
                                        <td>
                                            <form action="singlepage.php"  method="GET">
                                            <button type="submit" style="width:60px; height:76px; border: none;">
                                                <input type="hidden" name="product_id" value="<?= $row['gameId']; ?>">
                                                <img src="browse_images\<?php echo $row['gameImage'];?>" width="60px" height="76px" alt="">
                                            </button>
                                           </form>
                                        </td>
                                        <td><p style="color: #fff; text-align:center; padding-top: 5px; font-weight: 400; line-height: 1.6; font-size:12px; font-family:sans-serif;"><?php echo $row['gameName'];?></p><br><p style="color:#fff; font-size:14px;font-family:sans-serif; font-weight: 500;" align="center">$<?php echo $row['gamePrice'];?></p></td>
                                    </tr>
                                </tbody>
                            <?php
                     
                                $total = $total + $row['gamePrice'];
                   
                            }
                        ?>
                                <tbody>
                                    <tr style="border-top: 1px solid #eee;">
                                        <td style=" border-top: 1px solid black; border-collapse: collapse; padding: 15px;"><h5 style="color: #eee; text-align: center; font-size:17px; font-family:sans-serif; font-weight: 500; ">Total</h5></td>
                                        <td style=" border-top: 1px solid black; border-collapse: collapse; padding: 15px;"><h5 style="color: #eee; text-align: right; font-size:17px; font-family:sans-serif; font-weight: 500;">$<?php echo $total;?></h5></td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td colspan="2"><a href="addToCart.php"><button class="btn col-11 col-md-11 mx-auto mb-2 rounded-2 p-1"   style="background-color: rgb(143, 233, 18); color: #fff;">CART</button></a></td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td colspan="2"><a href="checkout.php?total=<?php echo $total ?>"><button class="btn col-11 col-md-11 mx-auto mb-2 rounded-2 p-1" style="background-color: rgb(221, 22, 59); color: #fff;">CHECKOUT</button></a></td>
                                    </tr>
                                </tbody>
                            </table>
                          </div>
                    
                     </div>
                                  
                </div>
            </div>
        </div>
    </header>

    <script>
        (() =>{
            
            const opneNavMenu = document.querySelector(".open-nav-menu"),
            closeNavMenu = document.querySelector(".close-nav-menu"),
            navMenu = document.querySelector(".nav-menu"),
            menuOverlay = document.querySelector(".menu-overlay"),
            mediaSize = 991;

            opneNavMenu.addEventListener("click", toggleNav);
            closeNavMenu.addEventListener("click", toggleNav);

            menuOverlay.addEventListener("click", toggleNav);

            function toggleNav(){
                navMenu.classList.toggle("open");
                menuOverlay.classList.toggle("active");
                document.body.classList.toggle("hidden-scrolling");
            } 
            function resizeFix(){
                if(navMenu.classList.contains("open")){
                    toggleNav();
                }
            }

            window.addEventListener("resize", function(){
                if(this.innerWidth > mediaSize){
                    resizeFix();
                }
            })

        })();
     
        const dropDowncart = document.getElementById('first');
        const serchBox = document.getElementById("inputbox");

    function myOverFunction(){
            
            dropDowncart.style.display = "block";     
    }
    function myLeaveFunction(){
        dropDowncart.style.display = "none";
    }
    </script>

<script>
                // search bar java script
   
    function searchIcon(){
       var blur = document.getElementById('blur');
        blur.classList.toggle("active");
        var searchBar = document.getElementById('searchBar');
        searchBar.classList.toggle('active');
    }
    </script>