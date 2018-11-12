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

<div class="images">
<?php  foreach($images as $img ) { ?>
	
	<img src="<?php echo $img; ?>" width="90" height="90" alt="<?php ?>"> 
	
<?php  }  ?>
</div>
<img src="" id="largeImg" hidden width="1000px"  height="800">


<script>
var largImg = document.querySelector("#largImg");	
var img = document.querySelectorAll('.images img');
var len = img.length;
for(let i = 0; i < len; i++) {
img[i].addEventListener('click', function() {
	
	
	var src = img[i].src;
	largeImg.removeAttribute("hidden");
	largeImg.setAttribute("src", src);
	
});	

}
// get width and height of image javascript 
// set width and height according to width and height window screen
</script>




</body>
</html>
