<?php
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "tradfashion";

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	$enquiry = $_POST['enquiry'];

	$cn = new mysqli($servername,$dbusername,$dbpassword,$dbname);


	if($cn->connect_error)
	{
		die("Connection failed: ".$cn->connect_error);
	}

	if(empty($fname))
	{
		echo "First name cannot be blank";
		die();
	}

	if(empty($lname))
	{
		echo "Last name cannot be blank";
		die();
	}

	if(empty($email))
	{
		echo "Email field cannot be blank";
		die();
	}

	if(empty($tel))
	{
		echo "Contact field cannot be blank";
		die();
	}

	if(empty($enquiry))
	{
		echo "First message field cannot be blank";
		die();
	}

	$sql = "insert into contact_info(First_Name, Last_Name, Email, Tel, Enquiry) values('$fname','$lname','$email','$tel','$enquiry')";
	

	if($cn->query($sql) === true)
	{
		
		?>
			<script>
				alert("Success! Your requirement have been sent to our web team. Please allow 24 hours for our response.");
				window.location = "contact.php";
			</script>
		<?php
	}
	else
	{
		?>
		<script>
				alert("Sorry! Your requirement have not been sent to our web team. Please ensure you have filled in the form correctly");
				window.location = "contact.php";
			</script>
		<?php

		
		
	}

	$cn->close();

?>