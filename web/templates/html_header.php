<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title><?php echo $title; ?></title>
    <meta name="copyright" content="Copyright (c) 2013 Ivan Poul"/>
    <meta name="keywords" content="Pakuranga, Manukau, Auckland, professional photographer, photo atelier, photo studio, wedding, party, birthday, glamour, nude, act, color, black, kid, child, children, adult, fashion, art, Auckland, North Island, New Zealand"/>

    <?php include_once("templates/zahlavi.php");?>
  </head>
  <body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
    <script type="text/javascript">
    var mygallery=new fadeSlideShow({
	    wrapperid: "fadeshow1", 
	    dimensions: [900, 600], 
	    imagearray: [<?php include("/generate.php");?>],
	    displaymode: {type:'auto', pause:8000, cycles:0, wraparound:false},
	    persist: false, //remember last viewed slide and recall within same session?
	    fadeduration: 2500, //transition duration (milliseconds)
	    descreveal: "ondemand",
	    togglerid: ""})
    </script>
    
    <div id="main">
    
      <div id="top">
        <div id="logo">
          <a href="/index.php"><img src="images/logo.jpg" alt="BohemiaPhorography.com" border="0" /></a>            
        </div><!-- logo -->
        <div>
          <?php include_once('templates/top_menu.php');?>
        </div>
        <div id="fb" class="fb-like" data-href="https://www.facebook.com/bohemiaphotographycom" data-width="The pixel width of the plugin" data-height="30" data-colorscheme="dark" data-layout="standard" data-action="like" data-show-faces="false" data-send="true"></div>
        <div class="clear"></div>
      </div>    
        
      <div id="mright">
      <!-- PAGE CONTENT START -->