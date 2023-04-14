<?php
  include ('connect_db.php');

  $results_per_page = 03;

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
    <title>Document</title>
    <style>
        .next{
            background-color: red;
            padding: 10px;
            border-radius: 10px;
            color: #fff;
            position: relative;
        }
        a{
            text-decoration: none;
         
        }
        table{
            margin-bottom: 20px;
        }
    </style>

</head>
<body>
    <?php 
      
  $sql = "SELECT * FROM browsetb limit $this_page_first_result ,$results_per_page ";
  $result = mysqli_query($con, $sql);
  
  while($row = mysqli_fetch_array($result)){
   // echo $row['gameName']. ''. $row['gamePrice']. '<br>';
   
  ?>
     <table>
        <tr>
            <td><?php echo $row['gameName']; ?></td>
            <td><?php echo $row['gamePrice']; ?></td>
        </tr>
     </table>
  <?php
}
  ?>

  <?php
  
  for($i = 1; $i<= $number_of_pages; $i++){
       echo '<a class="next" href = "pagination.php?page=' .$i. '">' . $i . '</a> ';
  }
    ?>
     

</body>
</html>