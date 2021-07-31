<!DOCTYPE html>
<html>
<head>
	<link rel ="stylesheet" type="text/css" href="./images/weather-icons-master/css/weather-icons.css">
	<!--<link rel ="stylesheet" type="text/css" href="./styles.css">-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

	<title> Matt Nguyen </title>
	<link rel = "shortcut icon" href = "./images/logo.png">
	<script>
		var last_modified = document.lastModified,
			css_version = '<link id = "css-version" rel ="stylesheet" type="text/css" href="./styles.css?v='+ last_modified + '">',
			js_version = '<script type ="text/javascript" src = "./weather.js?v=' + last_modified + '">'+'</'+'script>';
		document.write(css_version); 
	</script>
</head>
<body>
	<!--
	<div id = "loading-screen" class = "loading-screen">
		<img src = "./images/logo.png">
	</div> -->
	<div id = "sky" class = "sky">
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
		<div id = "apply-stars"></div>
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
						<p1>Me</p1>
					</div>
				</a>
				
				<a href = "#projects">
					<div class = "tree-projects">
						<span></span>
						<span></span>
						<span></span>
						<p1>Projects</p1>
					</div> 
				</a>

				<div class = "tree-resume">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<p1>Resume</p1>
				</div>

				<a href = "#contact">
					<div class = "tree-contact">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<p1>Contact</p1>
					</div>
				</a>
			</div>
		</div>



		<div class = "page-box">
			<div class = "main-box">
				<div>
					<h1 class = "name">Hi, I'm <br>Matt <span id = "name"></span></h1>
				</div>
				
				<!--
				<div class = "about-me">
					<p2> I'm an individual that thrives in passion and learning something new. Every day, the goal is to become the best version of myself. I strive to build projects with code that is efficent, functional, and simple as possible while having fun with it! Let's collaborate and build something unique!</p2>
				</div>
				-->

				<!-- Input box for weather fun -->
				<div class = "weather-box">
					<div>
						<input type = "text" id = "cityInput" placeholder = "Chicago, IL" value = "Chicago, IL"></input>
						<input type = "button" value = "Search" onclick = "getWeather('cityInput')"></input>
						<input type = "button" value = "Day" onclick = "day();"></input>
						<input type = "button" value = "Night" onclick = "night();"></input>
						<input type = "button" value = "Rain" onclick = "rain('Rain');"></input>
					</div>
					<h1 id = "cityName"> </h1>

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
		</div><!-- End of page box -->
	</div> <!-- End of sky box -->

	<div class = "grass">
	</div>

	<div id = "ground" class = "ground">
		<div id = "apply-rock" class = "apply-rock">
		</div>

		<div class = "ground-container">
			<div id = "about-me" class = "about-me">
				<div class = "about-me-title"> About Me </div>
				<div id = "passions" class = "passions">
					<button onclick = "showDesc(1, this);" id = "passion-header-1" class = "passion-header">
						Web Developer
					</button>
					<button onclick = "showDesc(2, this);" id = "passion-header-2" class = "passion-header">
						Weather Enthusiast
					</button>
					<button onclick = "showDesc(3, this);" id = "passion-header-3" class = "passion-header">
						Dancer
					</button>
					<button onclick = "showDesc(4, this);" id = "passion-header-4" class = "passion-header">
						Guild Wars 2
					</button>
				</div>
			</div> <!-- End of about me section -->

			<div id = "passion-desc" class = "passion-desc">
				<div id = "web-dev" class = "passion-section">
					I'm an individual that thrives in passion and learning something new. Every day, the goal is to become the best version of myself. I strive to build projects with code that is efficent, functional, and simple as possible while having fun with it. The best aspect of web development creating real from imaginary. Projects are like trees. It starts with an idea, then it branches out the more it grows. The trunk defines the foundation and the branches is what makes the project unique. 
					<br><br>
					Skills 
					<div class = "skill-set">
						<img src ="./images/html.png" loading = "lazy">
						<img src = "./images/css.png" loading = "lazy">
						<img src = "./images/javascript.png" loading = "lazy">
					</div>

				</div>

				<div id = "weather-enth" class = "passion-section">
					We live in an extremely dynamic and ever-changing world that continuously surprises me. As with web development, weather is never a subject to stop learning. There will always be a new discovery, new pheonomenon to study, new ways of better understanding how the world functions. Weather always happens for a reason, and I want to know why. 
					<br><br>
					In 2019, I graduated with a Bachleors in Atmospheric Sceiences. At the same year, my job at the time was to create a program that intergrated renewable energy. I created a program from the ground-up of going to rural schools and teaching K-12 students about wind energy, weather, and built wind turbines. 
				</div>

				<div id = "dances" class = "passion-section">
					Dancing was never my forte. I grew up in the west surburbs of Chicago, but it was only until I left for college that I realize what I've been missing. Chicago is rich in history and culture, especially in terms of music. Shuffling, house dance, Chicago footwork, the music of house, the music of techno. The combination of dancing and music is euphoric to me. I let my feet do the talking to define my individuality.
					<br><br>
					In 2017-2019, I helped build a small dance community known as the Chicago Shufflers. Together with friends, we created workshops, meetups, and danced on stage at community festivals.
				</div>

				<div id = "gw2" class = "passion-section">
					Guild Wars 2 is one of the most popular MMORPGs (massive multiplayer online role playing game) in the gaming industy since it's 2012 debut. Guild Wars 2 is my passion because I can escape reality while still having great social interactions. I've been leading guilds/communities of hundreds of players since I was 17 and still going strong today! The game has not only taught me how to have fun in a game, but it has taught me how to be strong leader, teacher, and speaker. 
					<br><br>
					I love the game so much, I became a content creator as of 2019. I started out building massive Google Spreadsheets that suggested players where the best place is to farm content. By late 2019, my spreadsheets were achieving live viewing of 30-60 people at all hours. Too many live viewings to function reliably! Spring 2020 is when I decided to learn how to build a website from scratch. With no background in web development, it took 4 months of non-stop learning, motivation, and no sleep to create what is now my most beloved project: <a href = "http://www.peuresearchcenter.com" target = "_blank"><u> Peuresearchcenter.com.</u></a>
				</div>
			</div>
		</div> <!-- End of ground container -->

		<!-- PROJECTS -->

		<div class = "ground-container">
			<div id = "projects" class = "projects">
				<div class = "project-title"> Projects </div>
				<a href="http://www.peuresearchcenter.com" target = "_blank">
					<div class = "project-header"> 
						<h1> Peuresearchcenter.com </h1>
						<h2> March 2020 - Present </h2>
						<p1> HTML, CSS, Vanilla JS, Guild Wars 2 APIs, Google Scripts APIs </p1>

					</div>
				</a>
				<div id = "project-timeline" class = "project-timeline">
					<button class = "project-timeline-header" onclick="showSection(this, 0);"> TL;DR </button>
					<button class = "project-timeline-header" onclick="showSection(this, 1);"> Google Spreadsheets </button>
					<button class = "project-timeline-header" onclick="showSection(this, 2);"> Problem </button>
					<button class = "project-timeline-header" onclick="showSection(this, 3);"> Solution </button>
					<button class = "project-timeline-header" onclick="showSection(this, 4);"> Process </button>
					<button class = "project-timeline-header" onclick="showSection(this, 5);"> Today </button>
				</div>
			</div> <!-- End of projects -->

			<div id = "project-desc" class = "project-desc">
				<div class = "project-section">
					The goal of the website to provide tools, services, and information for players of Guild Wars 2 to earn gold (in-game currency) and better their quality of life. Currently it services hundreds of unique players weekly and I update it frequently. It fetches API via Guild Wars 2's official API and my own Google Sheets Script API. This website is what ignited my passion to code!

					<img src = "./images/peu-choya.png" style = "width: 40%;" loading = "lazy">
				</div>

				<div class = "project-section">
					Timeline: January 2019 - January 2020
					<br><br>
					The project with the idea of creating a space where players could find the best areas in the game to farm gold. Guild Wars 2 is a very open-world heavy type of game that splits it's massive world into maps. Each map has it's own unique community events, bosses, and rewards. Over time, I collected datasets of items I've farmed and calculated into a Google Spreadsheet and created a benchmark with most maps in the game. The spreadsheet ended up having up to 100 individual sheets, custom API calls from Guild Wars 2's API, custom scripts to auto-sort or update lists, and had a live audience of about 30-60 at all hours. This led to a problem...

					<img src = "./images/peu-spreadsheet.PNG" loading = "lazy">
				</div>

				<div class = "project-section">
					Timeline: January 2019 - January 2020
					<br><br>
					Google Sheets could not handle having constant traffic, while having a massive spreadsheet, while having me constantly edit data. It would become unresponsive, slow, and even disconnect/prevent users from accessing. Despite this, I continued working on the spreadsheets. Around January 2020, the spreadsheet would be down up to 20 minutes for the same reasons. Enough was enough. I decided to Google/YouTube, "How do I build a website easily" hoping for a solution...

					<img src = "./images/peu-google.PNG" loading = "lazy">
				</div>

				<div class = "project-section">
					Timeline: January 2020 - Feburary 2020
					<br><br>
					The initial solution was to create a website from Wix. With no experience, I thought this would be the right choice. After a month of tinkering, it was far from the solution I wanted. I wanted more. I wanted to customize my elements, use API, new designs, and the list goes on. The solution was to learn how to build a website from scratch. This begins the process...

					<img src = "./images/peu-wix.PNG" loading = "lazy">
				</div>

				<div class = "project-section">
					Timeline: March 2020 - June 2020
					<br><br>
					Coicidentally, at the same time of this learning process, COVID-19 lockdowns started. This was the perfect opportunity to learn as much as possible while staying at home. I spent every single day for months YouTubing, looking up tips from W3Schools, connecting with current web developer friends, trialing and erroring code. It took a full 4 months to learn HTML, CSS, and JavaScript from nothing to building a live website for the Guild Wars 2 community. 

					<img src = "./images/peu-homepage.PNG" loading = "lazy">
				</div>

				<div class = "project-section">
					Timeline: June 2020 - Present
					<br><br>
					After putting the website out there, I never stopped learning and applying new material, structures, new methods. Almost every day since, I have refactored code, redid designs that flow with the navigation better, and built more unique tools. While this website is meant for the general Guild Wars 2 community, it has helped me the most to be a web developer that I am today. The process of learning never stops!

					<img src = "./images/peu-td.PNG" loading = "lazy">
				</div>
			</div>
		</div> <!-- End of ground container -->

		<div id = "contact" class = "contact-me">
			<h1> Let's work together! </h1>
			<div class = "contact-info">
				<div class = "contact-icons">
					<img src ="./images/gmail.png" loading = "lazy">
					<img src = "./images/linkedin.png" loading = "lazy">
					<img src = "./images/github.png" loading = "lazy">
				</div>
			</div>
			<!--
			<form action = "mailto:newyenmatt@gmail.com" method = "post" enctype = "text/plain">
				<label for = "fname">First Name: </label>
				<input id = "fname" name = "fname" type = "text">
				<br><label for = "lname">Last Name: </label>
				<input id = "lname" name = "lname" type = "text">
				<br><label for = "email">Email: </label>
				<input id = "email" name = "email" type = "text">
				<br><label for = "message">Message: </label>
				<br><input id = "message" name = "message" type = "text">

				<br><input type="submit" value="Send">
				<br><input type="reset" value="Reset">
			</form> -->

			<form class = "contact-form" action = "contactform.php" method = "post">
				<input type="text" name = "name" placeholder="Name or Company">
				<input type="text" name="mail" placeholder="E-Mail">
				<input type="text" name="subject" placeholder="Subject">
				<textarea type = "textarea" name="message" placeholder="Message"></textarea>
				<button type="submit" name="submit">Send</button>
			</form>
		</div> <!-- End of contact me -->
	</div> <!-- End of ground -->
</body>
<script>document.write(js_version);</script>
<script> getWeather('cityInput'); </script>
</html