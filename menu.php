<?php
/*
@session_start();
$user=$_SESSION['user'];

include('connect.php');

$res=mysql_query("select * from tbl_register where email='$user'");
$row=mysql_fetch_array($res);
$uid=$row['reg_id'];

$count=mysql_query("select tbl_cart where reg_id='$uid'");
*/


	  echo '<div class="menu">';
	  echo  '<div class="left">';
	   echo "<ul>";
		echo '<img src="images/logo.png" height="65px" width="120px" style="margin-top:-2px;float:left;margin-left:-40px;"/>';
		 echo '<li><a href="index.php"><b>HOME</b></a></li>';
		 echo '<li><a href="aboutus.php"><b>ABOUT US</b></a></li>';
		 echo '<li><a href="product.php"><b>PRODUCT</b></a></li>';
		 echo '<li><a href="register.php"><b>REGISTER</b></a></li>';
		 echo '<li><a href="contactus.php"><b>CONTACT US</b></a></li>';
		echo "</ul>";
		echo "</div>";
		echo '<div class="right">';
		echo "<ul>";
			echo '<li><a href="login.php"><i class="glyphicon glyphicon-user" style="font-size:20px;position:relative;left:15px;top:-4px;"></i></a></li>';
			echo '<li><a href="cart.php"><i class="glyphicon glyphicon-shopping-cart" style="font-size:20px;position:relative;left:45px;top:-5px;"></i></a></li>';
		echo "</ul>";
		echo "</div>";
	   echo "</div>";
?>