<?php session_start();

if(!isset($_SESSION['username'])) {
	header('location:logout.php');
}

$school_name = $_SESSION['school_name'];
$otp = $_POST['otp'];
$error = "Wrong OTP Entered";

if ($otp == $_SESSION['otp']) {
	setcookie("username", $_SESSION['username'], time()+24*60*60);

	if ($school_name == 'admin') {
		header("location:home.php");
		die();
	}
  header("location:displaytable.php?school_name=$school_name");
}

else {
  $_SESSION['error'] = $error;
  header('location:otppage.php');
} ?>
