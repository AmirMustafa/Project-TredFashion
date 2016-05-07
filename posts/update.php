<?php
	include('sessioncheck.php');
	include('db.php');

	$fn = $_REQUEST['fn'];						
	$mn = $_REQUEST['mn'];
	$ln = $_REQUEST['ln'];
	$mob = $_REQUEST['mob'];
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

	$q = "update info set fn='$fn',mn='$mn',ln='$ln', mobile='$mob',gender='$gender',city='$city',img = '$img_dest', cv = '$cv_dest' where eml = '".$_SESSION['username']."'   ";

	$rs = mysqli_query($cn,$q) or exit(mysqli_error($cn));

	if($rs)
	{
		?>
			<script>
				alert('Updated Succesfully');
				window.location = "user_page.php";
			</script>
		<?php
	}
	else
	{
		?>
			<script>
				alert('Error! Please Update Again!');
				window.location = "edit_pro.php";
			</script>
		<?php
	}


?>