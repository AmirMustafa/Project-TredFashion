<?php
	include('sessioncheck.php');		 // Including sessioncheck.php
	include('../db.php');			   	// Including connection with database from parent folder

	$q = "select * from info where id = ".$_REQUEST['id'];	//here in view whatever email id admin selects from his															homepage that particular username's profile should open
	$r = mysqli_query($cn,$q);			// firing above query
	$res = mysqli_fetch_row($r);		// fetching data from database as a result of firing above query
?>

<html>
	<head>
		<title>Practical</title>
		<link rel="stylesheet" href="../style5.css">		<!-- including ext css i.e. style.css from parent's folder																											-->
	</head>

	<body>
		<?php include('../header.php') ?>				<!-- including header file  -->
		<div style="margin-left: 25%;" id="content">
			<div id="form">
				<table width="426" cellpadding="5" cellspacing="5">
					<caption>Registration Form</caption>
					<tr>
						<td>Photo</td>
						<td><img src="../<?php echo $res[9]; ?>" height="50px" width="50px"></td>
					</tr>			<!--  "../" is used as image folder is 1 directory up i.e. in parent folder-->

					<tr>
						<td>First Name</td>
						<td><?php echo $res[1]; ?></td>		<!-- $res contains respective fetched data i.e. $res[1] first name, $res[2] middle name etc. -->
					</tr>

					<tr>
						<td>Middle Name</td>
						<td><?php echo $res[2]; ?></td>
					</tr>

					<tr>
						<td>Last Name</td>
						<td><?php echo $res[3]; ?></td>
					</tr>

					<tr>
						<td>Email/Username</td>
						<td><?php echo $res[4]; ?></td>
					</tr>

					<tr>
						<td>Mobile</td>
						<td><?php echo $res[6]; ?></td>
					</tr>

					<tr>
						<td>Gender</td>
						<td><input type="radio" name="gender" value="male" <?php if($res[7] == 'male') { ?> checked="checked" <?php } ?>>Male
							<input type="radio" name="gender" value="female" <?php if($res[7] == 'female') { ?>   checked="checked" <?php } ?>>Female</td>
					</tr>

					<tr>
						<td height="34">City</td>
						<td><select name="city">
							<option value="">Select</option>

							<option <?php if($res[8] == 'Pune') { ?> selected="selected" <?php } ?> value="Pune">Pune</option>

							<option <?php if($res[8] == 'Mumbai') { ?> selected="selected" <?php } ?> value="Mumbai">Mumbai</option>

							<option <?php if($res[8] == 'Delhi') { ?> selected="selected" <?php } ?> value="Delhi">Delhi</option>
						</select>
					</tr>

					<tr>
						<td>Download Resume</td>
						<td><a href="../<?php echo $res[10]; ?>" target="_blank">Click to Download Resume</a></td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>