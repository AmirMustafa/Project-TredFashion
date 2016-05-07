<html>
<link rel="icon" type="images/png" href="images/favicon.png">
	<head>
		<title>TradFashion</title>
		<link rel="stylesheet" href="style.css">
	</head>

	<body>
		<?php include_once('header.php'); ?>
		<?php include_once('left_header.php'); ?>


		<div id="mid">
		<div id="content">
			<div id="form">
				<form method="post" action="register.php" enctype="multipart/form-data">
					<table width="426" cellpadding="5" cellspacing="5">
						<h2>Registration Form</h2>
						<tr>
							<td>First Name: </td>
							<td><input type="text" name="fn" required></td>
						</tr>

						<tr>
							<td>Middle Name: </td>
							<td><input type="text" name="mn"></td>
						</tr>

						<tr>
							<td>Last Name: </td>
							<td><input type="text" name="ln" required></td>
						</tr>

						<tr>
							<td>Email/Username: </td>
							<td><input type="email" name="email" required></td>
						</tr>

						<tr>
							<td>Password: </td>
							<td><input type="password" name="pwd" required></td>
						</tr>

						<tr>
							<td>Mobile No: </td>
							<td><input type="text" name="mob" required></td>
						</tr>

						<tr>
							<td>Gender: </td>
							<td><input type="radio" name="gender" value="male" required>Male
								<input type="radio" name="gender" value="female">Female</td>
						</tr>

						<tr>
							<td>City: </td>
							<td><select name="city" required>
								<option value="">Select</option>
								<option value="Pune">Ahmedabad</option>
								<option value="Mumbai">Asansol</option>
								<option value="Delhi">Bengaluru</option>
								<option value="Pune">Chennai</option>
								<option value="Pune">Delhi</option>
								<option value="Pune">Durgapur</option>
								<option value="Pune">Hyderabad</option>
								<option value="Pune">Jamshedpur</option>
								<option value="Pune">Kolkata</option>
								<option value="Pune">Mumbai</option>
								<option value="Pune">Nagpur</option>
								<option value="Pune">Patna</option>
								<option value="Pune">Pune</option>
								<option value="Pune">Ranchi</option>
								<option value="Pune">Surat</option>
								<option value="Pune">Visakhapatnam</option>
								</select></td>
						</tr>

						<tr>
							<td>Upload Photo: </td>
							<td><input type="file" name="image" required></td>
						</tr>

						<tr>
							<td>Upload Resume: </td>
							<td><input type="file" name="resume" required></td>
						</tr>

						<tr>
							<td>Register Here : </td>
							<td><input type="submit" name="submit" value="Register"></td>
						</tr>

					</table>
					
				</form>
			</div>
		</div>
		</div>

		<?php include_once('right_header.php'); ?>

	</body>
</html>