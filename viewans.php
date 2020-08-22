<?php
$qid=$_REQUEST['qid'];
//echo $qid;
include("connect.php");
$query="select * from tbl_answer where ques_id='$qid'";
$res=mysql_query($query);
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	echo $row['answer'];
	echo "<br/>";
}
?>