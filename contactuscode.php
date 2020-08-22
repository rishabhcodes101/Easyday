<?php
session_start();
$n=$_POST['name'];
$e=$_POST['email'];
//echo $e;
$mo=$_POST['mobile'];
$msg=$_POST['message'];
include('connect.php');
$query="insert into tbl_contact(name,email,mobile,message,date) values ('$n','$e','$mo','$msg',curdate())";
mysql_query($query);
header("location:contactus.php");
?>