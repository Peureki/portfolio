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

					<div class = "grid-stats-box">
						<div class = "grid-stats">
							<h4 class = "grid-stats-num">29</h4>
							<p>Websites</p>
						</div>

						<div class = "grid-stats">
							<h4 class = "grid-stats-num">3</h4>
							<p>Years of experience</p>
						</div>
					</div>

					<svg fill="none" version="1.1" viewBox="0 0 27.12 79.589" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" class = "animate-svg" id = 'arrow-1'>
					 	<metadata>
					 	 	<rdf:RDF>
					   			<cc:Work rdf:about="">
					    			<dc:format>image/svg+xml</dc:format>
					    			<dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/>
					    			<dc:title/>
					   			</cc:Work>
					  		</rdf:RDF>
					 	</metadata>
					 	<path d="m25.62 1.5c-1.8694 1.1603-3.9592 2.198-5.9469 3.1396-2.4383 1.155-4.5726 2.6526-6.6447 4.3689-1.786 1.4793-3.533 3.2961-4.0034 5.6479-0.444 2.2204-0.1666 4.3476 1.0798 6.246 1.4186 2.1607 3.843 4.1141 5.9802 5.5316 1.0423 0.6914 1.9267 1.5842 2.9236 2.3423 0.8587 0.6529 1.7452 1.5752 2.4585 2.392 2.7633 3.1644 3.7324 6.5748 3.5466 10.756-0.0968 2.1777-1.6862 4.4097-3.123 5.9221-1.6304 1.7162-3.1974 3.5047-4.8672 5.1745-0.7758 0.7758-1.5182 1.5543-2.3173 2.309-0.749 0.7074-1.2654 1.6035-2.0183 2.3007-0.9853 0.9123-2.0606 2.0799-2.4668 3.4054-0.449 1.465-0.7475 2.6148-0.7475 4.1529 0 1.084-0.1455 2.2838 0.0332 3.3555 0.2281 1.3689 1.1738 2.8084 1.7276 4.0865 0.4746 1.0953 1.4824 1.9772 1.8273 3.098 0.2273 0.7388 0.6153 1.4716 0.9551 2.1512 0.4606 0.9212-1.4397-1.4776-2.2259-2.1429-2.3599-1.9967-5.1951-3.3703-7.6164-5.3074-0.7748-0.6198-1.4265-1.3555-2.2592-1.8854-1.3126-0.8352 0.8339 0.6315 1.196 0.897 0.7502 0.5502 1.4414 1.3582 2.2509 1.7941 0.6848 0.3687 1.4309 0.7504 2.0183 1.2791 0.3414 0.3073 0.778 0.3812 1.0797 0.7475 0.2244 0.2725 0.4079 0.4677 0.6811 0.6645 0.6647 0.4785 1.3032 1.1061 1.9768 1.6113 0.3934 0.295 2.6798 2.2548 2.9153 1.6529 0.2618-0.669 0.2911-1.3647 0.4569-2.0516 0.1698-0.7037 0.5174-1.4029 0.7475-2.093 0.3471-1.0414 0.9462-2.3283 1.5781-3.231 1.1388-1.6269 2.5329-2.9976 3.422-4.7758" stroke="#d28d15" stroke-linecap="round" stroke-width="2"/>
					</svg>

					<div class = "flex-list">
						<p><a href = "">Jump to projects</a></p>
					</div>

				</div>
				

				
			</div>

			<div class = "abs-scroll-grid">
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
			</div>

			<div class = "abs-scroll-grid">
				<div class = "abs-scroll-grid-content-left">
					<h3>Weather Enthusiast</h3>
					<p>Weather is so fascinating to me. We live in a world where somewhere there's a major storm, snowing, clear skies, or having a natrual disaster while you're reading this. Even in our everyday life, it's never the same even though sometimes it may feel that way. That's why I wanted to learn more about it during my undergrad years. Initially I was learning Computer Science, but projects never clicked (now look at me). I graduated with a Bachelor's in Meteorology in May 2019 and became a teacher for students K-12. I taught little and young humans my passion for weather by interacting with them, doing experiments, and making it fun!</p>
				</div>
			</div>

			<div class = "abs-scroll-grid">
				
				<div class = "grid-img-collage-box">
					<div class = "grid-img-collage">
						<img src = "./images/teacher/class-1.jpg">
					</div>
					<div class = "grid-img-collage">
						<img src = "./images/teacher/class-2.jpg">
					</div>
					<div class = "grid-img-collage">
						<img src = "./images/teacher/class-3.jpg">
					</div>
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
