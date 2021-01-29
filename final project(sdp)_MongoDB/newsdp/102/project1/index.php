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
           
                   <center>
                  <i> <h4>Life Isn,t Perfect But Your Outfit Can Be!</h4></i>
                       <h1>New Arrivals.</h1>
                       <p>Flat 40% OFF on all premium brands.</p>
                      <h1> &#128525;Shop Now</a></h1>
</center>
 


 <marquee direction=right><center><h1> Free Shipping Only For You <img src="Truck.jpg" width="70px" height="70px" >
 </h1> </center></marquee>
 <!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>
<body>

<h2 style="text-align:center"></h2>

<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="sdk.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="kkk.gif" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="c1.gif" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="unnamed.png" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="c10.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="aaaa.gif" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="89.jpg" style="width:100%" onclick="currentSlide(1)" alt="&#128512;">
    </div>
    <div class="column">
      <img class="demo cursor" src="vv.jpg" style="width:100%" onclick="currentSlide(2)" alt="&#128522;">
    </div>
    <div class="column">
      <img class="demo cursor" src="bb.jpg" style="width:100%" onclick="currentSlide(3)" alt="&#128558; ">
    </div>
    <div class="column">
      <img class="demo cursor" src="men.jpg" style="width:100%" onclick="currentSlide(4)" alt="&#128722;">
    </div>
    <div class="column">
      <img class="demo cursor" src="ppp.jpg" style="width:100%" onclick="currentSlide(5)" alt="&#129312;">
    </div>    
    <div class="column">
      <img class="demo cursor" src="saaa.jpg" style="width:100%" onclick="currentSlide(6)" alt="&#129321;">
    </div>
  </div>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    
</body>
</html>

   <center> <h2>DEALS OF THE DAY</h2><center>

   <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="card">
                           <a href="products.php">
                                <img src="images/images/girl/ment1.jpg" height=250 width=200 alt="">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">T-shirts</p>
                                       <i><b><p>Choose T-Shirts among the best available in the world.</p></b></i>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="card">
                           <a href="products.php">
                               <img src="images/images/girl/mens8.jpg" height=250 width=230 alt="">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Shirts</p>
                                   <i><b><p>Original Branded Shirts from the best brands.</p></b></i>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="card">
                           <a href="products.php">
                               <img src="images/images/girl/mensj15.jpg"height=250 width=230 alt="">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Jeans</p>
                                  <i><b><p>Our exquisite collection of jeans.</p></b></i>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
           <br><br>
           <center> <h2>BIGGEST BRANDS OF THE DAY</h2><center>

   <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="card">
                           <a href="products.php">
                                <img src="images/images/girl/top7.jpg" height=250 width=200 alt="">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Tops</p>
                                       <i><b><p>Choose Tops among the best brands in the world.</p></b></i>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="card">
                           <a href="products.php">
                               <img src="images/images/girl/download.jpg" height=250 width=200 alt="">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Shirts</p>
                                   <i><b><p>Original Branded Shirts from the best brands.</p></b></i>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="card">
                           <a href="products.php">
                               <img src="images/images/girl/girlj7.jpg"height=250 width=230 alt="">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Jeans</p>
                                  <i><b><p>Our exquisite collection of jeans.</p></b></i>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
           <br><br>
           <center> <h2>CUSTOMIZED PHONE COVERS</h2><center>

   <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="card">
                           <a href="products.php">
                                <img src="images/images/girl/cover24.jpg" height=250 width=230 alt="">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize"> Authentic Phone Covers</p>
                                       <i><b><p>Choose among the best available in the world.</p></b></i>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="card">
                           <a href="products.php">
                               <img src="images/images/girl/cover23.jpg" height=250 width=200 alt="">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize"> Cartoon Phone Covers</p>
                                   <i><b><p>Original Covers from the best collection.</p></b></i>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="card">
                           <a href="products.php">
                               <img src="images/images/girl/cover3.jpg"height=280 width=200 alt="">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Tag Phone Covers</p>
                                  <i><b><p>Our exquisite collection of Phone Covers.</p></b></i>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
           
           <!-- <!DOCTYPE html> -->

           <marquee behavior="scroll" direction="left" scrollamount="30">


<img src="15.png" width="125" height="82" alt="Flying Bat">
<img src="11.png">
           <img src="122.png">
           <img src="13.png">
           <img src="144.jpg" height=100 width=75>
</marquee>
           
          
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