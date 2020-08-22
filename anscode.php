<?php
session_start();
include('connect.php');
$ans=$_POST['ans'];
//echo $ans;
$qid=$_POST['qid'];
//echo $qid;
$email=$_SESSION['user'];
$query="select * from tbl_register where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$uid=$row['0'];
}
$query2="insert tbl_answer(ques_id,reg_id,answer,date) values('$qid','$uid','$ans',curdate())";
mysql_query($query2);
header("location:discuss.php");	
?>