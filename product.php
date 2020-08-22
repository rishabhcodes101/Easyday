<?php
include("connect.php");
session_start();
if(@$_SESSION['user']=="")
{
		include("menu.php");
}
else
{
	include("usermenu.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<style>
.card {
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  width: 250px;
  height:300px;
  text-align: center;
  font-family: arial;
  float:left;
  margin-left:35px;
  margin-top:20px;
}
#slider
{
height:70%;
width:100%;
//background-color:#f8c1c1;
margin-top:5px;
background-size:100% 100%;
}
.price {
  color: grey;
  font-size: 16px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 50%;
  font-size: 18px;
  float:left;
  border:1px solid white;
}

.card button:hover 
{
  background-color:#037ec4;
}
.outer
{
height:auto;
width:100%;
float:left;
border:1px solid white;
//margin:0px auto;
}
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
padding:10px;
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
margin-left:30px;
}
.right ul li a
{
text-decoration:none;
color:white;
}
.footer
{
	height:5%;
	width:100%;
	float:left;
	background-color:black;
	margin-top:5px;
}
</style>
<script>
var img=["food.jpg","article.jpg","bread.jpg","tea.jpg"];
var i=0;
function slide()
{
//alert("hiii");
var div=document.getElementById("slider");
div.style.backgroundImage="url('images/"+img[i]+"')";
i++;
if(img.length==i)
{
i=0;
}
window.setTimeout("slide()",1500);
}
</script>
</head>
<body onload="slide()">
<div class="outer">
		<div id="slider"></div>
<?php
$query="select * from tbl_product";
$res=mysql_query($query);
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<div class="card">
  <img src="images/<?php echo $row['pic']; ?>" style="width:70%;height:50%;">
  <h2><?php echo $row['name']; ?></h2>
  <p class="price">&#8377;&nbsp;<?php echo $row['price']; ?></p>
  <a href="check.php?response=1&proid=<?php echo $row['pro_id']?>"><button>Add to Cart</button></a>
  <a href="check.php?response=2&proid=<?php echo $row['pro_id']?>"><button>Buy Now</button></a>
</div>
<?php 
}
?>
<div class="footer">
			  <span style="color:white;margin-left:50px">&copy;<i>Easyday</i></span>
			  <span style="color:white;margin-left:50px">&copy;Shop for groceries, fruits & vegetables and many more at lowest prices & offers with whatsapp grocery shopping. Get instant grocery delivery</span>
</div>
</div>
</body>
</html>