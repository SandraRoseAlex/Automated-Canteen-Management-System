<?php
session_start();
include('connect.php');

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(isset($_POST['purchase']))
	{
		$query1="INSERT INTO ordermanager(fullname, phone_no,adm,paymode) VALUES ('$_POST[fullname]','$_POST[phone]','$_POST[adm]','$_POST[paymode]')";
		if(mysqli_query($conn,$query1))
		{
			$order_id=mysqli_insert_id($conn);
			$query2="INSERT INTO orders(order_id, itemname, price, quantity) VALUES (?,?,?,?)";
			$stmt=mysqli_prepare($conn,$query2);
			if($stmt)
			{
				mysqli_stmt_bind_param($stmt,"isii",$order_id,$Item_Name,$Price,$Quantity);
				foreach($_SESSION['cart'] as $key => $values)
				{
					$Item_Name=$values['Item_Name'];
					$Price=$values['Price'];
					$Quantity=$values['Quantity'];
					mysqli_stmt_execute($stmt);
				}
				unset($_SESSION['cart']);
				echo"<script>
				alert('Your order has been placed successfully!!');
				 window.location.href='header.php';
				</script>";
			exit;
				
			}
			else
			{
				echo"<script>
				alert('error in prepare stmt!');
				 window.location.href='mycart.php';
				</script>";
			}
		}
		else
		{
			echo"<script>
				alert('error!');
				 window.location.href='mycart.php';
				</script>";
		}
	}
}
?>
		