<?php include 'navbar.php';
include 'config.php';

$campus = $_SESSION['campus'];
$school_name = $_SESSION['school_name'];

if ($school_name == 'admin') {
	$school_name = $_GET['school_name'];
}

$sql = "SELECT *  FROM `$campus` WHERE `school_name` = '$school_name'";
$retval = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($retval);
$total_stud = $row['ugtotal'] + $row['pgtotal'];
$assis_prof = $row['with_phd'] + $row['without_phd'];
$approv_total_stud = $row['approv_ugtotal'] + $row['approv_pgtotal'];
$stud_fac_ratio = number_format($total_stud / $row['factotal'],3);
$prof_ratio1 = number_format($row['professor']/ $row['professor'],1);
$prof_ratio2 = number_format($row['assoc_prof']/ $row['professor'],1);
$prof_ratio3 = number_format($assis_prof/ $row['professor'],1);
?>


<!DOCTYPE html>
<html>
<head>
<title>Display Page (user1)</title>
<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="stylesheets/tab.css">

</head>
<body>
	<?php echo "<h1 class='test'>".$school_name.', '.$campus."</h1>"; ?>
	<form>
		<div id="form-group">
			<label class="form-group" id="ug">UG : </label>
				<?php
			echo "<label class='form-group'>First Year </label>&nbsp&nbsp&nbsp&nbsp";
			echo "<input class='box' type='text' name='ug1' value='".$row['ug1']."' readonly>";
			echo "<label class='form-group'>Second Year </label>&nbsp&nbsp&nbsp&nbsp";
			echo "<input class='box' type='text' name='ug2' value='".$row['ug2']."' readonly>";
			echo "<label class='form-group'>Third Year </label>&nbsp&nbsp&nbsp&nbsp";
			echo "<input class='box' type='text' name='ug3' value='".$row['ug3']."' readonly>";
			echo "<label class='form-group'>Fourth Year </label>&nbsp&nbsp&nbsp&nbsp";
			echo "<input class='box' type='text' name='ug4' value='".$row['ug4']."' readonly>";
			echo "<label class='form-group' id='ug'>Total </label>&nbsp&nbsp&nbsp&nbsp";
			echo "<input class='box' type='text' name='ugtotal' value='".$row['ugtotal']."' readonly><br>";

			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label class='form-group'>2020-2024 </label>&nbsp&nbsp&nbsp&nbsp";
      if ($_SESSION['school_name']=="admin"){
			echo "<input class='box' type='text' name='approv_ug1' style='border-color:#00008B;'
			 value='".$row['approv_ug1']."' readonly>";}
			  else{echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";}
			echo "<label class='form-group'>2019-2023 </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			if ($_SESSION['school_name']=="admin"){
			echo "<input class='box' type='text' name='approv_ug2' style='border-color:#00008B;'
			 value='".$row['approv_ug2']."' readonly>";}
			  else{echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";}
			echo "<label class='form-group'>2018-2022 </label>&nbsp&nbsp&nbsp&nbsp";
			if ($_SESSION['school_name']=="admin"){
			echo "<input class='box' type='text' name='approv_ug3' style='border-color:#00008B;'
			 value='".$row['approv_ug3']."' readonly>";}
			  else{echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";}
			echo "<label class='form-group'>2017-2021 </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			if ($_SESSION['school_name']=="admin"){
			echo "<input class='box' type='text' name='ug4' style='border-color:#00008B;'
			 value='".$row['approv_ug4']."' readonly>";
			echo "<label class='form-group' id='ug'>Total </label>&nbsp&nbsp&nbsp&nbsp";
			echo "<input class='box' type='text' name='approv_ugtotal' style='border-color:#00008B;'
			 value='".$row['approv_ugtotal']."' readonly>";}
			 ?>
		</div><br>

		<div id="form-group">
			<label class="form-group" id="ug">PG : </label>
				<?php
			echo "<label class='form-group'>First Year </label>&nbsp&nbsp&nbsp&nbsp";
			echo "<input class='box' type='text' name='pg1' value='".$row['pg1']."' readonly>";
			echo "<label class='form-group'>Second Year </label>&nbsp&nbsp&nbsp&nbsp";
			echo "<input class='box' type='text' name='pg2' value='".$row['pg2']."' readonly>";
			echo "<label class='form-group'id='ug'>Total </label>&nbsp&nbsp&nbsp&nbsp";
			echo "<input class='box' type='text' name='pgtotal' value='".$row['pgtotal']."' readonly><br>";

			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label class='form-group'>2019-2021 </label>&nbsp&nbsp&nbsp&nbsp";
      if ($_SESSION['school_name']=="admin"){
			echo "<input class='box' type='text' name='approv_pg1' style='border-color:#00008B;'
			 value='".$row['approv_pg1']."' readonly>";}
			 else{echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";}
			echo "<label class='form-group'>2020-2022 </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			if ($_SESSION['school_name']=="admin"){
			echo "<input class='box' type='text' name='approv_pg2' style='border-color:#00008B;'
			 value='".$row['approv_pg2']."' readonly>";
			echo "<label class='form-group' id='ug'>Total </label>&nbsp&nbsp&nbsp&nbsp";
			echo "<input class='box' type='text' name='approv_pgtotal' style='border-color:#00008B;'
			 value='".$row['approv_pgtotal']."' readonly>";}
			?>
		</div><br>

			<div>
			<label class='form-group' id="ug">Student Total : </label>
			<?php echo "&nbsp&nbsp&nbsp&nbsp<input class='box' type='text' name='total_stud'
			 value='".$total_stud."' readonly><br>";
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
      if ($_SESSION['school_name']=="admin"){
			echo "<input class='box' type='text' name='approv_total_stud' style='border-color:#00008B;'
			 value='".$approv_total_stud."' readonly>";} ?>
		</div><br>

			<div>
			<label class='form-group'id="ug" style="color:#6e6bb0;">Student Faculty Ratio : </label>
			<?php echo "&nbsp&nbsp&nbsp&nbsp<input class='box' id='ug' type='text' style='width:500px;text-align:center;border-color:#6e6bb0;' name='stu_ratio' value='".$stud_fac_ratio."' readonly>"; ?>
		</div><br>

		<div>
			<label class='form-group' id="ug">Faculty Total : </label>
			<?php echo "&nbsp&nbsp&nbsp&nbsp<input class='box' type='text' name='factotal'
			 value='".$row['factotal']."' readonly>"; ?>
		</div><br>

		<div>
			<label class='form-group' id="ug">Carder Ratio : </label>
			 <?php echo "&nbsp&nbsp&nbsp&nbsp<input class='box' id='ug' style='width:150px;'
			  type='text' name='fac_phd' value='".$prof_ratio1.' : '.$prof_ratio2.' : '.$prof_ratio3."' readonly>"; ?>
		</div><br>

		<div>

			<?php
			echo "<label class='form-group' id='ug'>Professor : </label>&nbsp&nbsp&nbsp&nbsp";
			echo "<input class='box' type='text' name='prof' value='".$row['professor']."' readonly>";

			echo "<label class='form-group' id='ug'>Associate Professor : </label>&nbsp&nbsp&nbsp&nbsp";
			echo "<input class='box' type='text' name='assoc_prof' value='".$row['assoc_prof']."' readonly>";

            echo "<div  ><label id='ug' class='form-group' >Assistant Professor : </label>
            &nbsp&nbsp&nbsp&nbsp;
			 <input class='box' type='text' name='assis_prof' value='".$assis_prof."' readonly>
                           <label id='ug' class='form-group' >With Phd : </label>
                                       &nbsp&nbsp&nbsp&nbsp;
			 <input class='box' type='text' name='with_phd' value='".$row['with_phd']."' readonly>
                           <label id='ug' class='form-group' >Without Phd : </label>
                                       &nbsp&nbsp&nbsp&nbsp;
			 <input class='box' type='text' name='without_phd' value='".$row['without_phd']."' readonly>
            </div>"
            

			 ?>
		</div><br>
	</form>
</body>
</html>
