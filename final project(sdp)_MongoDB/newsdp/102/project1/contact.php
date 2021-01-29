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
       <center><img src="images/images/girl/yy.jpg"  width="100%" height="500px"> </center>
       <div class="centered"><h1><b>Contact Us<b></h1></div>
       
           
       </div>
    <br>
    <br>
           <div class="container paddingContact-container">
  <div class="row">
    <div class="col-md-12">
      <h1 class="white">Let's Get Started!</h1>
      <p>Contact us today to buy our latest brands.</p>
    </div>
  </div>
</div>
<div class="parallax texture" id="parallax-cta" style="background-image:url(https://www.solodev.com/assets/hero-slider/slide1.jpg);"></div>
<!-- contact-form -->
<div class="container form">
  <div class="row">
    <div class="col-md-7">
      <div class="row">
        <div class="form-group col-md-12">
          <h2>Tell us About Yourself</h2>
          <p style="color: #000">Contact us today to buy!</p>
        </div>
      </div>
      <form name="contactForm" id="contactForm" method="POST" action="">
        <div class="row">
          <div class="col-md-12">
            <div class="control-group">
              <label>First Name</label>
              <input type="text" class="demo-default form-control" placeholder="First Name">
            </div>
            <div class="control-group">
              <label>Last Name</label>
              <input type="text" class="demo-default form-control" placeholder="Last Name">
            </div>
            <div class="control-group">
              <label>Company</label>
              <input type="text" class="demo-default form-control" placeholder="Company">
            </div>
            <div class="control-group">
              <label>Phone #</label>
              <input type="text" class="demo-default form-control" placeholder="Phone #">
            </div>
            <div class="control-group">
              <label>Email</label>
              <input type="text" class="demo-default form-control" placeholder="yourname@domain.com">
            </div>
            <div class="control-group">
              <label for="select-beast">I'm Interested In:</label>
              <select id="select-beast" class="demo-default" placeholder="Select a service...">
                <option value="">PRODUCTS</option>
                <option value="4">MEN SHIRTS</option>
                <option value="1">WOMEN SHIRTS</option>
                <option value="3">MEN TSHIRTS</option>
                <option value="5">WOMEN TSHIRTS</option>
                <option value="5">WOMEN JEANS</option>
                <option value="5">MEN JEANS</option>
                <option value="5">PHONE COVERS</option>
                
                
                
              </select>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="form-group col-md-12 text-center">
            <input type="submit" class="btn btn-primary" value="Contact Us">
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-5 contact-right-info">
      <h2>SDK Shopping Store</h2>
      <p style="color: #000000">123 Open Door Road Suite 1200<br />
        Pune, FL 30030<br />
        <a href="tel:4078981961">407.555.1961</a>
      </p>
      <h2>EMAIL ADDRESS</h2>
      <a href="mailto:info@webcorpco.com">info@sdkweb.com</a>
      <h2>SUPPORT</h2>
      <a href="tel:8005551656">800.555.1656</a><br />
      <a href="mailto:support@webcorpco.com">support@sdkwebo.com</a>
    </div>
  </div>
</div>
<!-- contact-map -->
<div class="container">
  <div class="map-overlay">
    <h2>Changing the latest trends according to flavor of month.</h2>
    <p>SDK specializes in  making the world a more stylish, colorful and happier place by selling latest brands.</p>

  </div>
</div>
<div class="map-area">
  <div id="map-canvas" style="height: 750px; width: 100%;"></div>
</div>