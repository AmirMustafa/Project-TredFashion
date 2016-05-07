<html>
<link rel="icon" type="images/png" href="images/favicon.png" />
	<head>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>








		
	</head>

	<body>
		<?php include('header.php');?>
		<div id="content">		
		<p>
			<!--<?php
				include_once('db.php');
				$q = "select * from cms where page_id = 1";				//query for selecting page_id 1 from cms
				$res = mysqli_query($cn,$q) or exit(mysqli_error($q));	// query fired
				$cont = mysqli_fetch_assoc($res);						//retrieving content by assoc fetch method
				echo stripslashes($cont['page_content']);				//This PHP function returns a string with															  the backslashes. (\) removed that were															  added by the PHP addslashes() function.
	
			?>
		</p>
	</div> -->

	 
	 <div id="wowslider-container1">
	<div class="ws_images"><ul>
<li><img src="data1/images/1.jpg" alt="Hrithik Roshan" title="Hrithik Roshan" id="wows1_0"/>Hrithik Roshan is an Indian film actor. and has been cited in the media as one of the most attractive male celebrities in India.</li>
<li><img src="data1/images/2.jpg" alt="Aishwarya Rai Bachchan" title="Aishwarya Rai Bachchan" id="wows1_1"/>Aishwarya Rai Bachchan, also known as Aishwarya Rai, is an Indian actress, model and the winner of the Miss World pageant of 1994.</li>
<li><img src="data1/images/3.jpg" alt="Deepika Padukone" title="Deepika Padukone" id="wows1_2"/>Deepika Padukone is an Indian film actress and model. One of the most popular and highest-paid Indian celebrity</li>
<li><img src="data1/images/4.jpg" alt="Vin Diesel" title="Vin Diesel" id="wows1_3"/>Mark Sinclair better known by his stage name Vin Diesel, is an American actor. He is best known for his portrayals of Dominic Toretto in The Fast and the Furious film series and Richard B. Riddick in The Chronicles of Riddick trilogy.</li>
<li><img src="data1/images/5.jpg" alt="Nina Dobrev" title="Nina Dobrev" id="wows1_4"/>Nina Dobrev is a Bulgarian Canadian actress and model. She played the role of Mia Jones on Degrassi: The Next Generation in seasons six to nine. </li>
<li><img src="data1/images/6.jpg" alt="John Abraham" title="John Abraham" id="wows1_5"/>John Abraham, is an Indian film actor, producer and a former model. </li>
<li><img src="data1/images/8.jpg" alt="Madhuri Dixit" title="Madhuri Dixit" id="wows1_6"/>Madhuri Dixit is an Indian actress who is known for her work in Hindi cinema. A leading actress of Bollywood in the 1980s, 1990s and early-2000s,</li>
<li><img src="data1/images/9.jpg" alt="Robert Downey, Jr." title="Robert Downey, Jr." id="wows1_7"/>Robert John Downey Jr. is an American actor whose career has included critical and popular success in his youth. He is best known for his roles as Tony Stark in Iron Man.</li>
<li><img src="data1/images/10.jpg" alt="Jensen Ackles" title="Jensen Ackles" id="wows1_8"/>Jensen Ross Ackles is an American actor and director. He is known for his roles in television in Days of Our Lives and Supernatural</li>
<li><img src="data1/images/11.jpg" alt="Shah Rukh Khan" title="Shah Rukh Khan" id="wows1_9"/>Shah Rukh Khan, also known as SRK, is an Indian film actor, producer and television personality.</li>
<li><img src="data1/images/12.jpg" alt="Shahid Kapoor" title="Shahid Kapoor" id="wows1_10"/>Shahid Kapoor, also known as Shahid Khattar, is an Indian actor who appears in Hindi films.</li>
<li><img src="data1/images/13.jpg" alt="Shraddha Kapoor" title="Shraddha Kapoor" id="wows1_11"/>Shraddha Kapoor is an Indian film actress who works in Bollywood films. The daughter of actor Shakti Kapoor.</li>
<li><img src="data1/images/14.jpg" alt="Shah Rukh with Fan" title="Shah Rukh with Fan" id="wows1_12"/></li>
<li><img src="data1/images/15.jpg" alt="Varun Dhawan" title="Varun Dhawan" id="wows1_13"/>Varun Dhawan is an Indian actor who appears in Hindi films. The son of film director David Dhawan, he studied Business Management from the Nottingham Trent University.</li>
<li><img src="data1/images/16.jpg" alt="Akshay Kumar" title="Akshay Kumar" id="wows1_14"/>Rajiv Hari Om Bhatia, better known by his stage name Akshay Kumar, is an Indian actor, producer and martial artist who has appeared in over a hundred Hindi films.</li>
<li><img src="data1/images/17.jpg" alt="Amitabh Bachchan" title="Amitabh Bachchan" id="wows1_15"/>Amitabh Harivansh Bachchan is an Indian film actor. He first gained popularity in the early 1970s for movies like Deewar and Zanjeer known as Angry Youn Man.</li>
<li><img src="data1/images/18.jpg" alt="Daniel Radcliffe" title="Daniel Radcliffe" id="wows1_16"/>Daniel Jacob Radcliffe is an English actor who rose to prominence as the title character in the Harry Potter film series.</li>
<li><img src="data1/images/19.jpg" alt="Kajal Aggarwal" title="Kajal Aggarwal" id="wows1_17"/>Kajal Aggarwal is an Indian film actress and model. Primarily known for her work in Telugu and Tamil films, Kajal has also appeared in Bollywood films.</li>
<li><img src="data1/images/20.jpg" alt="Kajol Devgn" title="Kajol Devgn" id="wows1_18"/>Kajol Devgan, known mononymously as Kajol, is a critically acclaimed Indian film actress who predominantly works in Hindi cinema.</li>
<li><img src="data1/images/21.jpg" alt="Sonam Kapoor" title="Sonam Kapoor" id="wows1_19"/>Sonam Kapoor is an Indian actress who appears in Bollywood films and is the daughter of actor Anil Kapoor.</li>
<li><img src="data1/images/22.jpg" alt="Anushka Sharma" title="Anushka Sharma" id="wows1_20"/>Anushka Sharma is an Indian film actress and producer. She has established a career in Hindi cinema, and is the recipient of a Filmfare Award from four nominations.</li>
<li><img src="data1/images/23.jpg" alt="Chris Hemsworth" title="Chris Hemsworth" id="wows1_21"/>Chris Hemsworth is an Australian actor. He is best known for his roles as Kim Hyde in the Australian TV series Home and Away and as Thor in the Marvel Cinematic Universe films.</li>
<li><img src="data1/images/24.jpg" alt="Taylor Swift" title="Taylor Swift" id="wows1_22"/>Taylor Alison Swift is an American singer-songwriter. Raised in Wyomissing, Pennsylvania, she moved to Nashville, Tennessee, at the age of 14 to pursue a career in country music.</li>
<li><img src="data1/images/25.jpg" alt="Priyanka Chopra" title="Priyanka Chopra" id="wows1_23"/>Priyanka Chopra is an Indian film actress and singer, and the winner of the Miss World pageant of 2000.</li>
<li><img src="data1/images/mahira_khan.jpg" alt="Mahira Khan" title="Mahira Khan" id="wows1_24"/>Mahira Hafeez Khan better known as Mahira Khan is a Pakistani film and television actress and former VJ. She is known for playing a variety of characters in a range of film genre and serials-from contemporary social to romantic dramas.</li>
</ul></div>
<a class="wsl" href="http://wowslider.com">CSS Slideshow Gallery by WOWSlider.com v2.2.3</a>
	<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>









			
			

			
			<?php include_once('left_header.php'); ?>

			<div id="mid">
				<div id="post">

				<h6 style="text-align: right; margin-right:20px;"><a href="index2.php">Next Page  </a></h6>
					<!-- Start  -->
					<a href="posts/Let_it_Glow.php"><h3>Let it Glow: Pro Tips for a Radiant Complexion</h3>	</a>
					<a href="posts/Let_it_Glow.php"><img src="images/beauty1.jpg" alt="Images of Pro Tips for Radiant Complexion"></a><br/>
					<p id="post_para" style="font-size: justify; margin-right:120px;">
						In the summer, everyone wants a gorgeous glow. Keeping your makeup polished in the heat and humidity may feel like an impossible task, but stop sweating. Let’s start with one basic rule when it comes to modern summer makeup: less is more. You don’t necessarily need to give up your favorite products, you just need to find ways to make them work...
						
					</p>
					<p id="ReadMore">  
						<a href="posts/Let_it_Glow.php"><b>Read More..</b></a>
					</p>
					<p id="conclusionline">-
					</p>
					<!-- Conclusion  -->

					<!-- Start  -->

					<a href="posts/eightybeautytips.php"><h3>80 Beauty Tips & Tricks Every Woman Needs to Know</h3>	</a>
					<a href="posts/eightybeautytips.php"><img src="posts/beauty3.jpg" alt="Images of 80 Beauty Tips & Tricks Every Woman Needs to Know"></a><br/><br/>
						<p id="post_para" style="font-size: justify; margin-right:120px;">We love good beauty tips, so we’ve rounded up our best get-gorgeous tricks in one spot. Whether you want to learn how to create the perfect wavy hair or brush up on your smoky eye technique, you’ll find beauty tips galore to help you get pretty from head to toe....</p>
						
					</p>
					<p id="ReadMore">  
						<a href="posts/eightybeautytips.php"><b>Read More..</b></a>
					</p>
					<p id="conclusionline">-
					</p>
				
			<!-- Conclusion  -->

			<!-- Start  -->

					<a href="posts/The_Internet_Says.php"><h3>The Internet Says This Is the #1 Red Nail Polish</h3>	</a>
					<a href="posts/The_Internet_Says.php"><img src="posts/beautyb1.jpg" alt="Images of Red Nail Polish"></a><br/><br/>
					<p id="post_para" style="font-size: justify; margin-right:120px;">	Like the red lip, a shiny crimson manicure is a classic with which you can't go wrong. From dramatic blood red to fiery poppy or ruby hues, there's a shade for every season, occasion, and individual skin tone. But as MAC's Ruby Woo and Nars Heatwave have proven for lips...</p>
						
					</p>
					<p id="ReadMore">  
						<a href="posts/The_Internet_Says.php"><b>Read More..</b></a>
					</p>
					<p id="conclusionline">-
					</p>

					<!-- Conclusion  -->

					<h5 style="text-align: center;">Page 1</h5>
					<h6 style="text-align: right; margin-right:20px;"><a href="index2.php">Next Page </a></h6>
				</div>
			</div>

			<?php include_once('right_header.php'); ?>
			<?php include_once('footer.php'); ?>
		
</html>