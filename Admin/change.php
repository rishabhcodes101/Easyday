<?php
?>
<html>
<head>
<style>
.outer
{
	height:1500px;
	width:1330px;
	border:1px solid;
	//background-color:#f98d8c;
	//background:rgba(5,2,7,0.3);
}
.menu
{
	height:70px;
	width:1330px;
	background-color:#3c4043;
	border:1px solid;
	background:rgba(0,0,70,0.5);
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
	margin-left:1px;
}
.menu ul li a
{
	text-decoration:none;
	color:#e28c29;
}
.menu ul li:hover
{
	background-color:#eddcd5;
}
.box
{
	height:500px;
	width:1320px;
	margin-top:10px;
	//margin:0px auto;
	border:1px solid;
	background-color:white;
}
</style>
</head>
<body>
<div class="outer">
	<div class="menu">
			<ul>
				<li><a href="profile.php">HOME</a></li>
				<li><a href="category.php">ADD CATEGORY</a></li>
				<li><a href="addproduct.php">ADD PRODUCT</a></li>
				<li><a href="viewproduct.php">VIEW PRODUCT</a></li>
				<li><a href="#">VIEW CONTACT</a></li>
				<li><a href="#">VIEW SELL ITEMS</a></li>
				<li><a href="#">VIEW REGISTER USER</a></li>
				<li><a href="change.php">CHANGE PASSWORD</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
			</ul>
		</div>
		
		<center>
				<div class="box">
				<form action="changecode.php" method="post">
				 <h1>Change Password</h1>
				 
				 OLD Password:
				 <input type="text" placeholder="Enter your old password" name="op"/>
				 </br></br>
				 NEW Password:
				 <input type="text" placeholder="Enter your new password" name="np"/>
				 </br></br>
				 Confirm Password:
				 <input type="text" placeholder="confirm password" name="cnp"/>
				 </br></br>
				 <input type="submit" value="CHANGE PASSWORD"/>
				 
				
				</form>
				</div>
			</center>
		
		
		</div>
</body>
</html>