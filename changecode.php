<?php
session_start();
$op=$_POST['op'];
$np=$_POST['np'];
$cnp=$_POST['cnp'];
include("connect.php");
$email=@$_SESSION['user'];
$query="select * from tbl_register where password='$op'";
$res=mysql_query($query);

if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	if($op==$np)
	{
		echo "<script>alert('same old and new password');window.location.href='change.php';</script>";
	}
	else
	{	
		if()
		{
		$query1="update tbl_register set password='$np'";
		mysql_query($query1);
		echo "<script>window.location.href='index.php';</script>";
		session_destroy();
		
		}
	}
	else
	{
		echo "<script>alert('password does not match');window.location.href='change.php';</script>";
	}
}
else
{
		echo "<script>alert('please enter the correct old password');window.location.href='change.php';</script>";
}
?>