<?php
	include('../db.php');			// Including connection with database from parent folder

	$q = mysqli_query($cn,"delete from info where id=".$_REQUEST['id']);		// delete query

	if($q)			// if true (i.e. user clicks the delete button)
	{
		?>
			<script>			
				alert('Record Deleted!');					// msg for record deletion
				window.location = "admin_page.php";			// redirecting to admin_page.php
			</script>
		<?php
	}
	else	
	{
		?>
			<script>
				alert('Error! Record Not Deleted!');
				window.location = "admin_page.php";
			</script>
		<?php
	}
?>