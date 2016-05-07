<?php
	include('sessioncheck.php');
	include('db.php');

	$q = "select * from info where eml = '".$_SESSION['username']."'";
	$r = mysqli_query($cn,$q);
	$res = mysqli_fetch_row($r);
	
?>

<html>
<link rel="icon" type="images/png" href="images/favicon.png">
	<head>
		<title>Tradfashion</title>
		<link rel="stylesheet" href="style7.css">

	</head>

	<body>
		<?php include('header1.php'); ?>
			<?php include('left_header.php'); ?>
				<?php include('right_header.php'); ?>
		
		<div id="content">
			<div id="form">
				<table cellspacing="5" cellpadding="5">
					<div style="font-size: 100%; float: right; margin-right: 40; padding-bottom:10px; padding-right:10px;"><?php echo "<b>Welcome &emsp;".$_SESSION['username']; ?></div>
					<h3>Registration Form</h3>
						<tr>
							<td>Photo</td>
							<td><img src="<?php echo $res[9]; ?>" height="50px" width="50px"></td>
						</tr>

						<tr>
							<td>First Name</td>
							<td><?php echo $res[1]; ?></td>		
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
							<td><input type="radio" name="gender" value="male" <?php if($res[7] == 'male') { ?>  checked="checked"<?php } ?>>Male
							<input type="radio" name="gender" value="female" <?php if($res[7] == 'female') { ?>  checked="checked"<?php } ?>>Female</td>
										
						</tr>

						<tr>
							<td>City</td>
							<td><select name="city">
								<option value=""></option>
								<option <?php if($res[8] == 'Ahmedabad') { ?> selected="selected" <?php } ?> value="Ahmedabad">Ahmedabad</option>

								<option <?php if($res[8] == 'Asansol') { ?> selected="selected" <?php } ?> value="Asansol">Asansol</option>

								<option <?php if($res[8] == 'Bengaluru') { ?> selected="selected" <?php } ?> value="Bengaluru">Bengaluru</option>

								<option <?php if($res[8] == 'Chennai') { ?> selected="selected" <?php } ?> value="Chennai">Chennai</option>


								<option <?php if($res[8] == 'Delhi') { ?> selected="selected" <?php } ?> value="Delhi">Delhi</option>
								
								<option <?php if($res[8] == 'Durgapur') { ?> selected="selected" <?php } ?> value="Durgapur">Durgapur</option>
						
								<option <?php if($res[8] == 'Hyderabad') { ?> selected="selected" <?php } ?> value="Hyderabad">Hyderabad</option>

								<option <?php if($res[8] == 'Jamshedpur') { ?> selected="selected" <?php } ?> value="Jamshedpur">Jamshedpur</option>

								<option <?php if($res[8] == 'Kolkata') { ?> selected="selected" <?php } ?> value="Kolkata">Kolkata</option>

								<option <?php if($res[8] == 'Mumbai') { ?> selected="selected" <?php } ?> value="Mumbai">Mumbai</option>

								<option <?php if($res[8] == 'Nagpur') { ?> selected="selected" <?php } ?> value="Nagpur">Nagpur</option>

								<option <?php if($res[8] == 'Patna') { ?> selected="selected" <?php } ?> value="Patna">Patna</option>

								<option <?php if($res[8] == 'Pune') { ?> selected="selected" <?php } ?> value="Pune">Pune</option>

								<option <?php if($res[8] == 'Ranchi') { ?> selected="selected" <?php } ?> value="Ranchi">Ranchi</option>

								<option <?php if($res[8] == 'Surat') { ?> selected="selected" <?php } ?> value="Surat">Surat</option>

								<option <?php if($res[8] == 'Visakhapatnam') { ?> selected="selected" <?php } ?> value="Visakhapatnam">Visakhapatnam</option>
						</select></td>
						</tr>

						<tr>
							<td>Download Resume</td>
							<td><a href="<?php echo $res[10]; ?>" target="_blank">Click Here</a></td>
						</tr>



				</table>
			</div>
		</div>
	</body>
</html>