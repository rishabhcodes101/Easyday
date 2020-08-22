<?php
session_start();
include("connect.php");
if($_SESSION['user']=="")
{
	header('location:login.php');	
}
$email=$_SESSION['user'];
$query="select * from tbl_register where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	//print_r($row);
	$regid=$row['reg_id'];
}
?>
<style>
	.view
	{
		height:auto;
		width:80%;
		margin: 40px auto;
	}
	td
	{
		text-align:center;
	}
	</style>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
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
</style>
</head>
<body>
<?php

if(@$_SESSION['user']=="")
{
		include("menu.php");
}
else
{
	include("usermenu.php");
}
?>
<div class="outer">
	
	<div class="view">
	   <table border="1" cellpadding="0" cellspacing="0" style="width:100%;text-align:center;">
<tr>
		<th>SNo. </th>
		<th>IMAGE</th>
		<th>PRODUCT NAME</th>
		<th>QUANTITY</th>
		<th>TOTAL</th>
		<th>REMOVE</th>
		<th>BUY</th>
</tr>
<?php
$query1="select * from tbl_cart where reg_id='$regid'";
$res1=mysql_query($query1);
$a=1;
while($row1=mysql_fetch_array($res1,MYSQL_BOTH))
{
	$proid=$row1['pro_id'];
	$query2="select * from tbl_product where pro_id='$proid'";
	$res2=mysql_query($query2);
	if($row2=mysql_fetch_array($res2,MYSQL_BOTH))
	{
?>
<tr>
	<td><?php echo $a; ?></td>
	<td><img src="admin/product/<?php echo $row2['pic']; ?>" height="60px"/></td>
	<td><?php echo $row2['name']; ?></td>
	<td><?php echo $qty=1; ?></td>
	<td>
		<?php
			$total=$qty*$row2['price'];
			echo $total;
			?>
			</td>
		<td><a href="deleteitem.php?id=<?php echo $row1['cart_id'];?>"><i class="fa fa-trash" style="color:black;"></i></a></td>
		<td><a href="buynow.php?proid=<?php echo $proid;?>">BUY NOW</a></td>
</tr>
<?php
$a++;
	}
}
?>
</table>
	  </div> 
	   
	   
</div>	   
</body>
</html>