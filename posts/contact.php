<html>
<link rel="icon" type="images/png" href="images/favicon.png">
	<head>
		<link rel="stylesheet" href="../style.css">
		<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>

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
</head>

	<body>
		 <?php include('../header.php');?>
		<?php include('../left_header.php');?>
		<?php include('../right_header.php');?>

			<div id="mid">
				<div id="postpage"> 
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
			</div>
				
			<!--<?php include_once('footer8.php'); ?> -->
	</body>
</html>
