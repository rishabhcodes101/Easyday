<?php
session_start();
$email=$_SESSION['user'];
include('connect.php');

	include("usermenu.php");

?>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
	<style>
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
			margin-left: 60px;
			margin-top: 35px;
		}
		.rpur
		{
			height: 90%;
			width: 45%;
			float: right;
			margin-right: 60px;
			margin-top: 35px;	
		}
		.card
		{
			height: 40%;
			width: 100%;
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
	</style>
</head>
<body>
	<form action="save.php" method="post">
	<div class="pur">
		<div class="lpur">
			<?php
			include('connect.php');
			$query="select * from tbl_register where email='$email'";
			$res=mysql_query($query);
			if($row=mysql_fetch_array($res,MYSQL_BOTH))
			{
			?>
			<table align="center" style="width: 80%;height: 50px;">
				<tr>
					<td style="border-bottom: 1px solid grey;padding-bottom: 20px;"><h4>Name</h4></td>
					<td style="border-bottom: 1px solid grey;padding-bottom: 20px;"><input type="text" name="name" value="<?php echo $row['1']; ?>" style="padding-left: 20px;width: 100%;height: 40px;border-radius: 0px;margin-top: 10px;border: 1px solid #000;"/></td>
				</tr>
				<tr>
        			<td style="border-bottom: 1px solid grey;padding-bottom: 20px;"><h4>Email</h4></td>
        			<td style="border-bottom: 1px solid grey;padding-bottom: 20px;"><input type="email" name="email" value="<?php echo $row['4']; ?>"  style="padding-left: 20px;width: 100%;height: 40px;border-radius: 0px;margin-top: 10px;border: 1px solid #000;"/></td>
      			</tr>
      			<tr>
        			<td style="border-bottom: 1px solid grey;padding-bottom: 20px;"><h4>Address</h4></td>
        			<td style="border-bottom: 1px solid grey;padding-bottom: 20px;"><textarea name="address" style="padding-left: 20px;width: 100%;;height: auto;border-radius: 0px;margin-top: 10px;border: 1px solid #000;" required><?php echo $row['6']; ?></textarea></td>
      			</tr>
      			<tr>
       				<td style="border-bottom: 1px solid grey;padding-bottom: 20px;"><h4>Pincode</h4></td>
        			<td style="border-bottom: 1px solid grey;padding-bottom: 20px;"><input type="text" name="pin" value="<?php echo $row['7']; ?>"  style="padding-left: 20px;width: 100%;height: 40px;border-radius: 0px;margin-top: 10px;border: 1px solid #000;"/></td>
      			</tr>
      			<tr>
        			<td style="border-bottom: 1px solid grey;padding-bottom: 20px;"><h4>Mobile</h4></td>
        			<td style="border-bottom: 1px solid grey;padding-bottom: 20px;"><input type="text" name="mobile" value="<?php echo $row['8']; ?>"  style="padding-left: 20px;width: 100%;height: 40px;border-radius: 0px;margin-top: 10px;border: 1px solid #000;"/></td>
      			</tr>
      			<tr>
        			<td style="border-bottom: 1px solid grey;padding-bottom: 20px;"><h4>Locality</h4></td>
        			<td style="border-bottom: 1px solid grey;padding-bottom: 20px;"><input type="text" name="locality" value="<?php echo $row['9']; ?>"  style="padding-left: 20px;width: 100%;height: 40px;border-radius: 0px;margin-top: 10px;border: 1px solid #000;"/></td>
      			</tr>
      			<tr>
        			<td style="border-bottom: 1px solid grey;padding-bottom: 20px;"><h4>Alternative Address</h4></td>
        			<td style="border-bottom: 1px solid grey;padding-bottom: 20px;"><input type="text" name="altadd" style="padding-left: 20px;width: 100%;height: 40px;border-radius: 0px;margin-top: 10px;border: 1px solid #000;"/></td>
      			</tr>
      			<tr>
        			<td style="border-bottom: 1px solid grey;padding-bottom: 20px;"><h4>City</h4></td>
        			<td style="border-bottom: 1px solid grey;padding-bottom: 20px;"><input type="text" name="city" style="padding-left: 20px;width: 100%;height: 40px;border-radius: 0px;margin-top: 10px;border: 1px solid #000;"/></td>
      			</tr>
			</table>
			<?php
			}
			?>			
		</div>
		<div class="rpur">
			<?php
				$proid=$_POST['proid'];
				$qty=$_POST['qty'];
				$price=$_POST['pri'];
				$dc=$_POST['dc'];
				$tp=$_POST['tp'];
				$query1="select * from tbl_product where pro_id='$proid'";
				$res1=mysql_query($query1);
				if($row1=mysql_fetch_array($res1,MYSQL_BOTH))
				{
			?>
			<div class="card">
				<div class="lcard">
					<img src="admin/product/<?php echo $row1['pic']; ?>" style="height: 150px;width: 150px;border: 1px solid grey;margin-left: 10px;margin-top: 30px;border-radius: 50%;padding: 15px;"/>
				</div>
				<div class="rcard">
					<h5 style="line-height: 2;margin-top: 20px;"><sp1 style="font-weight: bold;font-size: 18px;">Name : </sp1><?php echo $row1['name'];?></h5>
					<input type="hidden" name="proid" value="<?php echo $proid?>"/>
					<input type="hidden" name="proname" value="<?php echo $row1['name'];?>"/>
					<h5 style="line-height: 2;"><sp1 style="font-weight: bold;font-size: 18px;">Quantity : </sp1><?php echo $qty;?></h5>
					<input type="hidden" name="qty" value="<?php echo $qty;?>"/>
					<h5 style="line-height: 2;"><sp1 style="font-weight: bold;font-size: 18px;">Delivery Charges : </sp1><?php echo $dc;?></h5>
					<input type="hidden" name="dc" value="<?php echo $dc;?>"/>
					<h5 style="line-height: 2;"><sp1 style="font-weight: bold;font-size: 18px;">Total Payable : </sp1><?php echo $tp;?></h5>
					<input type="hidden" name="tp" value="<?php echo $tp;?>"/>
					<input type="hidden" name="proprice" value="<?php $proprice=$tp-50; echo $proprice;?>"/>
				</div>
			</div>
			<?php
				}
			?>

			<a href="buynow.php?qty=<?php echo$qty; ?>&proid=<?php echo $proid ?>" style="position: relative;top: -80px;font-size: 18px;">Manage Quantity</a>

			<input type="submit" value="Save & Continue" style="margin-top: 100px;width: 40%;height: 50px;font-size: 20px;margin-left: 10%;border:1px solid #037ec4;background-color: #037ec4;color: #fff;border-radius: 25px;">
		</div>
	</div>
</form>
</body>
</html>