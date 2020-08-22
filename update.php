<?php
session_start();
$email=$_SESSION['user'];
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
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<head>
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
<body bgcolor="#76b9ed">
<?php
$query="select * from tbl_register where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<center>
<form action="updatecode.php" method="post">
<h1>UPDATE PROFILE</h1>
Name:
<input type="text" placeholder="Enter your name" name="n" value="<?php echo $row['name'];?>"/>
</br></br>
F'Name:
<input type="text" placeholder="Enter your father's name" name="fn" value="<?php echo $row['fname'];?>"/>
</br></br>
Gender:
<input type="radio"  name="a" value="Male"/>MALE
<input type="radio"  name="a" value="FEMALE"/>FEMALE
</br></br>
Email:
<input type="email" placeholder="enter email" name="em" value="<?php echo $row['email'];?>"/>
</br></br>
Password:
<input type="password" placeholder="Enter password" name="pss" value="<?php echo $row['password'];?>"/>
</br></br>
Address:
<textarea name="ad"><?php echo $row['address'];?></textarea>
</br></br>
Pincode:
<input type="text" name="pin" value="<?php echo $row['pincode'];?>"/>
</br></br>
Mobile:
<input type="number" name="mo" value="<?php echo $row['mobile'];?>"/>
</br></br>
Locality:
<input type="text" name="lo" value="<?php echo $row['locality'];?>"/>
</br></br>
<input type="submit" value="UPDATE"/>
</form>
</center>
<?php
}
?>
<?php include("footer.php"); ?>
</body>
</html>