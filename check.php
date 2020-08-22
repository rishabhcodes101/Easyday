<?php
session_start();
$response=$_REQUEST['response'];
//echo $response;
$proid=$_REQUEST['proid'];
//echo $proid;
if(@$_SESSION['user']=="")
{
	if($response==1)
	{
	header("location:login.php?page=1&proid=$proid");
	}
	else if($response==2)
	{
		header("location:login.php?page=2&proid=$proid");
	}
}
else
{
	if($response==1)
	{
	header("location:addtocart.php?proid=$proid");
	}
	else if($response==2)
	{
		
		header("location:buynow.php?proid=$proid");
	}
}
?>