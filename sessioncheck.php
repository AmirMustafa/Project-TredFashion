<?php
	ob_start();

	session_start();

	if(!isset($_SESSION['login']))
	{
		?>
			<script>
				alert('You are not Logged in!');
				window.location = "login.php";
			</script>
		<?php
	}
?>