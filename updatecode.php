<?php
$name=$_POST['n'];
$fname=$_POST['fn'];
$gender=$_POST['a'];
$email=$_POST['em'];
$password=$_POST['pss'];
$address=$_POST['ad'];
$pincode=$_POST['pin'];
$mobile=$_POST['mo'];
$locality=$_POST['lo'];
//echo $n,$fn,$g,$e,$pss,$ad,$pin,$mo,$lo;
include('connect.php');
$query="update tbl_register set   name='$name',fname='$fname',gender='$gender',email='$email',password='$password',address='$address',pincode='$pincode',mobile='$mobile',locality='$locality'";
mysql_query($query);
?>