<?php
include("../connect.php");
$query="select * from tbl_category";
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
	background:rgba(5,2,7,0.3);
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
		
<h1>ADD-PRODUCT</h1>
<form action="addprocode.php" method="post" enctype="multipart/form-data">
PRODUCT NAME:
<input type="text" placeholder="Enter the product" name="name"/></br></br>

CATEGORIES:
<select name="category">
<option value="">--select--</option>
<?php
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<option value="<?php echo $row['cat_id']; ?>"><?php echo $row['category']; ?></option>
<?php
}
?>
</select></br></br>
PRODUCT PRICE:
<input type="text" placeholder="PRICE" name="price"/></br></br>
QUANTITY:
<input type="number" placeholder="Enter the product" name="quantity"/></br></br>
PICS:
<input type="file" name="file"></br></br>
DESCRIPTION:
<textarea name="description"></textarea></br></br>
EXPIRY:
<input type="date" name="expiry"/></br></br>
<input type="submit" value="Add"/>
</form>
</div>
</body>
</html>