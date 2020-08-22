<?php
$name=$_POST['name'];
$category=$_POST['category'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$filename=$_FILES['file']['name'];
$tmp_name=$_FILES['file']['tmp_name'];
$location="product/";
$description=$_POST['description'];
$expiry=$_POST['expiry'];
//echo "$name,$category,$price,$quantity,$filename,$description,$expiry";
include("../connect.php");
$query="insert into tbl_product(name,cat_id,price,peice,pic,description,expiry,date) values ('$name','$category','$price','$quantity','$filename','$description','$expiry',curdate())";
$check=mysql_query($query);
if($check==true)
{
	move_uploaded_file($tmp_name,$location.$filename);
	header("Location:addproduct.php");
}
else
{
	mysql_error();
}
?>