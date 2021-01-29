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
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
              <div class="container">
       <center><img src="card.gif"  width="100%" height="500px"> </center>
       <div class="centered"><h1><b>Sign up here to pay<b></h1></div>
       
           
       </div>
    <br>
    <br>
    <html>
<head>
<title> Psports </title>
	<link href="styles/site2.css" type="text/css" rel="stylesheet" />
	<link rel="shortcut icon" href="images/psportslogo.png">
<h1> Sign Up For More Offers And Discount </h1>
<center>
<form id="form1">
    <div class="form-container">
      <div class="personal-information">
        <h1>Payment Information</h1>
      </div> <!-- end of personal-information -->
      
      <input id="input-field" type="text" name="streetaddress" 
      required="required" autocomplete="on" maxlength="45" placeholder="Street Address"/><br>
      <input id="column-left" type="text" name="city" required="required" 
      autocomplete="on" maxlength="20" placeholder="City"/><br>
      <input id="column-right" type="text" name="zipcode" required="required" 
      autocomplete="on" pattern="[0-9]*" maxlength="5" placeholder="ZIP code"/><br>
      <input id="input-field" type="email" name="email" required="required" 
      autocomplete="on" maxlength="40" placeholder="Email"/><br>
    
        <div class="card-wrapper"></div>
          <input id="column-left" type="text" name="first-name" placeholder="First Name"/><br>
          <input id="column-right" type="text" name="last-name" placeholder="Surname"/><br>
          <input id="input-field" type="text" name="number" placeholder="Card Number"/><br>
          <input id="column-left" type="text" name="expiry" placeholder="MM / YY"/><br>
          <input id="column-right" type="text" name="cvc" placeholder="CCV"/><br>
		  <input id="column-right" type="text" name="productcode" placeholder="Product Code"/><br>
		  <input id="column-right" type="number" name="contactnumber" placeholder="Contact Number"/><br>
          <input id="input-button" type="submit" value="Submit"/>
		  
  </form>
</center>
</div>
</body>
<script src="scripts/buy.js"> </script>

</html>