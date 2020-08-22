<?php

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
margin-left:10px;
}
.right ul li a
{
text-decoration:none;
color:white;
}
.parent
{
height:90%;
width:100%;
//border:1px solid white;
margin-top:-35px;
}
.lside
{
height:90%;
width:62%;
background-color:#6aace6;
//border-radius:0px 0px 0px 20px;
float:left;
margin-left:5px;
}
.l1
{
	margin-top:10%;
	magin-left:20%;
}
.mid
{
	//height:50%;
	//width:100%;
	background-color:#2e3034;
}
.footer
{
	height:5%;
	width:100%;
	background-color:black;
	margin-top:15px;
}
</style>
</head>
<body>
     <div class="outer">
	   <div class="menu">
		<div class="left">
	    <ul>
		<img src="images/logo.png" height="70px" width="120px" style="margin-top:-2px;float:left;margin-left:-40px;"/>
		 <li><a href="index.php"><b>HOME</b></a></li>
		 <li><a href="aboutus.php"><b>ABOUT US</b></a></li>
		 <li><a href="product.php"><b>PRODUCT</b></a></li>
		 <li><a href="register.php"><b>REGISTER</b></a></li>
		 <li><a href="contactus.php"><b>CONTACT US</b></a></li>
		 </ul>
		</div>
		<div class="right">
		<ul>
			<li><a href="login.php"><i class="glyphicon glyphicon-user" style="font-size:15px;left:10px;"></i></a></li>
			<li><a href="cart.php"><i class="glyphicon glyphicon-shopping-cart" style="font-size:15px;left:30px;"></i></a></li>
		</ul>
			</div>
				</div>
	   <div class="parent">
	   
			<div class="lside">
			<center>
			<h3>Personal Details</h3>
			<form action="contactuscode.php" method="post">
			<b>Name:</b>
			<input type="text" placeholder="Enter Your Name" name="name" style="border-radius:10px;width:65%;height:5%;"/>
			</br></br>
			<b>Email:</b>
			<input type="email" placeholder="Enter your Email" name="email" style="border-radius:10px;width:65%;height:5%;"/>
			</br></br>
			<b>Mobile:</b>
			<input type="text" placeholder="Enter Your Mobile No." name="mobile" style="border-radius:10px;width:65%;height:5%;"/>
			</br></br>
			<b>Message:</b>
			<textarea name="message" style="width:65%"></textarea>
			</br></br>
			<input type="submit" value="send" style="background-color:#0078d7;width:20%;"/>
			</form>
		</center>
		</div>
				<div class="row" style="background-color:#037ec4;height:90%;width:38%;float:left;">
				<div class="col-sm-12">
		   <br/>
		   <br/>
		   <ul>
		   <li style="color:white;list-style-type:none;font-size:36px">CONTACT US</li>
		   <li style="color:white;list-style-type:none;font-size:26px">Privacy Policy</li>
		   <li style="color:white;list-style-type:none;font-size:26px">Contact us</li>
		   <li style="color:white;list-style-type:none;font-size:26px">Easyday stories</li>
		   <li style="color:white;list-style-type:none;font-size:26px">Phone number: +91 7657894530</li>
		   </ul>
		   </div>
	   
						</div>
	   
					</div>
	   <div class="mid">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.359602763224!2d80.96201571504517!3d26.923812083122854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399957cc00000043%3A0xe946d5cb9b782188!2sSoftpro+India+Computer+Technologies+Pvt+Ltd!5e0!3m2!1sen!2sin!4v1563603456557!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="height:70%;width:100%;" allowfullscreen></iframe>
	   </div>
	   <?php
		include('footer.php');
		?>
	   </div>
</body>
</html>