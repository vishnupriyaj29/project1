<?php

session_start();
include 'config.php';

$frstname = $_POST['frstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$campus = $_POST['campus'];
$conf_passwrd = $_POST['confirm_password'];
$school_name = $_POST['school_name'];
$usrname_error = "Username already taken";
$passwrd_error = "Password Not Matched";

$sql = "SELECT * FROM `userdata` WHERE `username` = '$username' ";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

if($num == 1) {
	$_SESSION['usrname_error'] = $usrname_error;
	header('location:register.php');
}
elseif ($conf_passwrd != $password){
	$_SESSION['passwrd_error'] = $passwrd_error;
	header('location:register.php');
}
else {
	$reg = "INSERT INTO `userdata` (`frstname`, `lastname`, `username`, `password`,
		`email`, `contact`, `campus`, `school_name`) VALUES ('$frstname',
		'$lastname', '$username', '$password', '$email', '$contact', '$campus',
		'$school_name')";
	$result = mysqli_query($conn, $reg);


	if ($result) {
		header('location:login.php');
	}
} ?>
