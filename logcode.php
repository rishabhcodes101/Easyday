<?php
session_start();
$page=$_POST['page'];
$proid=$_POST['proid'];
echo $proid;
$em=$_POST['em'];
$pss=$_POST['pss'];
$_SESSION['user']=$em;
include('connect.php');
$query="select * from tbl_register where email='$em' and password='$pss'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$_SESSION['user']=$em;
	if($page==1)
	{
		//echo "1";
	header("location:addtocart.php?proid=$proid");
	}
	else if($page==2)
	{
		//echo "2";
		header("location:buynow.php?proid=$proid");
	}
	else
	{
		header("Location:index.php");
	}
}
	else
	{
		if($page==1)
		{
			//echo "3";
			header("location:login.php?page=1&proid=$proid");
		}
		else if($page==2)
		{
			//echo "4";
			header("location:login.php?page=2&proid=$proid");
		}
		else
		{
			header("location:login.php");
		}
	}
?>