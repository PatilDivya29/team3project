<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>SDK Shopping Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <style>
    .card{
        background-color:pink;
    }
    
    </style>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <div class="container">
       <center><img src="images/images/girl/fff.jpg"  width="100%" height="500px"> </center>
       <div class="centered"><h1><b><center>FAQ!Need help?</center><b></h1></div>
       
       <center><h2>"Selfless giving is the art of living"</h2><center>
    <br><br>

   <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="card ">
                           <a href="products.php">
                                <img src="images/images/girl/download.png" height=150 width=100 alt="">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Orders</p>
                                       <i><b><p>Questions related to orders</p></b></i>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="card">
                           <a href="products.php">
                               <img src="images/images/girl/471-200.png" height=150 width=200 alt="">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Shipping</p>
                                   <i><b><p>Questions related to shipping</p></b></i>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="card">
                           <a href="products.php">
                               <img src="images/images/girl/download (1).png"height=150 width=200 alt="">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Returns & Refunds</p>
                                  <i><b><p>Questions related to returns.</p></b></i>
                               </div>
                           </center>
                       </div>
                   </div>
                   
                   <div class="col-xs-4">
                       <div class="card">
                           <a href="products.php">
                               <img src="images/images/girl/10992-200.png"height=150 width=200 alt="">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Promotions & Discount</p>
                                  <i><b><p>Questions related to Discount.</p></b></i>
                               </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="card">
                           <a href="products.php">
                               <img src="images/images/girl/images.png"height=150 width=200 alt="">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Products & Stock</p>
                                  <i><b><p>Questions related to Products.</p></b></i>
                               </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="card">
                           <a href="products.php">
                               <img src="images/images/girl/aaa.jpg"height=150 width=200 alt="">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Technical Support</p>
                                  <i><b><p>Questions related to Technical Support.</p></b></i>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
           <br><br>
           <div class="row">
                
                </div>
                
                <br><br> <br><br><br><br>
                <footer class="footer">
                   <div class="container">
                    <center>
                       <p>Copyright &copy SDK Shopping Store. All Rights Reserved.</p>
                       <p>This website is developed by SDK</p>
                   </center>
                   </div>
               </footer>
    </div>
    </body>
</html>