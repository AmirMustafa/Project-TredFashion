<?php
	include('../db.php');				// Including connection with database from parent folder

	$q = "select * from cms where page_id = ".$_REQUEST['id'];	// here we are writing the query for selecting home																		or about from cms
	$res = mysqli_query($cn,$q) or exit(mysqli_error($cn));		// firing the above query
	$cont = mysqli_fetch_assoc($res);							// fetching data of the above query from database
	echo stripslashes($cont['page_content']);					// This removes the backslashes added by the																		addslash() funcn

?>