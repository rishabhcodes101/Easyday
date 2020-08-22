<?php
$n=$_POST['n'];
$fn=$_POST['fn'];
$g=$_POST['a'];
$e=$_POST['em'];
$pss=$_POST['pss'];
$ad=$_POST['ad'];
$pin=$_POST['pin'];
$mo=$_POST['mo'];
$lo=$_POST['lo'];
//echo $n,$fn,$g,$e,$pss,$ad,$pin,$mo,$lo;
include('connect.php');
$query="insert into tbl_register(name,fname,gender,email,password,address,pincode,mobile,locality,date) values ('$n','$fn','$g','$e','$pss','$ad','$pin','$mo','$lo',curdate())";
mysql_query($query);
?>