<?php
include('connect.php');
$query="select * from tbl_question";
$res=mysql_query($query);
?>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<style>
.menu
{
height:10%;
width:100%;
position:sticky;
top:0;
z-index:1;
}
.left
{
height:100%;
width:85%;
background-color:#037ec4;
float:left;
}
.right
{
height:100%;
width:15%;
background-color:#037ec4;
float:right;
}
.left ul
{
list-style-type:none;
}
.left ul li
{
display:inline-block;
padding:5px;
float:left;
width:15%;
margin-top:10px;
text-align:center;
}
.left ul li a
{
text-decoration:none;
color:white;
}
.right ul
{
list-style-type:none;
}
.right ul li
{
display:inline-block;
padding:10px;
width:15%;
text-align:center;
margin-top:8px;
margin-left:10px;
}
.right ul li a
{
text-decoration:none;
color:white;
}
.outer
{
	height:100%;
	width:100%;
	border:1px solid white;
}
</style>
</head>
<?php
session_start();
include('connect.php');
if(@$_SESSION['user']=="")
{
		include("menu.php");
}
else
{
	include("usermenu.php");
}
?>
<body>
<div class="outer">
<form action="decode.php" method="post">
<h3>ENTER QUESTION:</h3>
<textarea name="ques"></textarea>
</br>
<input type="submit" value="SEND" style="background-color:blue;color:white;border:none;width:100px;"/>
</br>
</form>
<table  border="1" cellspacing="0" cellpadding="0" style="width:100%;text-align:center;">
<tr>
<th>S.NO</th>
<th>Question</th>
<th>Post Answer</th>
<th>View Answer</th>
</tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
	<td><?php echo $a;?></td>
	<td><?php echo $row['question'];?></td>
	<td><a href="postans.php?qid=<?php echo $row['0'];?>">post</a></td>
	<td><a href="viewans.php?qid=<?php echo $row['0']?>">view</a></td>
</tr>
<?php
$a++;
}
?>
</table>
</div>
</body>
</html>