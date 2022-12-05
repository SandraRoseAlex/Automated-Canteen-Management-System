<?php
session_start();
include('connect.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//Load Composer's autoloader
require 'vendor/autoload.php';
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';



function send_password_reset($get_name,$get_email,$token)
{
    $mail=new PHPMailer(true);
    //$mail->SMTPDebug=2;
   // $mail->isSMTP();
    $mail->SMTPAuth=true;

    $mail->Host="smtp.gmail.com";
    $mail->username="karimafsal772@gmail.com";
    $mail->password="ronrviitukqprmld";

    $mail->SMTPSecure="ssl";
    $mail->port=465;

    $mail->setFrom("karimafsal772@gmail.com",$get_name);
    $mail->addAddress($get_email);

    $mail->isHTML(true);
    $mail->Subject="Reset Password Notification ";

    $email_template="
    <h2>Hello</h2>
    <h3>You are receiving this mail because we receieved a password reset request for your account.</h3>
    <br/><br/>
    <a href='http://localhost/minipro/passwordchange.php?token=$token&email=$get_email'>Click Me</a>
    ";

    $mail->Body=$email_template;
    $mail->send();
    echo"
    <script>
alert('We e-mailed you a password reset link ....');
window.location.href='login.php';
</script>
";

}


if(isset($_POST['reset']))
{
$email=mysqli_real_escape_string($conn,$_POST['email']);
$token=md5(rand());

$check_email="SELECT email FROM user WHERE email='$email' LIMIT 1";
$check_email_run=mysqli_query($conn,$check_email);

 if(mysqli_num_rows($check_email_run)>0)
 {
   $row=mysqli_fetch_array($check_email_run);
   $get_name="LMCST CANTEEN";
   $get_email=$row['email'];

   $update_token="UPDATE user SET verify_token='$token' WHERE email='$get_email' LIMIT 1";
   $update_token_run=mysqli_query($conn,$update_token);

      if($update_token_run)
      {
        send_password_reset($get_name,$get_email,$token);
        $_SESSION['status']="We e-mailed you a password reset link";
        header("Location: reset.php"); 
        exit(0);
      }
      else
       {
        $_SESSION['status']="Something went wrong.#1";
        header("Location: reset.php"); 
        exit(0);
       }
 }
 else 
  {
    $_SESSION['status']="No Email Found";
    header("Location: reset.php"); 
    exit(0);
  }
}

if(isset($_POST['password_update']))
{
  $email=mysqli_real_escape_string($conn,$_POST['email']);
  $new_password=mysqli_real_escape_string($conn,$_POST['new_password']);
  $confirm_password=mysqli_real_escape_string($conn,$_POST['confirm_password']);

  $token=mysqli_real_escape_string($conn,$_POST['password_token']);

  if(!empty($token))
  {
     if(!empty($email) && !empty($new_password) && !empty($confirm_password))
     {
        //checking token is valid or not
        $check_token="SELECT verify_token FROM user WHERE verify_token='$token' LIMIT 1";
        $check_token_run=mysqli_query($conn,$check_token);

        if(mysqli_num_rows($check_token_run)>0)
        {
          if($new_password == $confirm_password)
          {
            $update_password="UPDATE user SET password='$new_password' WHERE verify_token='$token' LIMIT 1";
            $update_password_run=mysqli_query($conn,$update_password);

            if($update_password_run)
            {
              $new_token=md5(rand());
              $update_to_new_token="UPDATE user SET verify_token='$new_token' WHERE verify_token='$token' LIMIT 1";
              $update_to_new_token_run=mysqli_query($conn,$update_password);
  
              $_SESSION['status']="New Password Successfully Updated";
              header("Location: login.php"); 
              exit(0);
            }
            else
            {
              $_SESSION['status']="Did not update password. Something went wrong!!";
            header("Location: passwordchange.php?token=$token&email=$email"); 
            exit(0);
            }
          }
          else
          {
            $_SESSION['status']="Password and Confirm Password does not match";
            header("Location: passwordchange.php?token=$token&email=$email"); 
            exit(0);
          }
        }
        else
        {
          $_SESSION['status']="Invalid Token";
      header("Location: passwordchange.php?token=$token&email=$email"); 
      exit(0);
        }
     }
     else
     {
      $_SESSION['status']="All Fields Are Mandatory";
      header("Location: passwordchange.php?token=$token&email=$email"); 
      exit(0);
     }
  }
  else
  {
    $_SESSION['status']="No Token Available";
    header("Location: passwordchange.php"); 
    exit(0);
  }

}

?>