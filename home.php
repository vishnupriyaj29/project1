<?php include 'navbar.php';
include 'config.php';

if(!isset($_SESSION['username'])) {
	header('location:logout.php');
}


$ugtotal = 0;
$ug1 = 0;
$ug2 = 0;
$ug3 = 0;
$ug4 = 0;
$pgtotal = 0;
$pg1 = 0;
$pg2 = 0;
$approv_ugtotal = 0;
$approv_ug1 = 0;
$approv_ug2 = 0;
$approv_ug3 = 0;
$approv_ug4 = 0;
$approv_pgtotal = 0;
$approv_pg1 = 0;
$approv_pg2 = 0;
$professor = 0;
$factotal = 0;
$with_phd = 0;
$without_phd = 0;
$assoc_prof = 0;
$assis_prof = 0;


$campus = $_SESSION['campus'];
$sql = "SELECT *  FROM `$campus`";
$retval = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
	$ug1 = $ug1 + $row['ug1'];
	$ug2 = $ug2 + $row['ug2'];
	$ug3 = $ug3 + $row['ug3'];
	$ug4 = $ug4 + $row['ug4'];

	$approv_ug1 = $approv_ug1 + $row['approv_ug1'];
	$approv_ug2 = $approv_ug2 + $row['approv_ug2'];
	$approv_ug3 = $approv_ug3 + $row['approv_ug3'];
	$approv_ug4 = $approv_ug4 + $row['approv_ug4'];

	$ugtotal = $ugtotal + $row['ugtotal'];
	$approv_ugtotal = $approv_ugtotal + $row['approv_ugtotal'];

	$pg1 = $pg1 + $row['pg1'];
	$pg2 = $pg2 + $row['pg2'];

	$approv_pg1 = $approv_pg1 + $row['approv_pg1'];
	$approv_pg2 = $approv_pg2 + $row['approv_pg2'];

	$pgtotal = $pgtotal + $row['pgtotal'];
	$approv_pgtotal = $approv_pgtotal + $row['approv_pgtotal'];

	$factotal = $factotal + $row['factotal'];
	$professor = $professor + $row['professor'];
	$assoc_prof = $assoc_prof + $row['assoc_prof'];
	$with_phd = $with_phd + $row['with_phd'];
	$without_phd = $without_phd + $row['without_phd'];
}

$assis_prof = $with_phd + $without_phd;
$total_stud = $ugtotal + $pgtotal;
$approv_total_stud = $approv_ugtotal + $approv_pgtotal;
$stud_fac_ratio = number_format($total_stud / $factotal,3);
$prof_ratio1 = number_format($professor/$professor,1);
$prof_ratio2 = number_format($assoc_prof/ $professor,1);
$prof_ratio3 = number_format($assis_prof/ $professor,1);?>


