<!DOCTYPE html>
<html>
	<head>
		<title>Nicaela</title>
		<link rel="stylesheet" href="reset.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="https://use.fontawesome.com/36dfd4b211.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	</head>
	<body>
		<header id="desktopHeader"><div>nicaela.</div>
		<i id="scrollIcon" href="#audOptions" class="fa fa-angle-down" aria-hidden="true"></i>
		</header>
		<header id="mobileHeader">nic.</header>
			<div id="initialBackground"></div>


		<section id="audOptions">
			<h1>Oh hey there! You've made it to this masterpiece of web development for one of three reasons:</h1>
			<h2>Double click that which resonates most with your experience</h2>
			<div class="firstOption" href="#blurbs" id="optionA">
				<h2>A.</h2>
				<p>You're a potential future employer.</p>
			</div>
			<div class="firstOption" href="#blurbs" id="optionB">
				<h2>B.</h2>
				<p>You're a friend or family member I've shared this with to show off my mad skills.</p>
			</div>
			<div class="firstOption" href="#blurbs" id="optionC">
				<h2>C.</h2>
				<p>You're my online stalker. <br> Hi Dennis.</p>
			</div>
			<div id="line"></div>
		</section>

		<section id="blurbs" class="">
			<div id="futureEmpBlurb">How lovely that you might consider me for the dynamic *insert role here* position at the innovative and engaging company, *insert company here*! <br><br>Keep scrolling - there's so much more</div>
			<div id="famAndFriendBlurb">How lovely of you to stop by you cheeky monkey. You're obviously an incredible person. But not as incredible as I am, I mean. Look at this website. #impressive</div>
			<div id="stalkerBlurb">You're not Dennis you cheeky monkey. But you are fun. I like you. </div>
		</section>
		<div id="line2"></div>

		<?php
		include 'php/education.php' ;
		?>

		<?php
		include 'php/workExperience.php' ;
		?>

		<?php
		include 'php/volunteerExperience.php' ;
		?>

	<!-- 	<?php
		include 'php/leadershipDevelopment.php' ;
		?>

		<?php
		include 'php/projects.php' ;
		?> -->

	  	<?php 
		include 'php/contactForm.php' ;
		?> 

		<footer>
			<div id="socialMedia">
				<a href="https://www.facebook.com/nicaela"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="https://www.instagram.com/nicaeladwight/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				<a href="https://au.linkedin.com/in/nicaeladwight"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
			</div>
			<p>Website planned, designed and executed by yours truly.</p>
		</footer>

		<script src="js/styles.js"></script>
	</body> 
</html>