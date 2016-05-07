<?php include('db.php'); ?>							<!-- Database connection included-->

<html>
<link rel="icon" type="images/png" href="images/favicon.png">
	<head>
		<title>Practical</title>
		<link rel="stylesheet" href="../style.css">
	</head>

	<body>
		<?php include('../header.php');  ?> 
		<?php include_once('../left_header.php'); ?>
		<?php include_once('../right_header.php'); ?>

			<div id="mid">
				<div id="content">

				<br/><br/>	<h2 style="font-size:25px; margin-left: 120px;">About Us</h2><br/>
				
				<p style="text-align: justify; margin-left: 120px; margin-right: 120px;">
					Tredfashion is the technology which leads in fashion world. This fashion technology includes combination of leading fashion industries such as Hollywood, Bollywood and all others film industries.<br/><br/>
					Our website gives various highlights of styles of todays world. Keeping that in mind we have created different categories such as Hair Styling, Beauty, Celebrity, Latest Trends in Fashion, Gallery which includes different famous personalities, Latest News includes fashion as well as others.<br/><br/>
					Our prime motto is to bring up a mirror in leading fashion to everyone. We are part of one globe comprising of different fashions of the world. We took efforts to make all in one platform i.e. www.tredfashion.com<br/><br/>

					This is just the start, we will try to give latest information on daily basis.We are happy you being such a lovely customer. Thank you for your time and interest.
				</p>


				<!--<p>
					<?php
						$q = "select * from cms where page_id = 2";
						$res = mysqli_query($cn,$q) or exit(mysqli_error($cn));	
						$cont = mysqli_fetch_assoc($res);						
						echo stripslashes($cont['page_content']);	

					?>
				</p> -->
			</div>
		</div>

		<?php include_once('../footer.php'); ?>

	</body>
</html>

					
			