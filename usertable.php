<?php include 'config.php';
include 'navbar.php'; 

if(!isset($_SESSION['username']) || ($_SESSION['role'] == 'user')) {
	header('location:logout.php');
} ?>


<!DOCTYPE html>
<html>
<head>
	<title>USER LIST</title>
	<meta charset = "utf-8">
	<link rel="stylesheet" type="text/css" href= "stylesheets/table.css">
</head>

<body>
	<h2>&nbsp;</h2>
	<table id = "display" style="height: 20px;" border="3" width="500" cellspacing="3" cellpadding="8">
		<tbody>
			<th class="head1" style="text-align: center;">First Name</th>
			<th class="head1" style="text-align: center;">Last Name</th>
			<th class="head1" style="text-align: center;">Email</th>
			<th class="head1" style="text-align: center;">Department</th>
			<th class="head1" style="text-align: center;">Give Privilege</th>

			<?php $sql = "SELECT *  FROM `admintable` where `role`!='admin' ";
			$retval = mysqli_query($conn, $sql);
			while ($row=mysqli_fetch_array($retval)) {
				echo '<tr class="head2">';
				echo '<td>'.$row['frstname'].'</td>';
				echo '<td>'.$row['lastname'].'</td>';
				echo '<td>'.$row['email'].'</td>';
				echo '<td>'.$row['branch'].'</td>';
				echo "<td style='padding-top:10px'><p><a href='selectprivileges.php?user=".$row['username']."
				 'class='btn btn-primary'>View / Edit Privilege</a></p></td>";
				echo '</tr>';
			} ?>
       </tbody>
     </table>
   </body>
</html>
