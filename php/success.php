<?php
    require './includes/common.php';
    if(!isset($_SESSION['email_id'])){
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
     <title>LifeStyle Store</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" 
           type="text/css" >
     <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js">
     </script>
     <script type="text/javascript"  src="bootstrap/js/bootstrap.min.js">
     </script>
    
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >    

        <!--jQuery library--> 
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        

        <!--Latest compiled and minified JavaScript--> 
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link rel="stylesheet" type="text/css" href="bootstrap/css/style1.css"> 
  </head>
  <body>
     <?php
        require './includes/header.php';
        
         // check all items to confirmed
            $user_id = $_SESSION["id"];
            $query = "SELECT item_id FROM users_items WHERE user_id = '$user_id'";
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
            
            while($row = mysqli_fetch_array($result)){
                $item_id = $row["item_id"];
                $query1 = "UPDATE users_items SET status = 'Confirmed' WHERE item_id = '$item_id'";
                
                $result1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
            }
      ?>

      <div class="centereddiv container panel-margin">
          <div class="alert alert-success">
                Your order is confirmed. Thank you for shopping with us.
                <a href="products.php"> Click here​</a> to purchase any other item.
          </div>
      </div>
     <?php
        require './includes/footer.php';
     ?>
  </body>
</html>