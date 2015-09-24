<!DOCTYPE html>
<html class="no-js">
<head>
<!-- my script and syles goes here -->
<?php 
	echo link_tag('css/bootstrap.min.css');
	echo link_tag('css/navbar.css');
 ?>
</head>
<body>
<div class=""><!-- container -->
	 <?php if(isset($header) && $header!="") echo "<div class='container navbar navbar-default'>".$header."</div>" ;?>
	 <?php if(isset($left) && $left!="") echo $left ;?>
	 <?php if(isset($middle)&& $middle!="") { ?>
	 <div style="border:1px solid #ccc; " class="container">
	 	<?php echo $middle;?>
	 </div>
	 <?php } ?>
	 
	 <?php if(isset($footer) && $footer !="") echo "<div class='container'>".$footer."</div>" ;?>
	 
 </div><!-- container -->
 <?php
	echo js("https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js");
	echo js("js/bootstrap.min.js");
  ?>
</body>
</html>