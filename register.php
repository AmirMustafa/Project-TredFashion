<?php
	include_once('db.php');

	$fn = $_REQUEST['fn'];
	$mn = $_REQUEST['mn'];
	$ln = $_REQUEST['ln'];
	$eml = $_REQUEST['email'];
	$mob = $_REQUEST['mob'];
	$pwd = $_REQUEST['pwd'];
	$gender = $_REQUEST['gender'];
	$city = $_REQUEST['city'];

	$img_nm = $_FILES['image']['name'];
	$img_src = $_FILES['image']['tmp_name'];
	$img_dest = "img/".$img_nm;
	if(!file_exists('img'))
	{
		mkdir('img');
		move_uploaded_file($img_src,$img_dest);
	}
	else
	{
		move_uploaded_file($img_src,$img_dest);	
	}

	$cv_nm = $_FILES['resume']['name'];
	$cv_src = $_FILES['resume']['tmp_name'];
	$cv_dest = "cv/".$cv_nm;
	if(!file_exists('cv'))
	{
		mkdir('cv');
		move_uploaded_file($cv_src,$cv_dest);
	}
	else
	{
		move_uploaded_file($cv_src,$cv_dest);	
	}

	$q = "insert into info(fn,mn,ln,eml,pwd,mobile,gender,city,img,cv) values('$fn','$mn','$ln','$eml','$pwd','$mob','$gender','$city','$img_dest','$cv_dest')";

	$rs = mysqli_query($cn,$q) or exit(mysqli_error($cn));

	if($rs)
	{
		?>
			<script>
				alert('Registered Successfully!!');
				window.location = "login.php";
			</script>
		<?php
	}
	else
	{
		?>
			<script>
				alert('Error! Please Register Again!');
				window.location = "reg.php";
			</script>
		<?php
	}
?>