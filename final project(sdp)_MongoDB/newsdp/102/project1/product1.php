<?php
    session_start();
    require 'check_if_added.php';
?>
<?php
require 'vendor/autoload.php'; 
if(extension_loaded("mongodb"))
{
    try{
// $id=$_GET['id']; 
//  echo $_SESSION['id'];

$con = new MongoDB\Client("mongodb://localhost:27017"); 
$db=$con->store;
 $mobj=$db->items->find();
}
catch(MongoConnectionException $e){
    var_dump($e);
}
}?>
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
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <div class="container">
                <div class="jumbotron">
                    <h1>Welcome to our SDK Shopping Store!</h1>
                    <p>We have the best Tshirts, jeans ,shirts,mobile covers for you. 
                    No need to hunt around, we have all in one place.</p>
                </div>
            </div>
            <div class="container">
         
           <div class="row">
      <?php
      foreach($mobj as $result){
          ?>

        <div class="col-md-3 col-sm-6">
        <form>
        <div  class="thumbnail" style="width:120px , height=120px;">
        <a href="cart.php">
                                <!-- <img src="OIP.jpg" class="img-fluid" alt="Faded"> -->
                                <img src="<?php echo $result['image'];?>"alt="items" class="img_fluid">
      
                            </a>
                            <center>
         <div class="caption">
        <h3><?php echo $result['name'];?></h3>
        <p>Price:<?php echo $result['price'];?></p>
        <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=1;" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                   
                                 
       
        </div>
        </center>
        </div>
        </form>
        </div>
        <?php
    }

?>
</div>
            <br><br><br><br><br><br><br><br>
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
