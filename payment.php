<?php
session_start();
$buyid=$_REQUEST['buyid'];
?>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
	<style>
	.outer
{
height:auto;
width:100%;
border:1px solid white;
//margin:0px auto;
}
		.pur
		{
			height: 90%;
			width: 100%;
		}
		.lpur
		{
			height: 90%;
			width: 45%;
			float: left;
			margin-left: 10px;
			margin-top: 20px;
		}
		.rpur
		{
			height: 65%;
			width: 30%;
			float: right;
			border: 1px solid grey;
			padding-left: 5%;
			padding-top: 1%;
			margin-top: 5%;
			margin-right: 10%;
		}
		.card
		{
			height: 40%;
			width: 100%;
			margin-top: 80px;
			border: 1px solid grey;
		}
		.lcard
		{
			height: 100%;
			width: 30%;
			float: left;
			border-right: 1px solid grey;
		}
		.rcard
		{
			height: 100%;
			width: 65%;
			float: left;
			margin-left: 20px;
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
	<?php include("usermenu.php"); ?>
	<div class="pur">
		<h3 align="center" style="position: relative;top: 20px;margin-top: 0px;"><input type="radio" checked/>Cash On Delivery</h3>
		<div class="lpur">
			<?php
			include("connect.php");
				$query="select * from tbl_buy where buy_id='$buyid'";
				$res=mysql_query($query);
				if($row=mysql_fetch_array($res,MYSQL_BOTH))
				{
			?>
			<div class="card">
				<div class="lcard">
					<?php 
						$proid=$row['pro_id'];
						$query1="select * from tbl_product where pro_id='$proid'";
						$res1=mysql_query($query1);
						if($row1=mysql_fetch_array($res1,MYSQL_BOTH))
						{
					?>
					<img src="admin/product/<?php echo $row1['pic']; ?>" style="height: 150px;width: 150px;margin-left: 15px;margin-top: 30px;padding: 15px;"/>
					<?php
						}
					?>
				</div>
				<div class="rcard">
					<h5 style="line-height: 2;margin-top: 20px;"><sp1 style="font-weight: bold;font-size: 18px;">Name : </sp1><?php echo $row['proname'];?></h5>
					<h5 style="line-height: 2;"><sp1 style="font-weight: bold;font-size: 18px;">Quantity : </sp1><?php echo $row['qty'];?></h5>
					<h5 style="line-height: 2;"><sp1 style="font-weight: bold;font-size: 18px;">Delivery Charges : </sp1><?php echo $row['delchg'];?></h5>
					<h5 style="line-height: 2;"><sp1 style="font-weight: bold;font-size: 18px;">Total Payable : </sp1><?php echo $row['tpay'];?></h5>
				</div>
			</div>
			<?php
			}
			?>
		</div>
		<div class="rpur">
			<h4 style="line-height: 2;">Name : <?php echo $row['1']; ?></h4>
			<h4 style="line-height: 2;">Email : <?php echo $row['2']; ?></h4>
			<h4 style="line-height: 2;">Address : <?php echo $row['3']; ?></h4>
			<h4 style="line-height: 2;">Pin : <?php echo $row['4']; ?></h4>
			<h4 style="line-height: 2;">Mobile : <?php echo $row['5']; ?></h4>
			<h4 style="line-height: 2;">Location : <?php echo $row['6']; ?></h4>
			<h4 style="line-height: 2;">Alternate Address : <?php echo $row['7']; ?></h4>
			<h4 style="line-height: 2;">City : <?php echo $row['8']; ?></h4>
		</div>
		<form action="confirm.php" method="post">
			<input type="hidden" name="buyid" value="<?php echo $buyid; ?>"/>
			<input type="submit" value="Confirm" style="margin-top: 35%;margin-left: 20px;height: 40px;width: 150px;font-size: 18px;background-color: #037ec4;color: #fff;border:1px solid #037ec4;" />
		</form>
	</div>
	<?php
include('footer.php');
?>
	</div>
</body>
</html>