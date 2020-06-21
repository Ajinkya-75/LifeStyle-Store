<?php
	// if already logged in, go to products page
	if(isset($_SESSION["email_id"])){
		header("location: products.php");
	}

	require "./includes/common.php";
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
          <div class="col-xs-5 col-xs-offset-3 ">
            <div class="panel">
                <div class="panel-body">
                    <h2>SIGN UP</h2>
                    <form method="POST" action="signup_script.php">
                      <div class="form-group">
                          <input type="name" class="form-control" placeholder="Name" name="name" required="true">
                      </div>

                      <div class="form-group">
                          <input type="email" class="form-control" placeholder="Email" name="email" required="true">
                      </div>
                      <div class="form-group">
                          <input type="password" class="form-control" placeholder="Password" name="password" required="true">
                      </div>
                      <div class="form-group">
                          <input type="phone" class="form-control" placeholder="Contact" name="contact" required="true">
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control" placeholder="City" name="city" required="true">
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control" placeholder="Address" name="address" required="true">
                      </div>

                          <button type="submit" name="submit" class="btn btn-primary">Submit</button><br><br>
                  </form><br>   
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