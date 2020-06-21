<?php
require './includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
		<title>LifeStyle Store</title>
            <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" 
           type="text/css" >
     <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js">
     </script>
     <script type="text/javascript"  src="bootstrap/js/bootstrap.min.js">
     </script>
     <link rel="stylesheet" type="text/css" href="bootstrap/css/style1.css">
     
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >    

        <!--jQuery library--> 
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        

        <!--Latest compiled and minified JavaScript--> 
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
		<?php
			require './includes/header.php';
		?>
     <div class="container">
        <div class="row row_style">
          <div class="col-xs-4 col-xs-offset-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>LOGIN</h4>
                </div>
                <div class="panel-body">
                  <p class='text-warning'>Login to make a purchase</p>
                  <form action="login_submit.php" method="POST">
                      <div class="form-group">
                          <input type="email" class="form-control" placeholder="Email" name="email" required="true">
                      </div>
                      <div class="form-group">
                          <input type="password" class="form-control" placeholder="Password" name="password" required="true">
                      </div>
                          <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                  </form><br>
                </div>
                <div class="panel-footer"><p>Don't have a account? <a href='signup.php'>Register</a></p>       
                </div>    
            </div>
          </div>
        </div>
     </div>

                <?php
			require './includes/footer.php';
		?>
	</body>
</html>
