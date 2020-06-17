<?php

  if(isset($_POST['submit'])){
  	$keyword=$_POST['keyword'];
  	$location=$_POST['location'];

  	echo "Your Keyword is : ".$keyword."<br>";
  	echo "Your Location is : ".$location."<br>";
  }
?>
