
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<link rel="icon" type="images/png" href="images/favicon.png">
	<head>
		
		<link rel="stylesheet" href="style.css">
		<?php include_once('header.php'); ?>
		<?php include_once('left_header.php'); ?>
		<style>
			.success
			{
				color: green;
				margin-left: 15px;
			}

			.fail
			{
				color: red;
				margin-left: 15px;
			}
		</style>

		
		<div id="mid">
		<div id="contact_container">
		
		<p font color="black"><h1>Contact Form</h1></p>
	
		
		<form name="registration" method="post" action="connect.php">
			<table width="500" cellpadding="10">	
				<tr>
					<td><strong>First Name:</strong> </td>
					<td><input type="text" name="fname" id="fname" value=""></td>
				</tr>
				<tr>
					<td><strong>Last Name:</strong> </td>
					<td><input type="text" name="lname" id="lname" value=""></td>
				</tr>
				<tr>
					<td><strong>Email:</strong> </td>
					<td><input type="text" name="email" id="email" value=""></td>
				</tr>
				<tr>
					<td><strong>Tel:</strong> </td>
					<td><input type="text" name="tel" id="tel" value=""></td>
				</tr>
				<tr>
					<td><strong>Requirements: </strong></td>
					<td><textarea name="enquiry" id="enquiry" cols="45" rows="5" value=""></textarea></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</form>
		</div>
		</div>
	</head>
	<?php include_once('right_header.php'); ?>
	<?php include_once('footer.php'); ?>
</html>
