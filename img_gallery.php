<?php 


// query from database path to downloaded image	
$images = array(
			'img/abbey_wood_park_1.jpg',
		     'img/east_wickham_open_space_1.jpg',
		     'img/long_lake_darenth_1.jpg',
		     'img/old_car_1.jpg',
		     'img/river_thames_1.jpg',
			'img/river_thames_2.jpg',
			'img/river_thames_3.jpg',
			'img/river_thames_4.jpg',
			'img/shrewbury_park_rainbow_woolwich_1.jpg',
			'img/shrewbury_park_rainbow_woolwich_2.jpg',
			'img/shrewbury_park_rainbow_woolwich_3.jpg',
			'img/shrewbury_park_woolwich_view_1.jpg',
			'img/shrewbury_park_woolwich_view_10.jpg',
			'img/shrewbury_park_woolwich_view_2.jpg',
			'img/shrewbury_park_woolwich_view_3.jpg',
			'img/shrewbury_park_woolwich_view_4.jpg',
			'img/shrewbury_park_woolwich_view_5.jpg',
			'img/shrewbury_park_woolwich_view_6.jpg',
			'img/shrewbury_park_woolwich_view_7.jpg',
			'img/shrewbury_park_woolwich_view_8.jpg',
			'img/shrewbury_park_woolwich_view_9.jpg',
			'img/thames_view_woolwich_1.jpg'
);	
?>

<!DOCTYPE html>
<html>
<head>	
    <meta charset="utf-8">
    <meta name="language" content="english"> 
    <meta http-equiv="content-type" content="text/html">
    <meta name="author" content="Radek kuhnel">
    <meta name="publisher" content="https://lookforplace.co.uk">
    <meta name="description" content="Image gallery">
    <meta name="keywords" content="html5,img,javascript,php">
    <meta name="copyright" content="Copyright 2018">
    <meta name="reply-to" content="radekkuhnel@hotmail.com">
    <meta name="city" content="London">
    <meta name="country" content="United Kingdom">
  
    <meta name="format-detection" content="telephone=yes">
    <meta name="HandheldFriendly" content="true"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Simple image gallery using html javascript dom</title>
</head>	
	
	
<body>
<div id="image-container">
<div id="prev-next">	
<b id="enlarge">enlarge</b>
<b id="reduce" hidden>Close</b>
<img src="img/abbey_wood_park_1.jpg" id="largeImg">
<b id="prev">PREV</b><b id="next">NEXT</b>
</div>
<div class="images">
<?php  foreach($images as $img ) { ?>
	
	<img src="<?php echo $img; ?>" width="60" height="60" alt="<?php ?>"> 
	
<?php  }  ?>
</div>
</div>

<script>
	

var prev         = document.getElementById("prev");
var next         = document.getElementById("next");
var prevNext     = document.getElementById("prev-next");
var body         = document.querySelectorAll("body");
var imgContainer = document.getElementById("image-container");
var largeImg     = document.querySelector("#largeImg");	
var img          = document.querySelectorAll(".images img");
var imgName      = document.querySelector("#img-name");
var enlarge      = document.querySelector("#enlarge");
var reduce       = document.querySelector("#reduce");
var windowWidth  = window.innerWidth;
var windowHeight = window.innerHeight;
var imgWidth  = img[0].naturalWidth;
var imgHeight = img[0].naturalHeight;
var srcList = [];


enlarge.addEventListener("click", function() { 
	prevNext.id = "newLargeImg";
	enlarge.setAttribute("hidden", "hidden");
	reduce.removeAttribute("hidden");
	
});

reduce.addEventListener("click", function() {
	prevNext.id = "prev-next";
	reduce.setAttribute("hidden", "hidden");
	enlarge.removeAttribute("hidden");
});


var len = img.length;
for(let i = 0; i < len; i++) {
   srcList[i] = img[i].src;
   img[i].addEventListener('click', function() {
	
	var src = img[i].src;
	//largeImg.removeAttribute("hidden");
	largeImg.setAttribute("src", src);
	
});	
}

body[0].addEventListener("keydown", function(e) { 
         if(e.keyCode == 37) {
	         e.preventDefault();
	         moveImg(-1, img.length);
         }else if(e.keyCode == 39) {
	         e.preventDefault();
	         moveImg(1, img.length);
         }
 });

prev.addEventListener("click", function() { moveImg(-1, img.length); });

next.addEventListener("click", function() { moveImg(+1, img.length); });

function moveImg(symbol, len) {
     for(let i = 0; i < len; i++)  {
	     img[i].style = "";
	     if(srcList[i] == largeImg.src) {
		    i =  symbol + i
		    if(i == len) {  i = 0; }
		    if(i == -1)  {  i = len - 1; }
		    img[i].style = "border:2px solid red";
		  var moveSrc = srcList[i];
		  largeImg.setAttribute("src", moveSrc);
	     }
     }
}


</script>

</body>
</html>
