<?php
session_start();
if(@$_REQUEST['qty']=="")
{
	$qty=1;
}
else
{
	$qty=$_REQUEST['qty'];
}
?>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<style>
.button
{
	background-color:#0078d7;color:white;border-radius:3px;border:none;margin-top:40px;margin-left:80px;
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
.middle
{
	
	width:100%;
	height:100%;
	//background-color:#76b9ed;
	
}

.R1
{
	width:40%;
	height:280px;
	box-shadow:0px 0px 5px grey;
	float:right;
	margin-right:17%;

}
.R11
{
	margin-top:50px;
	margin-left:20px;
}
.L1
{
	width:40%;
	height:300px;
	//background-color:pink;
	box-shadow:0px 0px 5px grey;
	float:left;
	//border:1px solid;
}
.L11
{
	height:250px;
	weidth:40%;
	border:1px dotted;
	float:left;
}
.L12
{
	height:250px;
	width:75%;
	//border:1px solid;
	float:right;
}
.show
{
	margin-top:20px;
	margin-left:20px;
}
.plus
{
	height:50px;
	width:100%;
	border:1px dotted;
	float:left;
	margin-top:2px;
}

.plus div{
	float:left;
}


</style>

</head>
<body>

<?php
include("connect.php");
$proid=$_REQUEST['proid'];
$query="select * from tbl_product where pro_id='$proid'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<?php
 include('usermenu.php');
?>
<?php
$query2="select * from tbl_product where pro_id='$proid'";
$res2=mysql_query($query2);
if($row2=mysql_fetch_array($res2,MYSQL_BOTH))
{
?>
<center>
<div class="outer">

<div class="middle">
	<div class="L1">
	<div class="L11">
	<img src="admin/product/<?php echo $row['pic']; ?>" height="150px"width="120px" style="position:relative;top:50px;"/>
	</div>
	<div class="L12">
	<div class="show">
	<b>PRODUCT:-</b> 
	<?php echo $row['name'];?>
	</br></br>
	<b>DESCRIPTION:-</b>
	<?php echo $row['description'];?>
	</br></br>
	<b>PRICE:-</b>
	&#8377;&nbsp;<span id="pri"><?php echo $row['price'];?></span>
	</br></br>
		</div>
				</div>
				<div class="plus">
				<div class="pleft" style="width:30%;left:20px;position:relative;top:10px;color:red;">
				<button style="width:30%" onclick="minus();"><b>-</b></button>
				</div>
				<div id="qty"style="width:40%;position:relative;left:50px;top:10px;color:#4a8af4">
				<b><?php echo $qty; ?></b>
				</div>
				<div class="pright" style="width:30%;position:relative;left:20px;top:8px;color:red;">
				<button style="width:30%" onclick="add()";><b>+</b></button>
				</div>
		</div>
		
			</div>
			
	
	<div class="R1">
	<h3 style="margin-left:50px;">PRICE DETAILS</h3>
	  <div class="R11">
	<form action="purchasenow.php" method="post">
	<input type="hidden" name="proid" value="<?php echo $proid;?>"/>
	<table>
	<tr>
	 <td>QUANTITY:</td>
	 <td><input type="text" style="width:80%;" id="q"  name="qty" readonly value="<?php if($qty!=0) echo $qty;?>"/></td>
	</tr>
	<tr>
	<td>PRICE:</td>
	<td><input type="number" style="width:80%;" id="p" name="pri" readonly value="<?php if($qty!=0) echo $qty*$row['price'];?>"/></td>
	</tr>
	<tr>
	<td>DELIVERY CHARGE:
	</td>
	<td>
	<input type="text" style="width:80%;" name="dc" readonly value="+ &nbsp;<?php $dc=50; echo $dc;?>"/>
	</td>
	</tr>
	<tr>
	<td>TOTAL:
	</td>
	<td><input id="total" type="number" name="tp" style="width:80%"; readonly value="<?php if($qty!=0) echo $qty*$row['price']+50; ?>"/>
	</td>
	</tr>
	
	<tr>
	<td><input type="submit" value="Purchase" class="button"/></td>
	</tr>
	</table>
	</form>
		</div>
	</div>
<?php
}
}
?>
</div>
<?php
include('footer.php');
?>
</div>
<script src="js/buynow.js"></script>
</body>
</html>