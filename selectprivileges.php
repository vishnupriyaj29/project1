<?php include 'config.php';
include 'navbar.php';

if(!isset($_SESSION['username']) || ($_SESSION['role'] == 'user')) {
	header('location:logout.php');
}

$username = $_GET['user'];
$sql = "SELECT * FROM `privilege` WHERE `privilege`.`username` = '$username'";
$res = mysqli_query($conn ,$sql);
$retval = mysqli_fetch_assoc($res); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Select columns to give edit access</title>
	<link rel="stylesheet" type="text/css" href= "stylesheets/table.css">
</head>

<body>
	<form action="" method="post">
		<table style="width:500px;">
			<tr class="head">
				<td colspan="2" style="font-size: 20px"><b>PRIVILEGES</b></td>
			</tr>

      <tr class="head2">
				<td style="font-size: 15px"><b>Field Name</b></td>
        <td style="font-size: 15px" ><b>Privilege</b></td>
      </tr>

      <tr class="odd">
        <td>UNDERGRADUATES</td>
        <td><input type="hidden" name="privilege[undergraduate]" value="0">
					 <input type="checkbox" name="privilege[undergraduate]" value="1"
					 <?php echo ($retval['undergraduate']) ? "checked":""; ?>></td>
      </tr>

      <tr class="even">
				<td>POST-GRADUATES</td>
        <td><input type="hidden" name="privilege[post_graduate]" value="0">
					 <input type="checkbox" name="privilege[post_graduate]" value="1"
					 <?php echo ($retval['post_graduate']) ? "checked":""; ?>></td>
      </tr>
       <tr class="odd">
        <td>FACULTY</td>
        <td><input type="hidden" name="privilege[faculty]" value="0">
					 <input type="checkbox" name="privilege[faculty]" value="1"
					 <?php echo ($retval['faculty']) ? "checked":""; ?>></td>
      </tr>
		</table>

		

		<p align='center'>
			<input class="btn btn-primary" type="submit" value="SUBMIT" name="submit">
		</p>
	</form>
</body>
</html>

<?php if (isset($_POST['submit'])) {

	if (!empty($_POST['privilege'])) {
		$sql = "UPDATE `admintable` SET `role` = 'editor' WHERE `admintable`.`username` = '$username'";
		$result = mysqli_query($conn, $sql);

		foreach ($_POST['privilege'] as $key => $value) {
			$sql = "UPDATE `privilege` SET `$key` = '$value' WHERE `privilege`.`username` = '$username'";
			$result = mysqli_query($conn ,$sql);
		}
	}
	echo "<script>alert('Privilege Edit Successful');
	document.location.href='usertable.php'</script>";
} ?>
