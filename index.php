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
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<style>
body
{
	overflow-x:hidden;
}
.outer
{
height:auto;
width:100%;
border:1px solid white;
//margin:0px auto;
}
#slider
{
height:70%;
width:100%;
//background-color:#f8c1c1;
margin-top:5px;
background-size:100% 100%;
}
.parent
{
height:50%;
width:100%;
//border:1px solid white;
background-color:yellow;
}

.middle
{
height:60%;
width:100%;
//border-radius:20px;
margin-top:10px;
//border:1px solid;
}
.offers
{
	height:40%;
	width:100%;
	border:4px dashed grey;
	
}
.one
{
height:80%;
width:23%;
border:1px solid;
margin-left:15px;
margin-top:15px;
float:left;
}
.tb1
{
	height:45%;
	width:40%;
	margin:10px auto;
}
button
{
	height:15%;
	width:50%;
	background-color:black;
	color:#fff;
	border:1px solid #fff;
	float:left;
	margin-top:23px;
}
body
{
//background-image:url('images/background.jpg');
background-size:100% 100%;
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
.marquee
{
	height:50px;
	width:100%;
	border:1px solid;
	margin-top:2px;
}
.footer
{
	height:5%;
	width:100%;
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
	   <div class="middle">
	   <?php
	   
		$query="select * from tbl_product order by pro_id desc limit 04";
		$res=mysql_query($query);
		while($row=mysql_fetch_array($res,MYSQL_BOTH))
		{
	   ?>
	   
	   
			   <div class="one">
			   <div class="tb1"><img src="admin/product/<?php echo $row['pic']; ?>" height="100%" width="100%"/></div>
			   <h3 align="center"><?php echo $row['name']; ?></h3>
			   <h5 align="center">&#8377;<?php echo $row['price']?></h5>
			   <a href="check.php?response=1&proid=<?php echo $row['pro_id']?>"><button>ADD TO CART</button></a>
			   <a href="check.php?response=2&proid=<?php echo $row['pro_id']?>"><button>BUY NOW</button></a>
			   </div>
			<?php
				}
			?>
			<a href="product.php"><span style="float:right;background-color:#037ec4;color:#fff;height:40px;padding:10px;margin-top:10px;margin-right:30px;">View More</span></a>
		</div>
		<div class="offers">
		<div class="row" style="background-color:#76b9ed;height:100%;">
			<div class="col-sm-3">	
				
				</div>
				<div class="col-sm-3">	
				
				</div>
				<div class="col-sm-3">	
				
				</div>
				<div class="col-sm-3">	
				
				</div>
		</div>
		
		</div>
	       <div class="row" style="background-color:#037ec4;height:200px;margin-top:5px">
		   <div class="col-sm-3">
		   <br/>
		   <br/>
		   <ul>
		   <li style="color:white;list-style-type:none;font-size:16px">About us</li>
		   <li style="color:white;list-style-type:none;">Privacy Policy</li>
		   <li style="color:white;list-style-type:none;">Contact us</li>
		   <li style="color:white;list-style-type:none;">Easyday stories</li>
		   <li style="color:white;list-style-type:none;">Phone number: +91 7657894530</li>
		   </ul>
		   </div>
		   <div class="col-sm-3">
		   <ul>
		   <br/>
		   <br/>
		   <li style="color:white;list-style-type:none;font-size:16px">POLICY</li>
		   <li style="color:white;list-style-type:none;">Return Policy</li>
		   <li style="color:white;list-style-type:none;">Terms Of Use</li>
		   <li style="color:white;list-style-type:none;">Security</li>
		   <li style="color:white;list-style-type:none;">Privacy</li>
		   <li style="color:white;list-style-type:none;">Sitemap</li>
		   <li style="color:white;list-style-type:none;">EPR Compliance</li>
		   </ul>
		   </div>
		   <div class="col-sm-3">
		   
		   <br/>
		   <br/>
		   <ul>
		   <li style="color:white;list-style-type:none;font-size:16px">HELP</li>
		   <li style="color:white;list-style-type:none;">Payments</li>
		   <li style="color:white;list-style-type:none;">Shipping</li>
		   <li style="color:white;list-style-type:none;">Cancellation & Returns</li>
		   <li style="color:white;list-style-type:none;">FAQ</li>
		   </ul>
		   </div>
		   <div class="col-sm-3">
		   
		   <br/>
		   <br/>
		   <ul>
		   <li style="color:white;list-style-type:none;font-size:16px">SOCIAL</li>
		   <li style="color:white;list-style-type:none;">Facebook</li>
		   <li style="color:white;list-style-type:none;">whatsapp</li>
		   <li style="color:white;list-style-type:none;">Twitter</li>
		   <li style="color:white;list-style-type:none;">YouTube</li>
		   </ul>
		   </div>
		   </div>
		      <div class="marquee">
			  <img src="">
			  </div>
			  <div class="footer">
			  <span style="color:white;margin-left:50px">&copy;<i>Easyday</i></span>
			  <span style="color:white;margin-left:50px">&copy;Shop for groceries, fruits & vegetables and many more at lowest prices & offers with whatsapp grocery shopping. Get instant grocery delivery</span>
			  </div>
      </div>
</body>
</html>
