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
	<!--
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
-->
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
					<h3 id = "intro-title">Web Developer</h3>
				</div>

				<div class = "subdescription">
					<p1>(New-Yen), (New-Gen), (Nwin)</p1>
				</div>

			</div>
		</div>

		<div class = "atm-name-box">
			<p>Exosphere</p>
		</div>
	</div>

	<!-- 
		======================================================================================
		==================================== THERMOSPHERE ====================================
		======================================================================================
	-->

	<div id = "thermosphere" class = "thermosphere">
		
		<!--
		<div class = "aurora-box">
			<img src = "./images/aurora.png">
		</div>
		-->

		<div class = "sticky-header" id = "thermo-sticky-header">
			<div class = "header">
				<h2>About Me</h2>
			</div>
		</div>

		<div class = "abs-scroll-box">
			<div class = "abs-scroll-grid">
				<div class = "abs-scroll-grid-content-left">
					<h3>Web Developer</h3>
					<p>I was a content creator for a popular MMORPG, Guild Wars 2, and I needed a way to show off my content to my friends and peers. A Google Spreadsheet can only hold so much information. My first project, Peuresearchcenter.com, is what started it all. Since then, I've grown to love web development. I'm facinated in creating a website as an art form; to create visuals, interactions, and to challenge myself. I love making websites that are impactful, meaningful, and provide a service to a community. The best part is hearing my work has brought a positive impact in someone's life. </p>

					<div class = "flex-item-box">
						<div class = "flex-item">
							<img src = "./images/html.png">
						</div>
						<div class = "flex-item">
							<img src = "./images/css.png">
						</div>
						<div class = "flex-item">
							<img src = "./images/javascript.png">
						</div>
						<div class = "flex-item">
							<img src = "./images/php.svg">
						</div>
						<div class = "flex-item">
							<img src = "./images/mysql.png">
						</div>
						<div class = "flex-item">
							<img src = "./images/google-apps-script.png">
						</div>
						<div class = "flex-item">
							<img src = "./images/duda.png">
						</div>
					</div>

					<div class = "flex-list">
						<p>View projects</p>
					</div>
				</div>
				

				
			</div>

			<div class = "abs-scroll-grid">
			</div>

			<div class = "abs-scroll-grid">
			</div>

			<div class = "abs-scroll-grid">
				<div class = "abs-scroll-grid-content-right">
					<h3>Weather Enthusiast</h3>
					<p>Weather is so fascinating to me. We live in a world where somewhere there's a major storm, snowing, clear skies, or having a natrual disaster while you're reading this. Even in our everyday life, it's never the same even though sometimes it may feel that way. That's why I wanted to learn more about it during my undergrad years. Initially I was learning Computer Science, but projects never clicked (now look at me). I graduated with a Bachelor's in Meteorology in May 2019 and became a teacher for students K-12. I taught little and young humans my passion for weather by interacting with them, doing experiments, and making it fun!</p>
				</div>
			</div>

			<div class = "abs-scroll-grid">
				<div class = "abs-scroll-grid-content-left">
					<h3>Dancer</h3>
					<p>Growing up, I'd never thought I'd ever consider myself a dancer. I sometimes still consider myself a moving stick when it comes to dancing! But, over the year has proven otherwise. Music was all over the place for me. I was one of those, "I kind of like a little bit of everything" kind of guys. Until I heard House music. I've randomly came across videos of people shuffling and thought it was the coolest thing. I wanted to be a cool bean too! To this day, I'm still moving my feet whenever I hear a good beat. </p>
				</div>
			</div>

			<div class = "abs-scroll-grid">
			</div>
		</div>
			
		<div class = "atm-name-box">
			<p>Thermosphere</p>
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
				<div class = "atm-header">
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
				<div class = "atm-header">
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
				<div id = "tropo-header" class = "atm-header">
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
