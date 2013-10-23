var mygallery=new fadeSlideShow({
	    wrapperid: "fadeshow1", 
	    dimensions: [900, 598], 
	    imagearray: [<?php include("./generate.php");?>],
	    displaymode: {type:'auto', pause:8000, cycles:0, wraparound:false},
	    persist: false, //remember last viewed slide and recall within same session?
	    fadeduration: 2500, //transition duration (milliseconds)
	    descreveal: "ondemand",
	    togglerid: ""})
