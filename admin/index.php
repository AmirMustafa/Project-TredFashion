<html xmlns="www.w3c.org/1999/xhtml">
<link rel="icon" type="images/png" href="images/favicon.png">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<link rel="stylesheet" href="../style.css">
		
		<style>
			#log
			{
				margin-left: 350px;
				margin-top: 40px;
				width: 35%;
				height:200px;
				background:#fff4f4;
			}
			#section1
			{
				background: #cd97ea;
				height: 52px;
				padding-top: 1px;
				text-align: center;
			}
			#section2
			{
			padding-left:70px;
			padding-top: 20px;
			border:1px solid #c287d1;
			}

		</style>
	</head>

	<body style="background: #e6e6e6;" >
	<div><a href="../index.php"><b>Back</b></a></div>
		
		<div style="margin-top: 15%; margin-left: 32%;" id="log">
			<div id="section1">
				<h3>Admin Panel Login</h3>
			</div>
			
			<div id="section2">
				<form action="logincheck.php" method="post">		<!-- This is the form page for admin -->
				<table cellpadding="5" cellspacing="5">
		
					<tr>
					<td><img src="images/user.png" />Username</td>
					<td><input type="text" name="un" required></td>
					</tr>

					<tr>
					<td><img src="images/lock.png">Password</td>
					<td><input type="password" name="pwd" required></td>
					</tr>

					<tr>
					<td>Login</td>
					<td><input type="submit" name="submit" value="Login"></td>
					</tr>
					
				</table>
			</form>
			</div>
		</div>
	</body>
</html>