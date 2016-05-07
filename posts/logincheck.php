<?php
	include_once('db.php');
	$user = $_REQUEST['un'];
	$pwd = $_REQUEST['pwd'];

	$q = "select * from info where eml = '$user' and pwd = '$pwd'";
	
	$r = mysqli_query($cn,$q) or exit(mysqli_error($cn));
	$row = mysqli_num_rows($r);

	if($row == 0)
	{
		?>
			<script>
				alert('Invalid username or password!');
				window.location = "login.php"
			</script>
		<?php
	}
	else
	{
		ob_start();
		session_start();

		$_SESSION['username'] = $user;
		$_SESSION['login'] = 1;
		?>
			<script>
				window.location = "user_page.php";
			</script>
		<?php
	}
?>