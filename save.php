<?php
	$name=$_POST['name'];
	$email=$_POST['email'];
	$add=$_POST['address'];
	$pin=$_POST['pin'];
	$mob=$_POST['mobile'];
	$loc=$_POST['locality'];
	$altadd=$_POST['altadd'];
	$city=$_POST['city'];
	$propri=$_POST['proprice'];
	$delchg=$_POST['dc'];
	$qty=$_POST['qty'];
	$tpay=$_POST['tp'];
	$pname=$_POST['proname'];
	$proid=$_POST['proid'];

	include("connect.php");

	$query="select * from tbl_product where pro_id='$proid'";
	$res=mysql_query($query);
	$row=mysql_fetch_array($res);
	$allqty=$row['peice'];
	
	if($qty>$allqty)
	{
		echo "<script>alert('Sorry! We are out off Stock');window.location.href='purchasenow.php?proid=$proid&qty=$qty';</script>";
	}
	else
	{
		$query1="insert into tbl_buy(name,email,address,pin,mob,loc,altadd,city,propri,delchg,qty,tpay,proname,pro_id,date) values ('$name','$email','$add','$pin','$mob','$loc','$altadd','$city','$propri','$delchg','$qty','$tpay','$pname','$proid',curdate())";
		//echo $query1;
		$check=mysql_query($query1);
		if($check==true)
		{
			$buy_pkid=mysql_insert_id();
			$newqty=$allqty-$qty;

			$query2="update tbl_product set piece='$newqty' where pro_id='$proid'";
			$check2=mysql_query($query2);
			if($check2=true)
			{
				echo "<script>window.location.href='payment.php?buyid=$buy_pkid';</script>";
			}
			else
			{
				echo "Update error";
			}
		}
		else
		{
			echo "Insert error";
		}
	}
?>