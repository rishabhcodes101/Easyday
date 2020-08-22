<?php
include("connect.php");
session_start();
	$e=$_SESSION['user'];
	$proid=$_REQUEST['proid'];
	$query="select * from tbl_register where email='$e'";
	//echo $query;
	$res=mysql_query($query);
	if($row=mysql_fetch_array($res,MYSQL_BOTH))
	{
		$regid=$row['reg_id'];
		$query1="select * from tbl_cart where reg_id='$regid' and pro_id='$proid'";
		$res1=mysql_query($query1);
		if($row=mysql_fetch_array($res1,MYSQL_BOTH))
		{
			echo "<script>alert('Item Already Added');window.location.href='index.php';</script>";
		}
		else
		{
		$query2="insert into tbl_cart(pro_id,reg_id,date) values ('$proid','$regid',curdate())";
		mysql_query($query2);
		header("location:viewcart.php?proid=$proid");
		}
		
	}
 
?>
