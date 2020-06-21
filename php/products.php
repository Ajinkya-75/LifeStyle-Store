<?php
    require './includes/common.php';
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
                    require './includes/check-if-added.php';
          ?>
      
      
      
      <div class="container">
          <div class="jumbotron j_styl">
              <h1>Welcome to our Lifestyle Store!</h1>
              <p>We have the best cameras,watches and shirts for you.No need to hunt around,we have all in one place.</p>
          </div>
          <div class="row text-centre">
              <div class="col-md-3 col-sm-6">
                  <div class="thumbnail"><img src="bootstrap/images/5.jpg" alt=""/>
                    <div class="caption">
                      <h3>Cannon EOS</h3>
                      <p>Price:<i class="fa fa-rupee"> Rs. 36000.00</i></p> 
                      <?php if(!isset($_SESSION["email_id"])){ ?>
                      <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                      <?php }else{ ?>
                             <?php if(check_if_added_to_cart(1)){ ?>
                                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                             <?php }else{ ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary">Add to cart</a>
                                    <?php }
                             } ?>
                    </div>
                  </div>
              </div>
               <div class="col-md-3 col-sm-6">       	
            	    <div class="thumbnail"><img src="bootstrap/images/2.jpg" alt=""/>
            	      <div class="caption">
            	        <h3>Sony DSLR</h3>
                        <p>Price:<i class="fa fa-rupee"> Rs. 40000.00</i></p>                        
            	        <?php if (!isset($_SESSION['email_id'])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary">Added to cart</a>
                        <?php }else{ ?>
                               <?php if(check_if_added_to_cart(2)){?>
                                      <a href="#" class="btn btn-success" disabled>Added to cart</a>
                                <?php }else{ ?>
                                      <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-primary">Add to cart</a>
                                      <?php }
                                }  ?>
          	        </div>
          	      </div>
          	 </div>
        <div class="col-md-3 col-sm-6">       	
            	    <div class="thumbnail"><img src="bootstrap/images/3.jpg" alt=""/>
            	      <div class="caption">
            	        <h3>Sony DSLR</h3>
                        <p>Price:<i class="fa fa-rupee"> Rs. 50000.00</i></p>                        
            	        <?php if (!isset($_SESSION['email_id'])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary">Added to cart</a>
                        <?php }else{ ?>
                               <?php if(check_if_added_to_cart(3)){?>
                                      <a href="#" class="btn btn-success" disabled>Added to cart</a>
                                <?php }else{ ?>
                                      <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-primary">Add to cart</a>
                                      <?php }
                                }  ?>
          	        </div>
          	      </div>
          	 </div>
        <div class="col-md-3 col-sm-6">       	
            	    <div class="thumbnail"><img src="bootstrap/images/4.jpg" alt=""/>
            	      <div class="caption">
            	        <h3>Olympus DSLR</h3>
            	        <p>Price:<i class="fa fa-rupee"> Rs. 80000.00</i></p>                        
            	        <?php if (!isset($_SESSION['email_id'])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary">Added to cart</a>
                        <?php }else{ ?>
                               <?php if(check_if_added_to_cart(4)){?>
                                      <a href="#" class="btn btn-success" disabled>Added to cart</a>
                                <?php }else{ ?>
                                      <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-primary">Add to cart</a>
                                      <?php }
                                }  ?>
          	        </div>
          	      </div>
          	 </div>
        </div>
        <div class="row text-center">
        	<div class="col-md-3 col-sm-6">       	
            	    <div class="thumbnail"><img src="bootstrap/images/9.jpg" alt=""/>
            	      <div class="caption">
            	        <h3>Titan Model #301</h3>
            	        <p>Price:<i class="fa fa-rupee"> Rs. 13000.00</i></p>                        
            	        <?php if (!isset($_SESSION['email_id'])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary">Added to cart</a>
                        <?php }else{ ?>
                               <?php if(check_if_added_to_cart(5)){?>
                                      <a href="#" class="btn btn-success" disabled>Added to cart</a>
                                <?php }else{ ?>
                                      <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-primary">Add to cart</a>
                                      <?php }
                                }  ?>
          	        </div>
          	      </div>
          	 </div>          
        <div class="col-md-3 col-sm-6">       	
            	    <div class="thumbnail"><img src="bootstrap/images/10.jpg" alt=""/>
            	      <div class="caption">
            	        <h3>Titan Model #201</h3>
            	        <p>Price:<i class="fa fa-rupee"> Rs. 3000.00</i></p>                        
            	        <?php if (!isset($_SESSION['email_id'])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary">Added to cart</a>
                        <?php }else{ ?>
                               <?php if(check_if_added_to_cart(6)){?>
                                      <a href="#" class="btn btn-success" disabled>Added to cart</a>
                                <?php }else{ ?>
                                      <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-primary">Add to cart</a>
                                      <?php }
                                }  ?>
          	        </div>
          	      </div>
          	 </div>
        <div class="col-md-3 col-sm-6">       	
            	    <div class="thumbnail"><img src="bootstrap/images/11.jpg" alt=""/>
            	      <div class="caption">
            	        <h3>HMT Milan</h3>
            	        <p>Price:<i class="fa fa-rupee"> Rs. 8000.00</i></p>                        
            	        <?php if (!isset($_SESSION['email_id'])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary">Added to cart</a>
                        <?php }else{ ?>
                               <?php if(check_if_added_to_cart(7)){?>
                                      <a href="#" class="btn btn-success" disabled>Added to cart</a>
                                <?php }else{ ?>
                                      <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-primary">Add to cart</a>
                                      <?php }
                                }  ?>
          	        </div>
          	      </div>
          	 </div>
        <div class="col-md-3 col-sm-6">       	
            	    <div class="thumbnail"><img src="bootstrap/images/12.jpg" alt=""/>
            	      <div class="caption">
            	        <h3>Faber Luba #111</h3>
            	        <p>Price:<i class="fa fa-rupee"> Rs. 18000.00</i></p>                        
            	        <?php if (!isset($_SESSION['email_id'])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary">Added to cart</a>
                        <?php }else{ ?>
                               <?php if(check_if_added_to_cart(8)){?>
                                      <a href="#" class="btn btn-success" disabled>Added to cart</a>
                                <?php }else{ ?>
                                      <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-primary">Add to cart</a>
                                      <?php }
                                }  ?>
          	        </div>
          	      </div>
          	 </div>
        </div>
        <div class="row text-center">
        	<div class="col-md-3 col-sm-6">       	
            	    <div class="thumbnail"><img src="bootstrap/images/8.jpg" alt="" style="width: auto"/>
            	      <div class="caption">
            	        <h3>H W</h3>
            	        <p>Price:<i class="fa fa-rupee"> Rs. 800.00</i></p>                        
            	        <?php if (!isset($_SESSION['email_id'])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary">Added to cart</a>
                        <?php }else{ ?>
                               <?php if(check_if_added_to_cart(9)){?>
                                      <a href="#" class="btn btn-success" disabled>Added to cart</a>
                                <?php }else{ ?>
                                      <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-primary">Add to cart</a>
                                      <?php }
                                }  ?>
          	        </div>
                    </div>
                </div>          
            <div class="col-md-3 col-sm-6">       	
            	    <div class="thumbnail"><img src="bootstrap/images/6.jpg" alt=""/>
            	      <div class="caption">
            	        <h3>Luis Phil</h3>
            	        <p>Price:<i class="fa fa-rupee"> Rs. 1000.00</i></p>                        
            	        <?php if (!isset($_SESSION['email_id'])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary">Added to cart</a>
                        <?php }else{ ?>
                               <?php if(check_if_added_to_cart(10)){?>
                                      <a href="#" class="btn btn-success" disabled>Added to cart</a>
                                <?php }else{ ?>
                                      <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-primary">Add to cart</a>
                                      <?php }
                                }  ?>
          	        </div>
                    </div>
               </div>
            <div class="col-md-3 col-sm-6">       	
            	    <div class="thumbnail"><img src="bootstrap/images/13.jpg" alt=""/>
            	      <div class="caption">
            	        <h3>John Zok</h3>
            	        <p>Price:<i class="fa fa-rupee"> Rs. 1500.00</i></p>                        
            	        <?php if (!isset($_SESSION['email_id'])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary">Added to cart</a>
                        <?php }else{ ?>
                               <?php if(check_if_added_to_cart(11)){?>
                                      <a href="#" class="btn btn-success" disabled>Added to cart</a>
                                <?php }else{ ?>
                                      <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-primary">Add to cart</a>
                                      <?php }
                                }  ?>
          	        </div>
                    </div>
            </div>
            <div class="col-md-3 col-sm-6">       	
            	    <div class="thumbnail"><img src="bootstrap/images/14.jpg" alt=""/>
            	      <div class="caption">
            	        <h3>Jhalsani</h3>
            	        <p>Price:<i class="fa fa-rupee"> Rs. 1300.00</i></p>                        
            	        <?php if (!isset($_SESSION['email_id'])){ ?>
                        <a href="login.php" type="button" class="btn btn-primary">Added to cart</a>
                        <?php }else{ ?>
                               <?php if(check_if_added_to_cart(12)){?>
                                      <a href="#" class="btn btn-success" disabled>Added to cart</a>
                                <?php }else{ ?>
                                      <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-primary">Add to cart</a>
                                      <?php }
                                }  ?>
          	        </div>
                    </div>
            </div>
        </div>    
</div>
<br><br><br>
     <?php
            require './includes/footer.php';
     ?>
  </body>
</html>


