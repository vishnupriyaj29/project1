<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer\src\Exception.php';
require 'PHPMailer\src\PHPMailer.php';
require 'PHPMailer\src\SMTP.php';
session_start();


include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];
$error = "Wrong username or password entered";

$sql = "SELECT * FROM `userdata` WHERE `username` = '$username' AND `password` = '$password'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
$retval = mysqli_fetch_assoc($result);
$campus = $retval['campus'];
$school_name = $retval['school_name'];

if ($num == 1) {
	$_SESSION['username'] = $username;
	$_SESSION['campus'] = $campus;
	$_SESSION['school_name'] = $school_name;

	if (isset($_COOKIE['username'])) {
		if ($_COOKIE['username'] == $username)
		{
			if ($retval['school_name'] == 'admin') {
				header("location:home.php");
				die();
			}
			header("location:displaytable.php?school_name=$school_name");
			die();
		}
	}

	$mail = new PHPMailer(true);
	$otp = rand(100000, 999999);

	$mail->SMTPDebug = 0;
	$mail->isSMTP();
	$mail->Host       = 'smtp.gmail.com;';
	$mail->SMTPAuth   = true;
	$mail->Username   = 'emailforphp53@gmail.com';
	$mail->Password   = 'dummy.account';
	$mail->SMTPSecure = 'tls';
	$mail->Port       = 587;

	$mail->setFrom('emailforphp53@gmail.com', 'Web App');
	$mail->addAddress($retval['email']);

	$mail->isHTML(true);
	$mail->Subject = 'OTP for login';
	$mail->Body    = "Your One Time Password is <b>".$otp."</b>";
	$mail->AltBody = 'Body in plain text for non-HTML mail clients';

	try {
	  $mail->send();
		$_SESSION['otp'] = $otp;
	  header('location:otppage.php');
	} catch (Exception $e) {
	  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
}

else {
	$_SESSION['error'] = $error;
	header('location:login.php');
}
?>
