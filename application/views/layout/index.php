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
<div class="container"><!-- container -->
	 <?php if($header) echo $header ;?>
	 <?php if($left) echo $left ;?>
	 <?php if($middle) echo $middle ;?>
	 <?php if($footer) echo $footer ;?>
 </div><!-- container -->
</body>
</html>