<?php
include("../connect.php");
?>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<style>
.outer
{
	height:100%;
	width:100%;
	//border:1px solid;
	//background-color:#f98d8c;
	//background:rgba(5,2,7,0.3);
}
.menu
{
	height:10%;
	width:100%;
	background-color:#76b9ed;
	border:1px solid;
	//background:rgba(0,0,70,0.5);
}
.menu ul
{
	list-style-type:none;
}
.menu ul li
{
	display:inline;
	padding:2px;
	border:1px solid;
	margin-left:2px;
	margin-top:10px;
}
.menu ul li a
{
	text-decoration:none;
	color:black;
	
}
.menu ul li:hover
{
	background-color:#eddcd5;
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
				<li><a href="login.php"><i class="glyphicon glyphicon-logout" style="font-size:20px;position:relative;left:15px;top:-4px;"></i></a></li>
			</ul>
			 </div>
<table border="1" cellpadding="0" cellspacing="0" style="width:100%;text-align:center;">
<tr>
<th>SNo. </th>
<th>Pic</th>
<th>Product name</th>
<th>Category</th>
<th>Price</th>
<th>Piece</th>
<th>Discription</th>
<th>Expiry</th>
<th>Delete</th>
<th>Update</th>
</tr>
<?php
$query="select * from tbl_product order by pro_id";
$res=mysql_query($query);
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
	<td><?php echo $a;?></td>
	<td><img src="product/<?php echo $row['pic']; ?>" height="70px;"/></td>
	<td><?php echo $row['name'];?></td>
	<td><?php echo $row['cat_id'];?></td>
	<td><?php echo $row['price'];?></td>
	<td><?php echo $row['peice'];?></td>
	<td><?php echo $row['description'];?></td>
	<td><?php echo $row['expiry'];?></td>
		<td><a href="delete.php?id=<?php echo $row['pro_id'];?>">DELETE</a></td>
		<td><a href="update.php?id=<?php echo $row['pro_id'];?>">UPDATE</a></td>
	
	
</tr>
<?php
$a++;
}
?>
</table>
</div>
</body>
</html>