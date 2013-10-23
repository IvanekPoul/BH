    <!-- HEADER TEMPLATE START-->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="en" />
     
    <link rel="stylesheet" href="css/bohemiaphotography.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/menu.css" type="text/css" media="screen" /> 
    <!--<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />-->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />
  
    <!--
    <script type="text/javascript" src="js/prototype.js"></script>
    <script type="text/javascript" src="js/scriptaculous.js?load=effects,builder"></script>
    <script type="text/javascript" src="js/lightbox.js"></script>
    <script type="text/javascript" src="js/fadeslideshow.js"></script>
    -->

    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>

    <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="js/fancybox/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
    <script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="js/fancybox/jquery.mousewheel.pack.js"></script>
    <script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-thumbs.js"></script>

    <script type="text/javascript">
    var mygallery=new fadeSlideShow({
	    wrapperid: "fadeshow1", 
	    dimensions: [900, 598], 
	    imagearray: [<?php include("/generate.php");?>],
	    displaymode: {type:'auto', pause:8000, cycles:0, wraparound:false},
	    persist: false, //remember last viewed slide and recall within same session?
	    fadeduration: 2500, //transition duration (milliseconds)
	    descreveal: "ondemand",
	    togglerid: ""})
    </script>

    <script type="text/javascript" src="js/bohemia.js"></script>
    <!-- HEADER TEMPLATE END -->