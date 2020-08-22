<?php
include('../connect.php');
$query="select * from tbl_category order by cat_id";
$res=mysql_query($query);
?>
<html>
<head>
<style>
.outer
{
	height:1500px;
	width:1330px;
	border:1px solid;
	background-color:#f98d8c;
	background:rgba(5,2,7,0.6);
}
.menu
{
	height:70px;
	width:1330px;
	background-color:#3c4043;
	border:1px solid;
	background:rgba(0,0,70,0.5);
}
.menu ul
{
	list-style-type:none;
}
.menu ul li
{
	display:inline;
	padding:10.5px;
	//border:1px solid;
	margin-left:1px;
}
.menu ul li a
{
	text-decoration:none;
	color:#e28c29;
}
.menu ul li:hover
{
	background-color:#eddcd5;
}
.row
{
	height:500px;
	width:900px;
	border:1px solid;
	margin-top:20px;
	background-color:#e6d8c4;
}
</style>
</head>
<body>
<div class="outer">
	<div class="menu">
			<ul>
				<li><a href="profile.php">HOME</a></li>
				<li><a href="category.php">ADD CATEGORY</a></li>
				<li><a href="addproduct.php">ADD PRODUCT</a></li>
				<li><a href="viewproduct.php">VIEW PRODUCT</a></li>
				<li><a href="#">VIEW CONTACT</a></li>
				<li><a href="#">VIEW SELL ITEMS</a></li>
				<li><a href="#">VIEW REGISTER USER</a></li>
				<li><a href="change.php">CHANGE PASSWORD</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
			</ul>
		</div>
<center>
<div class="row">
<table border="1" align="center" cellpadding="0" cellspacing="0" style="height:79%;width:100%;text-align:center">
<tr>
<th>SN. </th>
<th>category</th>
</tr>
<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
	<td><?php echo $a;?></td>
	<td><?php echo $row['category'];?></td>

</tr>
<?php
$a++;
}
?>
<form action="catcode.php" method="post">
ADD Category:
<input type="text" style="margin-top:20px;height:30px;width:150px" name="category"/>
</br></br>
<input type="submit" style="height=10;width:100px;background-color:#f1f19b;" value="ADD"/>
</br></br>
</table>
</form>

   </div>
</center>
</div>
</body>
</html>