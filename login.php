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

		<?php include_once('header.php');?>
		<div id="content">
			<div id="form">
				<form action="logincheck.php" method="post">
					<h2>Login</h2>
					<table cellpadding="5" cellspacing="5">

						<tr>
							<td>Username: </td>
							<td><input type="text" name="un" required> </td>
						</tr>

						<tr>
							<td>Password: </td>
							<td><input type="password" name="pwd" required> </td>
						</tr>

						<tr>
							<td>Login: </td>
							<td><input type="submit" name="submit" value="Login"> </td>
						</tr>
					</table>
				</form>
			</div>
		</div>
		</div>

		<?php include_once('right_header.php'); ?>

	</body>
</html>