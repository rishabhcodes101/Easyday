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
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<style>
.form
{
	width:100%;
	height:100%;
	background-color:#76b9ed;
	border:1px solid;
}
.f1
{
	height:50%;
	width:50%;
	margin-left:25%;
	margin-top:10%;
	background-color:#76b9ed;
	//border:1px solid;
	
}
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
<div class="form">
<div class="f1">
<center>
<form action="changecode.php" method="post">
<h3><I>CHANGE PASSWORD</I></h3>
<b>OLD PASSWORD :</b>
<input type="password" name="op" style="position:relative;width:65%;border-radius:10px;border:none;"/>
</br></br>
<b>NEW PASSWORD :</b>
<input type="password" name="np" style="position:relative;width:65%;border-radius:10px;border:none;"/>
</br></br>
<b>CONFIRM PASSWORD :</b>
<input type="password" name="cnp" style="position:relative;width:65%;border-radius:10px;border:none;"/>
</br></br>
<input type="submit" value="CHANGE" style="position:relative;width:15%;border-radius:10px;background-color:#0c7fbf;color:white;border:none;">
</form>
</center>
</div>
<?php
include('footer.php');
?>
</div>
</body>
</html>