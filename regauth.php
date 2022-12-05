<?php
include('connect.php');
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $pass=$_POST['psw'];
 
    $sql="SELECT *FROM user WHERE email='$email'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num>0)
    {
        echo '<script>alert("Email already exists!")</script>';

    }
    else
    {
        $insert = "INSERT INTO user (email,password) VALUES ('$email','$pass')";
        mysqli_query($conn,$insert);
        echo '<script>alert("You have successfully registered!")</script>';
      
    }
}
?>