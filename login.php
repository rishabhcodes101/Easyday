<?php
session_start();
$page=@$_REQUEST['page'];
$proid=@$_REQUEST['proid'];
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
.outer
{
height:100%;
width:100%;
border:1px solid white;
//margin:0px auto;
background-color:#76b9ed;
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
.mid
{
	height:50%;
	width:50%;
	background-color:#76b9ed;
	margin-top:5%;
	margin-left:25%;
	text-align:center;
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
<form action="logcode.php" method="post">
<input type="hidden" name='page' value="<?php echo $page; ?>"/>
<input type="hidden" name='proid' value="<?php echo $proid; ?>"/>
<h1>login</h1>
<input type="email" name="em" style="width:40%;"/>
</br></br>
<input type="password" name="pss" style="width:40%";/>
</br></br>
<input type="submit" value="login" style="background-color:blue;color:white;border:none;width:100px;"/>
</br></br>
<I><b>yet not register?</b></I><a href="register.php" style="color:red;">register</a>
</form>
</div>
<?php
include('footer.php');
?>
</div>
</body>
</html>