<?php
  session_start();
  include ('connect_db.php');
  if(!isset($_SESSION['customer']) && empty($_SESSION['customer'])){
  header('location:user-login.php');
  }
  else{
    $userid = $_SESSION['customerid'];
    $userEmail = $_SESSION['customer'];
    $cart = $_SESSION['cart'];
    $tot = $_GET['total'];
    $_SESSION['all_tot'] = $tot;
 
    if(empty($cart)){
      header('location:Slider.php');
    }
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
    <script>
     $(function(){
     $("#header-sec").load("header.php");
     $("#footer").load("footer.php");
     })
    </script>
    <style>
       body{
         background-color: rgb(23,30, 34); 
       }
              
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

    </style>
  <title>checkout</title>
</head>
<body>
  
 <!-- Header -->

 <div id="header-sec"></div>

<!-----------------------------------

  <h2 class="my-3" style="text-align:center;color: red;">CHECKOUT</h2>-->
  <div class="col-md-10 mx-auto">
  <h3 class="nk-decorated-h-2 mb-3 mt-lg-5 mt-mb-3 mt-sm-5" style="color: #fff;"><span><span class="text-main-1">CHECKOUT</span></h3>
  </div>

<div class="col-md-10 mx-auto mb-5 p-4">
  <div class="row">
<div class="col-md-6 p-3">
<h5 style="color: #fff;">BILLING DETAILS</h5>
<hr>
<form action="registerProcess.php" class="row g-3" method="POST">
<div class="col-md-6">
    <label for="" class="form-label" style="color: #7f8b92; font-family: Calibri;">First Name </label>
    <input type="text" style="background-color: rgb(23,30, 34);" class="form-control form-control-lg text-muted border-secondary rounded-0" name="fname" id="fname">
    <p class="text-danger fname"></p>
</div>
<div class="col-md-6">
    <label for="" class="form-label" style="color: #7f8b92; font-family: Calibri;" >Last Name </label>
    <input type="text" class="form-control form-control-lg  text-muted border-secondary rounded-0" style="background-color: rgb(23,30, 34);" name="lname" id="lname">
    <p class="text-danger lname"></p>
</div>
<div class="col-md-12">
    <label for="" class="form-label" style="color: #7f8b92; font-family: Calibri;"  >Company name (optional)</label>
    <input type="text" class="form-control form-control-lg  text-muted border-secondary rounded-0" style="background-color: rgb(23,30, 34);" name="company" id="company"> 
    <p class="text-danger company"></p>   
</div>
<div class="col-md-12">
    <label for="" class="form-label" style="color: #7f8b92; font-family: Calibri;" >Country / Region</label>
    <select class="form-select form-control-lg  text-muted border-secondary rounded-0" style="background-color: rgb(23,30, 34);" name="country" id="country">
        <option value="select">Country / Region</option>
        <option value="Sri Lanka">Sri Lanka</option>
        <option value="India">India</option>
        <option value="America">America</option>
        <option value="Canda">Canda</option>
        <option value="Japan">Japan</option>
        <option value="China">China</option>
    </select>
    <p class="text-danger country"></p>
</div>
<div class="col-md-12">
    <label for="" class="form-label" style="color: #7f8b92; font-family: Calibri;"  >Street address</label>
    <input type="text" class="form-control form-control-lg  text-muted border-secondary rounded-0" style="background-color: rgb(23,30, 34);" name="address" id="address">  
    <p class="text-danger address"></p>  
</div>
<div class="col-md-12">
    <label for="" class="form-label" style="color: #7f8b92; font-family: Calibri;">Town / City (optional)</label>
    <input type="text" class="form-control form-control-lg  text-muted border-secondary rounded-0" style="background-color: rgb(23,30, 34);" name="city" id="city">
    <p class="text-danger city"></p>
</div>   
<div class="col-md-12">
    <label for="" class="form-label" style="color: #7f8b92; font-family: Calibri;">Postcode / ZIP</label>
    <input type="text" class="form-control form-control-lg text-muted border-secondary rounded-0" style="background-color: rgb(23,30, 34);" name="zip" id="zip">
    <p class="text-danger zip"></p>
</div> 
<div class="col-md-12">
    <label for="" class="form-label" style="color: #7f8b92; font-family: Calibri;">Phone</label>
    <input type="text" class="form-control form-control-lg text-muted border-secondary rounded-0" style="background-color: rgb(23,30, 34);" name="phone" id="phone">
    <p class="text-danger phone"></p>
</div> 
<div class="col-md-12">
    <label for="" class="form-label" style="color: #7f8b92; font-family: Calibri;">Email Address</label>
    <input type="text" style="font-family: Calibri; background-color: rgb(23,30, 34);" class="form-control form-control-lg  text-muted border-secondary rounded-0 text-dark" value="<?php echo $userEmail ?>"  name="email" id="email">
    <p class="text-danger email"></p>
</div>           
</form>
  </div>

<!--- your orders-->
  <div class="col-md-6 p-3">
  <h5 style="color:#fff;" class="">YOUR ORDERS</h5>
  <hr>
  <div class="table-responsive-sm table-responsive-md table-responsive-lg">
 <table class="table table-borderless">
    <thead class="thead-light">
    <tr class="table-active">
      <th><h5 class="py-3 px-3 text-danger" style="font-family: Calibri;">PRODUCT</h5></th>
      <th><h5 class="py-3 px-3 text-danger" align="right" style="font-family: Calibri;">SUBTOTAL</h5></th>
    </tr>
    </thead>
   <?php
       foreach($cart as $key => $value){
        /*  echo $key . "<br>";*/
  
        $sql = "select * from browsetb where gameId = '$key'";
        $result = mysqli_query($con,$sql);

     while($row = mysqli_fetch_assoc($result)){
          
      ?>
   
      <tbody>
        <tr>
           <td><p class=" text-white mt-3 px-3 mb-1" style="font-family: Calibri;"><?php echo $row['gameName'];?></p></td>
           <td><p class="mt-3 px-3" align="right" style="color: orange;"><span>$</span><?php echo $row['gamePrice'];?></p></td>
        </tr>
      </tbody>

      <tbody>
         <tr>
           <td><p class="px-3 mb-0 text-success" style="font-family: Calibri;">Select Platform :</p></td>
         </tr>
      </tbody>

      <tbody>
        <tr>
        <td><p class="px-3 mt-0 text-info" style="font-family: Calibri;"><?php echo $row['Platform'];?></p></td>
        </tr>
      </tbody>
   <?php
     }

  }
   ?>
   <tbody>
      <tr>
      <th style="background-color: rgb(11,12,42)";><h5 class="px-3 mt-3 text-light" style="font-family: Calibri;">Subtotal</h5></th>
      <td  style="background-color: rgb(12, 11, 42);"><p class="px-3 mt-3" align="right" style="color: orange; font-family: Calibri;"><span>$</span><?php echo $tot ?></p></td>
      </tr>
   </tbody>

   <tbody>
      <tr>
      <th style="background-color: rgb(12, 11, 42);"><h5 class="px-3 text-light mt-3" style="font-family: Calibri;">Total</h5></th>
      <th  style="background-color: rgb(12, 11, 42);"><h5 class="px-3 mt-3" align="right" style="color: orange; font-family: Calibri;"><span>$</span><?php echo $tot ?></h5></td>
      </tr>
   </tbody>

    <tbody>
        <tr>
          <th><h5 class="mt-5" style="font-family: Calibri; color: #fff;">Credit Card | Debit Card | PayPal</h5></th>
        </tr>
    </tbody> 

    <tbody>
       <tr>
         <td colspan="2"><p style="font-family: Calibri; font-size:18px; color:#fff;">To "Continue to payment" I acknowledge I have read and agreed to<br>
          Player2games.com Terms & Conditions and Player2games.com<br> Privacy Policy.</p></td>
       </tr>
    </tbody>

    <tbody>
       <tr>
         <th colspan="2"><div id="paypal-button-container"></div></th>
       </tr>
    </tbody>

</table>
  </div>
</div>
</div>
</div>

  <!-- Replace "test" with your own sandbox Business account app client ID -->
  <script src="https://www.paypal.com/sdk/js?client-id=Ab6Y82wplrYKemlX3aSv7a4EdIi3puCwHb86-yaFO_C9QhvwUGXM-r5WHlnChmuDzlc-QSXGq8WgSBjq"></script>
  <!-- Set up a container element for the button -->
  <script>
     
  </script>

  <!--Fotter section-->
  <div id="footer"></div>

   <!-- Replace "test" with your own sandbox Business account app client ID -->
   <script src="https://www.paypal.com/sdk/js?client-id=Ab6Y82wplrYKemlX3aSv7a4EdIi3puCwHb86-yaFO_C9QhvwUGXM-r5WHlnChmuDzlc-QSXGq8WgSBjq&currency=USD"></script>
  <script>

    paypal.Buttons({

      onClick(){

        
    var fname = $('#fname').val();
    var lname = $('#lname').val();
    var company = $('#company').val();
    var country = $('#country').val();
    var address = $('#address').val();
    var city = $('#city').val();
    var zip = $('#zip').val();
    var phone = $('#phone').val();
    var email = $('#email').val();
 
         //fname
         if(fname.length == 0){
           $('.fname').text("*First name is required");
         }
         else{
          $('.fname').text("");
         }

         //lname
         if(lname.length == 0){
           $('.lname').text("*Last name is required");
        
         }
         else{
          $('.lname').text("");
         }
        
         //company
         if(company.length == 0){
           $('.company').text("*Company name is required");
      
         }
         else{
          $('.company').text("");

         }

         //country
         if(country == 'select'){
           $('.country').text("*Select your country");
          
         }
         else{
          $('.country').text("");
         }

         //address
         if(address.length == 0){
           $('.address').text("*Address is required");
          
         }
         else{
          $('.address').text("");
         }

         //city
         if(city.length == 0){
           $('.city').text("*City is required"); 
         }
         else{
          $('.city').text("");
         }

         //zip code
         if(zip.length == 0){
           $('.zip').text("*Zip is required");   
         }
         else{
          $('.zip').text("");
         }

         //phone
         if(phone.length == 0){
           $('.phone').text("*Phone is required");
         }
         else{
          $('.phone').text("");
         }

         //email
         if(email.length == 0){
           $('.email').text("*Email is required");
         }
         else{
          $('.email').text("");
         }

         if(fname.length == 0 || lname.length == 0 || company.length == 0 || country == 'select' || address.length == 0 || city.length == 0 || zip.length == 0 || phone.length == 0 || email.length == 0){
             return false;
         }

      },
      // Sets up the transaction when a payment button is clicked
      createOrder: (data, actions) => {
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: '<?= $tot ?>' // Can also reference a variable or function
            }
          }]
        });
      },
      // Finalize the transaction after payer approval
      onApprove: (data, actions) => {
        return actions.order.capture().then(function(orderData) {
          // Successful capture! For dev/demo purposes:
       //   console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
          const transaction = orderData.purchase_units[0].payments.captures[0];
        //  alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
      
        var fname = $('#fname').val();
        var lname = $('#lname').val();
        var company = $('#company').val();
        var country = $('#country').val();
        var address = $('#address').val();
        var city = $('#city').val();
        var zip = $('#zip').val();
        var phone = $('#phone').val();
        var email = $('#email').val();
               
        var data = {
            'fname' : fname,
            'lname' : lname,
            'company' : company,
            'country' : country,
            'address' : address,
            'city' : city,
            'zip' : zip,
            'phone' : phone,
            'email' : email,
           // 'cart' : $cart,
         //   'userid' : $userid,
            'placeOrderBtn' : true
        };

        $.ajax({
             method: "POST",
             url: "placeorder.php",
             data : data,
             success: function(response){
               if(response == 201){
                   window.location.href = 'thank.php';
               }
             }
        })

        });
      }
    }).render('#paypal-button-container');
  </script>
</body>
</html>