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
		if(isset($_REQUEST['submit']))
		{
			echo 'Form Submitted Successfully<hr />';

			$p = '/^([a-z]{1,8})$/';
			$p1 = '/^(([a-zA-Z]{1,10})([@]{1,1})([a-z]{5,6})([.]{1,1})([a-z]{3,3})$/';
			$p2 = '/(^[789]{1,1})+([0-9]{9,9})$/';
			$p3 = '/(^[1-9]{1,1})+([0-9]{0,1})$/';

			$user = $_REQUEST['un'];
			$pwd = $_REQUEST['pwd'];

			if(empty($user))
			{
				echo "Please enter the Username<br/>";
			}

			else if(!preg_match($p,$user))
			{
				echo "Please enter username in the following format<br/>";
			}

			if(empty($pwd))
			{
				echo "Password cannot be empty<br/>";
			}

			else if(!preg_match($p,$pwd))
			{
				echo "Error: Enter correct password<br/>";
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
		}
?>