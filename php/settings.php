<?php
    require './includes/common.php';
    if(!isset($_SESSION["email_id"])){
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
     ?>
      <div class="container p_style">
          <div class="panel panel-body col-xs-5 col-xs-offset-3">
              <h2>Change Password</h2>
          <form method="POST" action="settings_script.php">
              <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Old Password" required="true">
              </div>
              <div class="form-group">
                  <input type="password" class="form-control" name="new_password" placeholder="New Password" required="true">
              </div>
              <div class="form-group">
                  <input type="password" class="form-control" name="retype_new_password" placeholder="Re-type New Password" required="true">
              </div>
              <button type="submit" class="btn btn-primary" name="submit">Change</button>
          </form>
          </div>  
      </div>
     <?php
        require './includes/footer.php';
     ?>
  </body>
</html>