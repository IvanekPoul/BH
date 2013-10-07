<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
  <head>
    <?php include_once("./templates/zahlavi.php");?>
   <meta name="copyright" content="Copyright (c) 2013 Ivan Poul">
   <meta name="keywords" content="Pakuranga, Manukau, Auckland, professional photographer, photo atelier, photo studio, wedding, party, birthday, glamour, nude, act, color, black, kid, child, children, adult, fashion, art, Auckland, North Island, New Zealand"/>
  <script>
   <!--
if (document.images) {
  image1Ton = new Image();
  image1Ton.src = "./images/postproduction/1.jpg";

  image1Toff = new Image();
  image1Toff.src = "./images/postproduction/2.jpg";

}

function turnOn(image1) {
  if (document.images) {
    document[image1T].src = eval(image1T + "on.src");
  }
}

function turnOff(image1T) {
  if (document.images) {
    document[image1T].src = eval(image1T + "off.src");
  }
}
-->

<!--
if (document.images) {
  image2Ton = new Image();
  image2Ton.src = "./images/postproduction/1.jpg";

  image2Toff = new Image();
  image2Toff.src = "./images/postproduction/3.jpg";

}

function turnOn(image2T) {
  if (document.images) {
    document[image2T].src = eval(image2T + "on.src");
  }
}

function turnOff(image2T) {
  if (document.images) {
    document[image2T].src = eval(image2T + "off.src");
  }
}
-->
</script>

<title>How do we work?</title> 

  </head>

  <body>
    <div id="top">
      <div id="logo">
        <a href="http://www.bohemiaphotography.com/index.php"><img src="images/logo.jpg" alt="BohemiaPhorography.com" border="0" /></a>            
      </div><!-- logo -->
      <div>
        <?php include_once('templates/top_menu.php');?>
      </div>
    </div>
  
    
    <div id="main">
           
  
   
   <!-- PAGE CONTENT START -->

   <br>
   <br>
   <br>
<h1>How do We Work?</h1>
<br>
<p>
All our images go through software post-processing turning you into profesionally looking photo model and making art work 
from common plain shot.
        <br>  <br>
<strong>Basic</strong> post-processing contains white balance, colour and exposure correction, sharpening, cropping, etc.
<br> <br>
<strong>Advanced</strong> post-processing is highly recommended and raises your beauty even more. It contains skin blemish and wrinkles retouching, 
makeup corrections and smoothing, removal of stray hairs, figure shaping, removal of tattoo & piercing if required, clothes touch-ups, 
background adjustments, lighting corrections, etc.
<br>  <br>
Here we would like to show, how our photo postproduction works. Try to move your mouse over the picture below to see before and after.
 <br><br>
   <a href="./images/postproduction/2.jpg" onMouseOver="turnOn('image1T')" onMouseOut="turnOff('image1T')" rel="lightbox[g]">
<img name="image1T" src="images/postproduction/2.jpg" alt="Postproduction" width="400" border="0"
onmouseover="window.status='Postproduction'; return true" onmouseout="window.status='SSSSSS'; return true" class="img_link" ></a>

<a href="./images/postproduction/3.jpg" onMouseOver="turnOn('image2T')" onMouseOut="turnOff('image2T')" rel="lightbox[g]">
<img name="image2T" src="images/postproduction/3.jpg" alt="TRETAMENT" width="400" border="0"
onmouseover="window.status='Postproduction'; return true" onmouseout="window.status='SSSSSS'; return true" class="img_link" ></a>
<div class="separator"></div>
         
  
   <!-- PAGE CONTENT END -->
     

   
      <div id="mbottom">
        <?php include_once("templates/zapati.php");?>  
      </div>
    </div>

  </body>
</html>
