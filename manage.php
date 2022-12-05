<?php
session_start();


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(isset($_POST['add']))
	{
		//print_r($_SESSION['cart']); exit;
		if(isset($_SESSION['cart']))
		{
			$myitems=array_column($_SESSION['cart'], 'Item_Name');
			
			if(in_array($_POST['Item_Name'],$myitems))
			{
					print_r($_SESSION['cart']);
			
					echo"<script>
					 alert('Item already added!');
					 window.location.href='header.php';
					</script>";
			}
			else
			{
				

				$count=count($_SESSION['cart']);
				$_SESSION['cart'][$count]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
					//echo $_SESSION['cart']; exit;
					echo"<script>
					alert('Item added to cart!');
					window.location.href='header.php';
					</script>";
			}
			
		}
		else
		{
			$SESSION['cart'][0]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);

					echo"<script>
					 alert('Item added to cart!');
					 window.location.href='header.php';
					</script>";		
		}
	}
	if(isset($_POST['remove']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($value['Item_Name']==$_POST['Item_Name'])
			{
				unset($_SESSION['cart'][$key]);
				$_SESSION['cart']=array_values($_SESSION['cart']);
				echo"<script>
				       alert('Item removed from the cart!!');
				       window.location.href='mycart.php';
			                    </script>";		
			}
		}
	}
}

?>

