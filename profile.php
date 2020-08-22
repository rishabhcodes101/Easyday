<?php
session_start();
//echo $_SESSION['user'];
if($_SESSION['user']=="")
{
	session_destroy();
	header("Location:login.php");
}
//echo "WELCOME";
?>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<style>
.outer
{
	height:100%;
	width:100%;
	border:1px solid;
	//background-color:white;
	//background:rgba(5,2,7,0.3);
}
.menu
{
	height:70px;
	width:100%;
	background-color:white;
	border:1px solid;
	//background:rgba(0,0,70,0.5);
}
.menu ul
{
	list-style-type:none;
}
.menu ul li
{
	display:inline;
	padding:10.5px;
	//border:1px solid;
	margin-left:25px;
}
.menu ul li a
{
	text-decoration:none;
	color:#e28c29;
}
.menu ul li:hover
{
	background-color:#5a597d;
}
</style>
</head>
<body>
<div class="outer">
	<div class="menu">
			<ul>
				<li><a href="#">HOME</a></li>
				<li><a href="#">DISCOUNT</a></li>
				<li><a href="#">BOARD</a></li>
				<li><a href="#">PURCHASED ITEMS</a></li>
				<li><a href="#">CHANGE PASSWORD</a></li>
				<li><a href="discuss.php">Discuss</a></li>
				<li><a href="viewcart.php">MY CART</a>
					<a href="viewcart.php"><i class="glyphicon glyphicon-shopping-cart" style="font-size:20px;"></i></a>
					</li>
				<li><a href="#">UPDATE PROFILE</a></li>				
				<li><a href="logout.php">LOGOUT</a></li>
			</ul>
	</div>
</div>
</body>
</html>
