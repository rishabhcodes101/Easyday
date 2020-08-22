<?php
session_start();
if(@$_SESSION['user']!="")
{
	header("Location:viewcart.php");
	
}
include('connect.php');
if(@$_SESSION['user']=="")
{
		include("menu.php");
}
else
{
	include("usermenu.php");
}
//echo $_SESSION['user'];
?>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<!--<link href="css/general.css" rel="stylesheet" type="text/css"/>-->
<style>
.outer
{
height:auto;
width:100%;
border:1px solid white;
//margin:0px auto;
}
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
padding:10px;
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

</style>
</head>
<body>
		<div class="outer">
		
	   <h1 align="center" style="font-size:80px;color:#fe4a4a;margin-top:200px;">SORRY!! YOU ARE NOT LOGIN...PLEASE LOGIN FIRST</h1>
	   <a href="login.php"><button style="background-color:#52a6fe;color:#ffffff;border:1px solid #6929e1;width:20%;height:50px;font-size:35px;margin-top:60px;magrin-right:50px;">LOGIN</button></a>
	   
	  </div>
	  
</body>
</html>