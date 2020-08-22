<?php
session_start();
include('connect.php');
if(@$_SESSION['user']=="")
{
		include("menu.php");
}
else
{
	include("usermenu.php");
}
?>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<style>
.menu
{
height:10%;
width:100%;
position:sticky;
top:0;
z-index:1;
}
.left
{
height:100%;
width:85%;
background-color:#037ec4;
float:left;
}
.right
{
height:100%;
width:15%;
background-color:#037ec4;
float:right;
}
.left ul
{
list-style-type:none;
}
.left ul li
{
display:inline-block;
padding:5px;
float:left;
width:15%;
margin-top:10px;
text-align:center;
}
.left ul li a
{
text-decoration:none;
color:white;
}
.right ul
{
list-style-type:none;
}
.right ul li
{
display:inline-block;
padding:10px;
width:15%;
text-align:center;
margin-top:8px;
margin-left:10px;
}
.right ul li a
{
text-decoration:none;
color:white;
}
.outer
{
	height:100%;
	width:100%;
	border:1px solid white;
}
.mid
{
	height:auto;
	width:100%;
	margin-top:1px;
	border:1px solid white;
	background-color:#76b9ed;
}
.footer
{
	height:5%;
	width:100%;
	background-color:black;
	margin-top:15px;
}
</style>
</head>
<body>
<div class="outer">
<div class="mid">
<center>
<form action="regcode.php" method="post">
<h1>REGISTER</h1>
<b>Name:</b>
<input type="text" placeholder="Enter your name" name="n"/>
</br></br>
<b>F'Name:<b>
<input type="text" placeholder="Enter your father's name" name="fn"/>
</br></br>
<b>Gender:<b>
<input type="radio"  name="a" value="Male"/>MALE
<input type="radio"  name="a" value="FEMALE"/>FEMALE
</br></br>
<b>Email:<b>
<input type="email" placeholder="enter email" name="em"/>
</br></br>
<b>Password:<b>
<input type="password" placeholder="Enter password" name="pss"/>
</br></br>
<b>Address:<b>
<textarea name="ad"></textarea>
</br></br>
<b>Pincode:<b>
<input type="text" name="pin"/>
</br></br>
<b>Mobile:<b>
<input type="number" name="mo"/>
</br></br>
<b>Locality:<b>
<input type="text" name="lo"/>
</br></br>
<input type="submit" value="register" style="background-color:blue;color:white;"/>
</form>
</center>
</div>
<?php
include('footer.php');
?>
</div>
</body>
</html>