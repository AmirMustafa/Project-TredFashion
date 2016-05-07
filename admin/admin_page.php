<?php							//Page 19: After Successful admin login it comes to this page i.e. admin_page.php
	include('sessioncheck.php');       // Including sessioncheck.php
	include('../db.php');				// Including db.php from parent directory. Note ../ indicates that												particuler page i.e. db.php is one directory up
?>
<html>
	<head>
		<title>Practical</title>
		<link rel="stylesheet" href="../style5.css">	<!-- Including Ext CSS i.e. style.css from parent directory.																										-->
		
		<script>
			function ask(a)		// javacript is called on line 62 because before deleleting it should ask the msg							Do you really want to delete  
			{
				var x = confirm("Do you really want to delete?");		// confirm box for permission of deletion
				
				if(x == true)		// user have presses yes
				{
					window.location = "delete.php?id="+a;		// here we are passing the id to delete.php. Note													earlier we have not used delete as the user													must not have the access to delete but on the													otherhand admin has the permission of deleting													form the database
				}
				else		// means user cancels the delete operation
				{
					window.location = "admin_page.php";
				}
			}
		</script>

		<style>
			table,tr,th 
			{
				border: 1px solid black;
				border-collapse: collapse;
			}

			table { margin-top: 30px;}
		</style>
	</head>

	<body>
		<?php include('header3.php');  ?>
		<table style="margin-left:115px; margin-top:50px;"cellpadding="10" cellspacing="10">
			<tr>
				<th>View</th>						<!-- this is for the heading   -->
				<th>Delete</th>
				<th>First Name</th>
				<th>Middle Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Password</th>
				<th>Mobile</th>
				<th>Gender</th>
				<th>City</th>
				<th>Image</th>
				<th>Resume</th>
			</tr>
			<?php
				$q = "select * from info";			// query is written to retrieve the data 
				$r = mysqli_query($cn,$q);			// firing the query 
				while($arr = mysqli_fetch_row($r))		// for fetching the data 
				{
					?>
						<tr>
							<th><a href="view.php?id=<?php echo $arr[0]; ?>">View</th>	<!-- through url we are														passing to the view.php page -->
							<th><a onclick="ask(<?php echo $arr[0]; ?>)">Delete</a></th><!-- ask function called-->
							<th><?php echo $arr[1]; ?></th>		<!-- Here we are fetching resp data like 1 for											first name 2 for last name etc.-->
							<th><?php echo $arr[2]; ?></th>
							<th><?php echo $arr[3]; ?></th>
							<th><?php echo $arr[4]; ?></th>
							<th><?php echo $arr[5]; ?></th>
							<th><?php echo $arr[6]; ?></th>
							<th><?php echo $arr[7]; ?></th>
							<th><?php echo $arr[8]; ?></th>
							<th><img src="../<?php echo $arr[9]; ?>" height="25" width="25"></th><!--	../ is used													as image folder is one directory up -->
							<th><a href="../<?php echo $arr[10]; ?>">Resume</a></th>
						</tr>
					<?php
				}
			?>
		</table>
	</body>
</html>