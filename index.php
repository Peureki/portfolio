<!DOCTYPE html>
<html>
<head>
	<?php 
		//$base  = "https://www.mattnewyen.com";
		$base = "http://localhost/portfolio";
		$date = date("D M d, Y G:i"); // For versioning
	?>

	<link rel ="stylesheet" type="text/css" href="./images/weather-icons-master/css/weather-icons.css">
	<!--<link rel ="stylesheet" type="text/css" href="./styles.css">-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

	<title> Matt Nguyen </title>
	<link rel = "shortcut icon" href = "./images/logo.png">
	<link type = "text/css" rel = "stylesheet" href = "<?php echo $base;?>/styles.css?v=<?php echo $date;?>">
</head>
<body>
	<div class = "nav-container">
		<ul class = "nav-bar">
			<li class = "nav-dropdown">
				<a class = "nav-header" href = "#exosphere"> Top </a>
				<ul class = "nav-sub">
					<li> Intro </li>
				</ul>
			</li>
			<li class = "nav-dropdown">
				<a class = "nav-header" href = "#thermosphere"> About Me </a>
				<ul class = "nav-sub">
					<li> About Me </li>
				</ul>
			</li>
			<li class = "nav-dropdown">
				<a class = "nav-header" href = "#mesosphere"> Projects </a>
				<ul class = "nav-sub">
					<li> Projects </li>
				</ul>
			</li>
			<li class = "nav-dropdown">
				<a class = "nav-header" href = "#stratosphere"> Contact </a>
				<ul class = "nav-sub">
					<li> Contact Me </li>
				</ul>
			</li>
			<li class = "nav-dropdown">
				<a class = "nav-header" href = "#troposphere"> Weather </a>
				<ul class = "nav-sub">
					<li> Weather </li>
				</ul>
			</li>
		</ul>
	</div>
	<!-- 
		===================================================================================
		==================================== EXOSPHERE ====================================
		===================================================================================
	-->
	<div id = "exosphere" class = "exosphere">
		<div id = "apply-stars"></div>
		<img id = "satellite" src = "./images/satellite.png">

		<div class = "exo-double-box">
			<div class = "right-box" style = "border: none;">
				<div class = "header">
					<h1>Hi, I'm Matt <br>Nguyen<span id = "name"></span></h1>
				</div>

				<div class = "subdescription" style = "text-align: center;">
					(New-Yen), (New-Gen), (Nwin)
				</div>

				<div class = "subheader" style = "margin-top: 30px;">
					and welcome to the <span class = "highlight">Exosphere</span>
				</div>

				<div class = "subdescription" style = "text-align: center;">
					You may find a satellite or two orbiting around
				</div>
			</div>
		</div>
	</div>

	<!-- 
		======================================================================================
		==================================== THERMOSPHERE ====================================
		======================================================================================
	-->

	<div id = "thermosphere" class = "thermosphere">
		
		<div class = "aurora-box">
			<img src = "./images/aurora.png">
		</div>

		<div class = "double-box">
			<div class = "left-box">
				<div class = "header">
					<h1>About Me</h1>
				</div>

				<div class = "slide-selectors" onclick = "nextSlide(1);">
					&#187;
				</div>

				<div class = "slides-thermo">
					<div class = "slides-header">
						Web Developer
					</div>
					<div class = "slides-description">
						I'm an individual that thrives in passion and learning something new. Every day, the goal is to become the best version of myself. I strive to build projects with code that is efficent, functional, and simple as possible while having fun with it!
					</div>

					<div class = "skill-set">
						<img src ="./images/html.png" loading = "lazy">
						<img src = "./images/css.png" loading = "lazy">
						<img src = "./images/javascript.png" loading = "lazy">
					</div>
				</div>

				<div class = "slides-thermo">
					<div class = "slides-header">
						Weather Enthusiast
					</div>
					<div class = "slides-description">
						We live in an extremely dynamic and ever-changing world that continuously surprises me. As with web development, weather is never a subject to stop learning. There will always be a new discovery, new pheonomenon to study, new ways of better understanding how the world functions. Weather always happens for a reason, and I want to know why. 
					</div>
				</div>

				<div class = "slides-thermo">
					<div class = "slides-header">
						Dancer
					</div>
					<div class = "slides-description">
						Dancing was never my forte. I grew up in the west surburbs of Chicago, but it was only until I left for college that I realize what I've been missing. Chicago is rich in history and culture, especially in terms of music. Shuffling, house dance, Chicago footwork, the music of house, the music of techno. The combination of dancing and music is euphoric to me. I let my feet do the talking to define my individuality.
					</div>
				</div>

				<div class = "slides-thermo">
					<div class = "slides-header">
						Guild Wars 2
					</div>
					<div class = "slides-description">
						Guild Wars 2 is one of the most popular MMORPGs (massive multiplayer online role playing game) in the gaming industy since it's 2012 debut. Guild Wars 2 is my passion because I can escape reality while still having great social interactions. I've been leading guilds of hundreds of players since I was 17 and still going strong today! The game has not only taught me how to have fun in a game, but it has taught me how to be strong leader, teacher, and speaker.
					</div>
				</div>
			</div>

			<div class = "right-box">
				<div id = "thermo-header" class = "header">
					Thermosphere
				</div>

				<div class = "subdescription">
					Dubbed "Thermosphere" because this part of the atmosphere captures solar radiation. In general, higher altitude &#8594; higher temperature. Starting from 95-120km up to ~600km above sea-level, temperatures can go as high as 2500C! This is also where auroras mainly occur. 
				</div>
			</div>
		</div>
	</div>

	<!-- 
		====================================================================================
		==================================== MESOSPHERE ====================================
		====================================================================================
	-->

	<div id = "mesosphere" class = "mesosphere">
		<div id = "apply-meteor">
			
		</div>

		<div id = "rocket-box" class = "rocket-box">
			<img id = "rocket" src = "./images/rocket.png">
			<!-- Flames -->
			<span></span>
			<span></span>
			<span></span>
		</div>

		<div class = "double-box">


			<div class = "left-box">
				<div class = "header">
					<h1>Projects</h1>
				</div>

				<div class = "slides-meso">
					<div class = "slides-header">
						<a href = "https://www.peuresearchcenter.com" target = "_blank"><u>Peuresearchcenter</u></a>
						<a href = "https://github.com/Peureki/peuresearchcenter" target = "_blank"><img src = "./images/github.png"></a>
					</div>
					<div class = "slides-subheader">
						HTML, CSS, Vanilla JS, PHP, Guild War 2's API, Google App Script
					</div>
					<div class = "slides-description">
						The website to provide tools, services, and information for players of Guild Wars 2 to earn gold (in-game currency) and better their quality of life. Currently it services hundreds of unique players weekly and I update it frequently as the game evolves.
					</div>
					<div class = "slides-img">
						<img src = "./images/peu-choya.png">
					</div>
				</div>
			</div>

			<div class = "right-box">
				<div class = "header">
					Mesosphere
				</div>

				<div class = "subdescription">
					Unlike the Thermosphere and Stratosphere, this part of the atmosphere decreases temperature as altitude increases. While it's the coldest layer, meteors burn up because the Mesophere is dense enough in terms of gas moledules to cause friction. Due to the high speed of the meteor, friction causes the meteor to light up! You may also find sounding rockets that scientific experiements. 
				</div>
			</div>
		</div>
	</div>

	<!-- 
		======================================================================================
		==================================== STRATOSPHERE ====================================
		======================================================================================
	-->

	<div id = "stratosphere" class = "stratosphere">
		<div class = "weather-balloon-box">
			<img src = "./images/weather-balloon.png">
		</div>
		<div class = "double-box">
			<div class = "left-box">
				<div class = "header">
					Let's Work Together!
				</div>

				<div class = "sublist">
					<span class = "align-left">Email: </span><span class = "align-right"><a href = "mailto: newyenmatt@gmail.com"><u>newyenmatt@gmail.com</u></a></span>
					<br><span class = "align-left">LinkedIn: </span><span class = "align-right"><a href = "https://www.linkedin.com/in/mattnewyen/" target = "_blank"><u>/in/mattnewyen/</u></a></span>
					<br><span class = "align-left">GitHub: </span><span class = "align-right"><a href = "https://github.com/Peureki" target = "_blank"><u>/Peureki</u></a></span>
					<br><span class = "align-left">Resume: </span><span class = "align-right"><a href = "./images/Matt_Nguyen_Resume.pdf" target = "_blank"><u>PDF</u></a></span>
					<div style = "clear: both;"></div>
				</div>

				<div id = "contact" class = "contact-me">
					<form class = "contact-form" action = "contactform.php" method = "post">
						<input type="text" name = "name" placeholder="Name or Company">
						<input type="text" name="mail" placeholder="E-Mail">
						<input type="text" name="subject" placeholder="Subject">
						<textarea type = "textarea" name="message" placeholder="Message"></textarea>
						<button type="submit" name="submit">Send</button>
					</form>
				</div> <!-- End of contact me -->
			</div>
			<div class = "right-box">
				<div class = "header">
					Stratosphere
				</div>

				<div class = "subdescription">
					The Stratosphere increases temperature with higher altitude because this layer contains the ozone layer that absorbs ultraviolet radiation. Weather balloons fly up to 18-37km that collect data such as atmospheric pressure, temperature, wind, humidity, and more.
				</div>
			</div>
		</div>
	</div>
	<!-- 
		==================================================================================
		==================================== TROPOSPHERE =================================
		==================================================================================
	-->
	<div id = "troposphere" class = "troposphere">
		<div id = "apply-big-clouds"></div>
		<div id = "apply-small-clouds"></div>
		<div id = "apply-rain"></div>
		<div id = "apply-moon">
			<div id = "moon" class = "moon">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<div id = "apply-sun">
			<div id = "sun" class = "sun">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<div id = "apply-tree">
			<div class = "tree">

				<div class = "tree-top">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>

				<div class = "branch">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>

				<a href = "#about-me">
					<div class = "tree-me">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
				</a>
				
				<a href = "#projects">
					<div class = "tree-projects">
						<span></span>
						<span></span>
						<span></span>
					</div> 
				</a>

				<a href = "./images/Matt_Nguyen_Resume.pdf">
					<div class = "tree-resume">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
				</a>

				<a href = "#contact">
					<div class = "tree-contact">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
				</a>
			</div>
		</div>

		<div class = "double-box">
			<div class = "left-box" style = "border: none; height: 100%;">
				<!-- Input box for weather fun -->
				<div class = "weather-box">
					<div>
						<input type = "text" id = "cityInput" placeholder = "Chicago, IL" value = "Chicago, IL"></input>
						<input type = "button" id = "cityButton" value = "Search" onclick = "getWeather('cityInput')"></input>
					</div>
					<h1 id = "cityName" class = "city-name"> </h1>

					<div class = "weather-info">
						<div class = "weather-sector">
							<p1><span id = "currentWeather"></span></p1>
							<br>
							<div id = "weather-icon" style = "font-size: 50px;"></div>
							<p1><span id = "tempHigh"></span><span id = "tempLow"></span> </p1>
						</div>
						<div class = "weather-sector">
							<p1> <span class = "align-left"> Now: </span><span id = "tempNow" class = "align-right"></span> </p1>
							<p1> <span class = "align-left"> Feels Like: </span><span id = "tempFeels" class = "align-right"></span> </p1>
							<p1> <span class = "align-left"> Humidity: </span><span id = "humidity" class = "align-right"></span> </p1>
							<p1> <span class = "align-left"> Clouds: </span><span id = "cloudiness" class = "align-right"></span></p1>
							<div style = "clear: both;"></div>
						</div>
					</div>

					<!-- Displays a box that shows a progress bar + time until sunrise or sunset -->
					<div id = "progress-box" class = "progress-box">
				        <div id = "progress-text" class = "progress-text"> 
				        	<div id = "progress-hr"> </div>
				        	<div id = "progress-min"></div>
				        	<div id = "progress-sec"></div>
				        	<div id = "progress-towards"></div>
				        </div>
				        <div id = "progress-bar" class = "progress-bar">
				        </div>
				    </div>
				</div>
			</div> <!-- End of main box -->

			<div class = "right-box" style = "border: none;">
				<div id = "tropo-header" class = "header">
					Troposphere
				</div>

				<div id = "tropo-description" class = "subdescription">
					This is the layer of the atmosphere that we live and breathe in! All weather occurs here.
				</div>
			</div>
		</div><!-- End of page box -->


	</div> <!-- End of sky box -->

	<div class = "grass">
	</div>

	<div id = "ground" class = "ground">
	</div> <!-- End of ground -->
</body>
<script type = "text/javascript" src = "<?php echo $base;?>/weather.js?v=<?php echo $date;?>"></script>
<script> getWeather('cityInput'); </script>
</html
