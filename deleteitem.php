<?php
$id=$_REQUEST['id'];
//echo $id;
include("connect.php");
$query="delete from tbl_cart where cart_id='$id'";
mysql_query($query);
header("Location:addtocart.php");
?>