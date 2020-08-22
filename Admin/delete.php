<?php
$id=$_REQUEST['id'];
//echo $id;
include("../connect.php");
$query="delete from tbl_product where pro_id='$id'";
mysql_query($query);
header("Location:viewproduct.php");
?>