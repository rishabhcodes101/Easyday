<?php
session_start();
$e=$_POST['email'];
$pss=$_POST['password'];
$_SESSION['user']=$e;
include('../connect.php');
$query="select * from tbl_admin where username='$e' and password='$pss'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	header("location:profile.php");
}
else
{
	header("Location:index.php");
}
?>
