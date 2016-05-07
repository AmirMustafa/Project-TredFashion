<?php
	include_once('../db.php'); 
	$q = mysqli_query($cn,"update cms set page_content = '".addslashes($_REQUEST['content'])."' where page_id =".$_REQUEST['page']) or exit(mysqli_error($cn));

	if($q)
	{
		?>
			<script>
				alert('Content Updated!');
				window.location = "cms.php";
			</script>
		<?php
	}
	else
	{
		{
		?>
			<script>
				alert('Error! Content Not Updated!');
				window.location = "cms.php";
			</script>
		<?php
	}
	}
?>