<!DOCTYPE html>
<html>
<head>
<title>Display Page (user1)</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheets/tab.css">
</head>
<body>
	<?php
	if($campus=='ktr'){
		echo"<h1 class='test'>Engineering and Technology, Kattankulathur</h1>";
	}
	elseif($campus=='vdp'){
	echo"<h1 class='test'>Engineering and Technology, Vadapallani</h1>";
	}
	elseif($campus=='rmp'){
	echo"<h1 class='test'>Engineering and Technology, Ramapuram</h1>";
	}
	elseif($campus=='ncr'){
	echo"<h1 class='test'>Engineering and Technology, NCR</h1>";
	}

	?>
	<form>
		<div id="form-group">
			<label class="form-group" id="ug">UG : </label>
			<?php
			echo "<label class='form-group'>First Year </label>&nbsp&nbsp&nbsp&nbsp";
			echo "<input class='box' type='text' name='ug1' value='".$ug1."' readonly>";
			echo "<label class='form-group'>Second Year </label>&nbsp&nbsp&nbsp&nbsp";
			echo "<input class='box' type='text' name='ug2' value='".$ug2."' readonly>";
			echo "<label class='form-group'>Third Year </label>&nbsp&nbsp&nbsp&nbsp";
			echo "<input class='box' type='text' name='ug3' value='".$ug3."' readonly>";
			echo "<label class='form-group'>Fourth Year </label>&nbsp&nbsp&nbsp&nbsp";
			echo "<input class='box' type='text' name='ug4' value='".$ug4."' readonly>";
      echo "<label class='form-group' id='ug'>Total </label>&nbsp&nbsp&nbsp&nbsp";
			echo "<input class='box' type='text' name='ugtotal' value='".$ugtotal."' readonly><br>";

			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label class='form-group'>2020-2024 </label>&nbsp&nbsp&nbsp&nbsp";
			echo "<input class='box' type='text' name='approv_ug1' style='border-color:#00008B;'
			 value='".$approv_ug1."' readonly>";
			echo "<label class='form-group'>2019-2023 </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			echo "<input class='box' type='text' name='approv_ug2' style='border-color:#00008B;'
			 value='".$approv_ug2."' readonly>";
			echo "<label class='form-group'>2018-2022 </label>&nbsp&nbsp&nbsp&nbsp";
			echo "<input class='box' type='text' name='approv_ug3' style='border-color:#00008B;'
			 value='".$approv_ug3."' readonly>";
			echo "<label class='form-group'>2017-2021 </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			echo "<input class='box' type='text' name='approv_ug4' style='border-color:#00008B;'
			 value='".$approv_ug4."' readonly>";
			echo "<label class='form-group' id='ug'>Total </label>&nbsp&nbsp&nbsp&nbsp";
			echo "<input class='box' type='text' name='approv_ugtotal' style='border-color:#00008B;'
			 value='".$approv_ugtotal."' readonly>";
			?>
		</div><br>

		<div id="form-group">
			<label class='form-group'id="ug">PG : </label>
			<?php
			echo "<label class='form-group'>First Year </label>&nbsp&nbsp&nbsp&nbsp";
			echo "<input class='box' type='text' name='pg1' value='".$pg1."' readonly>";
			echo "<label class='form-group'>Second Year </label>&nbsp&nbsp&nbsp&nbsp";
			echo "<input class='box' type='text' name='pg2' value='".$pg2."' readonly>";
			echo "<label class='form-group' id='ug'>Total </label>&nbsp&nbsp&nbsp&nbsp";
			echo "<input class='box' type='text' name='pgtotal' value='".$pgtotal."' readonly><br>";
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label class='form-group'>2019-2021 </label>&nbsp&nbsp&nbsp&nbsp";

			echo "<input class='box' type='text' name='approv_pg1' style='border-color:#00008B;'
			 value='".$approv_pg1."' readonly>";
			echo "<label class='form-group'>2020-2022 </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			echo "<input class='box' type='text' name='approv_pg2' style='border-color:#00008B;'
			 value='".$approv_pg2."' readonly>";
			echo "<label class='form-group' id='ug'>Total </label>&nbsp&nbsp&nbsp&nbsp";
			echo "<input class='box' type='text' name='approv_pgtotal' style='border-color:#00008B;'
			 value='".$approv_pgtotal."' readonly>";
			?>
		</div><br>

		<div>
			<label class='form-group' id="ug">Student Total : </label>
			<?php echo "&nbsp&nbsp&nbsp&nbsp<input class='box' type='text' name='student'
			 value='".$total_stud."' readonly><br>";
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";

			echo "<input class='box' type='text' name='total_stud' style='border-color:#00008B;'
			 value='".$approv_total_stud."' readonly>"; ?>
		</div><br>

		<div>
			<label class='form-group'id="ug" style="color:#6e6bb0;">Student Faculty Ratio : </label>
			<?php echo "&nbsp&nbsp&nbsp&nbsp<input class='box' id='ug' type='text'
			style='width:500px;text-align:center;border-color:#6e6bb0;' name='stu_ratio' value='".$stud_fac_ratio."' readonly>"; ?>
		</div><br>

		<div>
			<label class='form-group' id="ug">Faculty Total : </label>
			<?php echo "&nbsp&nbsp&nbsp&nbsp<input class='box' type='text' name='factotal' value='".$factotal."' readonly>"; ?>
		</div><br>

		<div>
			<label class='form-group'  id="ug">Carder Ratio : </label>
			 <?php echo "&nbsp&nbsp&nbsp&nbsp<input class='box' id='ug' style='width:150px;'
			  type='text' name='fac_phd' value='".$prof_ratio1 .' : '. $prof_ratio2 .' : '. $prof_ratio3 ."' readonly>";
       ?>
		</div><br>

		<div>
			<?php
			echo "<label class='form-group' id='ug'>Professor : </label>&nbsp&nbsp&nbsp&nbsp";
			echo "<input class='box' type='text' name='prof' value='".$professor."' readonly>";
			echo "<label class='form-group' id='ug'>Associate Professor : </label>&nbsp&nbsp&nbsp&nbsp";
			echo "<input class='box' type='text' name='assoc_prof' value='".$assoc_prof."' readonly>";
			echo "<div  ><label id='ug' class='form-group' >Assistant Professor : </label>
             &nbsp&nbsp&nbsp&nbsp;
 			 <input class='box' type='text' name='assis_prof' value='".$assis_prof."' readonly>
                            <label id='ug' class='form-group' >With Phd : </label>
                                        &nbsp&nbsp&nbsp&nbsp;
 			 <input class='box' type='text' name='with_phd' value='".$with_phd."' readonly>
                            <label id='ug' class='form-group' >Without Phd : </label>
                                        &nbsp&nbsp&nbsp&nbsp;
 			 <input class='box' type='text' name='without_phd' value='".$without_phd."' readonly>
             </div>"


			 ?>
		</div>
	</form>
</body>
</html>
