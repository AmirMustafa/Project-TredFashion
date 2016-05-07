<?php
	include_once('sessioncheck.php');
	include_once('../db.php');
?>

<html>
<link rel="icon" type="images/png" href="images/favicon.png">
	<head>
		<link rel="stylesheet" href="../style5.css">

		<style>
			table,th,tr
			{
				border: 1px solid black;
				border-collapse: collapse;
			}
			table
			{
				margin-left: 50px;
				margin-top: 40px;
			}
		</style>

	</head>

	<body>
		<?php include_once('header3.php') ?>
		<h2 style="text-align: center;">Contact Form Client's Enquiry</h2>

		<table style="margin-left:200px; margin-top:50px;"cellpadding="10" cellspacing="10">
			<tr>
				<th style='background: #f1f1ef;'>ID No</h4></th>
				<th style='background: #f1f1ef;'>First Name</h4></th>
				<th style='background: #f1f1ef;'>Last Name</th>
				<th style='background: #f1f1ef;'>Email</th>
				<th style='background: #f1f1ef;'>Telephone</th>
				<th style='background: #f1f1ef;'>Enquiry</th>
				

				<?php
					$q = "select * from contact_info";
					$r = mysqli_query($cn,$q);
					while($arr = mysqli_fetch_row($r))
					{
						?>
							<tr>
								
								<th><?php echo $arr[0]; ?></th>
								<th><?php echo $arr[1]; ?></th>
								<th><?php echo $arr[2]; ?></th>
								<th><?php echo $arr[3]; ?></th>
								<th><?php echo $arr[4]; ?></th>
								<th><?php echo $arr[5]; ?></th>
								
							</tr>

						<?php
					}
				?>
			</tr>
		</table>
	</body>
</html>