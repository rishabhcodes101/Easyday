<?php
$category=$_POST['category'];
include('../connect.php');
$query="insert into tbl_category(category,date) values ('$category',curdate())";
mysql_query($query);
header("Location:category.php");
?>