<?php 

session_start(); 

include('connect.php');


if ($_SERVER["REQUEST_METHOD"]=="POST")
{
	$email=$_POST["email"];
	$pass=$_POST["psw"];

	$sql="SELECT * FROM user WHERE email='$email' AND password='$pass'" ;

	$result=mysqli_query($conn,$sql);
	
	$row=mysqli_fetch_array($result);

	if($row["rank"]=="0")
	{

		header("location:header.php");
	}
	elseif($row["rank"]=="1")
	{

		header("location:admin.php");
	}
	else
	{
		echo '<script> 
			alert("Invalid email or password!!")
			window.location.href="login.php";
			</script>';
	}
	
	
}
?>