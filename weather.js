// When the window resizes, adjust the height to get 100%
// This is mostly for mobile to prevent the address bar from creating random space on the bottom
window.addEventListener('resize', () => {
	// Update element's size
	let vh = window.innerHeight * 0.01;
	// Set var --vh to be the new size
	document.documentElement.style.setProperty('--vh', `${vh}px`);
})

// Global variables to switch to diff styles
var body = document.body,
	wholeHTML = document.documentElement,
	rainDiv = document.getElementById('apply-rain'),
	bigCloudsDiv = document.getElementById('apply-big-clouds'),
	loadingScreen = document.getElementById('loading-screen'),
	meteorDiv = document.getElementById('apply-meteor'),
	moonDiv = document.getElementById('moon'),
	smallCloudsDiv = document.getElementById('apply-small-clouds'),
	sunDiv = document.getElementById('sun'),
	starDiv = document.getElementById('apply-stars'),
	weatherIcon = document.getElementById('weather-icon');

// ATMOSPHERES
var exoDiv = document.getElementById('exosphere'),
	thermoDiv = document.getElementById('thermosphere'),
	mesoDiv = document.getElementById('mesosphere'),
	stratoDiv = document.getElementById('stratosphere'),
	tropoDiv = document.getElementById('troposphere');

// Mobile width 
var mobileWidth = window.matchMedia("(max-width: 600px)");

var progressBar = document.getElementById('progress-bar'),
	daylight,
	nighttime,
	tilSunrise,
	tilSunset,
	countdown,
	timeNow,
	sunriseToday,
	sunsetToday,
	hr = document.getElementById('progress-hr'), 
	min = document.getElementById('progress-min'), 
	sec = document.getElementById('progress-sec'),
	progressTowards = document.getElementById('progress-towards');

var topPosition, leftPosition, rotateDeg;

// CSS Variables
// Decale variables then change them throughout each setting
var cssVar = (name, value) => {
	if (name.substr(0, 2) !== "--") name = "--" + name; 
	if (value) document.documentElement.style.setProperty(name, value);

	return getComputedStyle(document.documentElement).getPropertyValue(name);
}
cssVar('no-bkg-text-color'); // Ex: Hi, I'm Merp
cssVar('desc-border-color'); // Border around desc boxes
cssVar('desc-text-color'); // text1 inside desc boxes

// ATMOSPHERE BKG VARIABLES
cssVar('exo-bkg-color');
cssVar('thermo-bkg-color');
cssVar('meso-bkg-color');
cssVar('strato-bkg-color');
cssVar('tropo-bkg-color');

// Atmosphere other variables
cssVar('tropo-text-color');

// Other variables 
var randomNum,
	html = '',
	d = new Date();

var enterInput = document.getElementById('cityInput'),
	cityButton = document.getElementById('cityButton');
enterInput.addEventListener('keyup', function(event){
	if (event.keyCode === 13){
		event.preventDefault();
		cityButton.click();
	}
});

async function getWeather(id){
	var cityInput, state;
	var cityName = document.getElementById('cityName'),
		cloudiness = document.getElementById('cloudiness'),
		tempNow = document.getElementById('tempNow'),
		tempHigh = document.getElementById('tempHigh'),
		tempLow = document.getElementById('tempLow'),
		humidity = document.getElementById('humidity'),
		tempFeels = document.getElementById('tempFeels'),
		currentWeather = document.getElementById('currentWeather');

	// If text1 bar returns blank, don't do anything
	if (id == null){
	} else {
		// Get value of whatever typed in text1 bar
		// Input the city or area into the api and fetch data
		cityInput = document.getElementById(id).value;

		if (cityInput.includes(",")){
			// Remove any spaces
			cityInput = cityInput.replace(/\s/g, '');
			// Check if it's apprevation or not
			if (cityInput.split(',')[1].length == 2){
				// Get the word after the comma and uppercase it
				state = cityInput.split(",")[1].toUpperCase();
				cityInput = cityInput.split(",")[0] + "," + state; 
				// Replace abbrevations with full state name (b/c api doesn't do abbreviations)
				switch (state){
					case "AL": cityInput = cityInput.replace(state, " Alabama"); break;
					case "AK": cityInput = cityInput.replace(state, " Alaska"); break;
					case "AZ": cityInput = cityInput.replace(state, " Arizona"); break;
					case "AR": cityInput = cityInput.replace(state, " Arkansas"); break;
					case "CA": cityInput = cityInput.replace(state, " California"); break;
					case "CO": cityInput = cityInput.replace(state, " Colorado"); break;
					case "CT": cityInput = cityInput.replace(state, " Connecticut"); break;
					case "DE": cityInput = cityInput.replace(state, " Delaware"); break;
					case "DC": cityInput = cityInput.replace(state, " District of Columbia"); break;
					case "FL": cityInput = cityInput.replace(state, " Flordia"); break;
					case "GA": cityInput = cityInput.replace(state, " Georgia"); break;
					case "GU": cityInput = cityInput.replace(state, " Guam"); break;
					case "HI": cityInput = cityInput.replace(state, " Hawaii"); break;
					case "ID": cityInput = cityInput.replace(state, " Idaho"); break;
					case "IL": cityInput = cityInput.replace(state, " Illinois"); break;
					case "IN": cityInput = cityInput.replace(state, " Indiana"); break;
					case "IA": cityInput = cityInput.replace(state, " Iowa"); break;
					case "KS": cityInput = cityInput.replace(state, " Kansas"); break;
					case "KY": cityInput = cityInput.replace(state, " Kentucky"); break;
					case "LA": cityInput = cityInput.replace(state, " Louisiana"); break;
					case "ME": cityInput = cityInput.replace(state, " Maine"); break;
					case "MD": cityInput = cityInput.replace(state, " Maryland"); break;
					case "MA": cityInput = cityInput.replace(state, " Massachusetts"); break;
					case "MI": cityInput = cityInput.replace(state, " Michigan"); break;
					case "MN": cityInput = cityInput.replace(state, " Minnesota"); break;
					case "MS": cityInput = cityInput.replace(state, " Mississippi"); break;
					case "MO": cityInput = cityInput.replace(state, " Missouri"); break;
					case "MT": cityInput = cityInput.replace(state, " Montana"); break;
					case "NE": cityInput = cityInput.replace(state, " Nebraska"); break;
					case "NV": cityInput = cityInput.replace(state, " Nevada"); break;
					case "NH": cityInput = cityInput.replace(state, " New Hampshire"); break;
					case "NJ": cityInput = cityInput.replace(state, " New Jersey"); break;
					case "NM": cityInput = cityInput.replace(state, " New Mexico"); break;
					case "NY": cityInput = cityInput.replace(state, " New York"); break;
					case "NC": cityInput = cityInput.replace(state, " North Carolina"); break;
					case "ND": cityInput = cityInput.replace(state, " North Dakota"); break;
					case "OH": cityInput = cityInput.replace(state, " Ohio"); break;
					case "OK": cityInput = cityInput.replace(state, " Oklahoma"); break;
					case "OR": cityInput = cityInput.replace(state, " Oregon"); break;
					case "PA": cityInput = cityInput.replace(state, " Pennsylvania"); break;
					case "PR": cityInput = cityInput.replace(state, " Puerto Rico"); break;
					case "RI": cityInput = cityInput.replace(state, " Rhode Island"); break;
					case "SC": cityInput = cityInput.replace(state, " South Carolina"); break;
					case "SD": cityInput = cityInput.replace(state, " South Dakota"); break;
					case "TN": cityInput = cityInput.replace(state, " Tennessee"); break;
					case "TX": cityInput = cityInput.replace(state, " Texas"); break;
					case "UT": cityInput = cityInput.replace(state, " Utah"); break;
					case "VT": cityInput = cityInput.replace(state, " Vermont"); break;
					case "VA": cityInput = cityInput.replace(state, " Virginia"); break;
					case "VI": cityInput = cityInput.replace(state, " Virgin Islands"); break;
					case "WA": cityInput = cityInput.replace(state, " Washington"); break;
					case "WV": cityInput = cityInput.replace(state, " West Virginia"); break;
					case "WI": cityInput = cityInput.replace(state, " Wisconsin"); break;
					case "WY": cityInput = cityInput.replace(state, " Wyoming"); break;
				}
			}
			
		}
		var api = "http://api.openweathermap.org/data/2.5/weather?q="+cityInput+"&appid=2190c9b2b35552ceecd4226d0cebbebf";
		const response1 = await fetch(api);
		const weatherAPI = await response1.json();

		// Apply weather info into weather-info boxes
		cityName.innerHTML = cityInput;
		cloudiness.innerHTML = weatherAPI.clouds.all + "%"; 
		tempNow.innerHTML = KtoF(weatherAPI.main.temp) + "\u2109";
		tempHigh.innerHTML = KtoF(weatherAPI.main.temp_max) + "\u2109" + " | "; 
		tempLow.innerHTML = KtoF(weatherAPI.main.temp_min) + "\u2109"; 
		humidity.innerHTML = weatherAPI.main.humidity + "%"; 
		tempFeels.innerHTML = KtoF(weatherAPI.main.feels_like) + "\u2109";
		currentWeather.innerHTML = weatherAPI.weather[0].main;
		sunriseDate = new Date(weatherAPI.sys.sunrise * 1000);
		sunsetDate = new Date(weatherAPI.sys.sunset * 1000);

		currentWeather = weatherAPI.weather[0].main;

		// Apply different settings depending on the weather
		switch(currentWeather){
			case "Clear": clearSkies(); break;
			case "Clouds": clouds(weatherAPI.clouds.all); break;
			case "Drizzle": rain(currentWeather); break;
			case "Rain": rain(currentWeather); break;
		}
		
		var tz = weatherAPI.timezone/3600;
		timeNow = (d.getUTCHours() + tz) * 3600 + d.getUTCMinutes() * 60 + d.getUTCSeconds(); // Time right now
		sunriseToday = (sunriseDate.getUTCHours() + tz) * 3600 + sunriseDate.getUTCMinutes() * 60 + sunriseDate.getUTCSeconds(); // Time for sunrise
		sunsetToday = (sunsetDate.getUTCHours() + tz) * 3600 + sunsetDate.getUTCMinutes() * 60 + sunsetDate.getUTCSeconds(); // Time for sunset

		// Apply sun+moon default positions 
		// Check if JS has applied the positioning. If it has, it will move sun, moon smoothly if user inputted new city
		if (sunDiv.style.top == ""){
			sunDiv.style.top = 0; 
			sunDiv.style.left = 0;
			moonDiv.style.top = 0;
			moonDiv.style.left = 0; 
		}

		// Sometimes utc hr would be 0, but timezone is -5, so it results in neg #
		// Prevents it from showing night time before sunset
		if (timeNow < 0){
			timeNow = timeNow + 86400;
		}
		// Since diff timezones +/-, match sunrise to be lower than sunset and vise versa
		if (sunriseToday/3600 > 23){
			sunriseToday = sunriseToday - 86400;
		}
		if (sunsetToday/3600 < 0){
			sunsetToday = sunsetToday + 86400;
		}
		// Determine what time of day it is
		if (timeNow < sunriseToday || timeNow > sunsetToday){
			night();
		} else {
			day();
		}
		// Clear countdown in case it switches settings. That way it doesnt count down multiple times
		clearInterval(countdown);
		// Calculate the Time Now, Sunrise, Sunset
		countdown = setInterval(function(){

			d = new Date(); // Re-initialize to keep track of real time inside this continous interval
			timeNow = (d.getUTCHours() + tz) * 3600 + d.getUTCMinutes() * 60 + d.getUTCSeconds(); // Time right now
			// Repeat as above since d is being refreshed per sec
			if (timeNow < 0){
				timeNow = timeNow + 86400;
			}

			// Amount of daylight/night on a given day
			daylight = sunsetToday - sunriseToday;
			nighttime = 86400 - daylight;
			// How long until it's sunrise and sunset
			tilSunrise = sunriseToday - timeNow;
			tilSunset = sunsetToday - timeNow;

			// Change to day/night settings if user still has day/night -> night/day screen active
			// If time is before sunrise or after sunset
			if (timeNow < sunriseToday || timeNow > sunsetToday) {
				// Since sunrise is gonna much lower # than timeNow (ex: sunrsie = 5 vs timeNow = 23)
				// Make sunrise + 24 hours so it would be (29 - 23)
				// Hour of timeNow > 10 (random-ish # since sunrises aren't near or past 10am..unless south pole/north pole)
				if (timeNow/3600 > 10){
					tilSunrise = tilSunrise + 86400;
				}
				moonDiv.style.left = (tilSunrise/nighttime) * 100 + "%";
				// If progress is before 50%, move moon upwards. vise versa
				if (((nighttime - tilSunrise)/nighttime) * 100 <= 50){
					moonDiv.style.top = (50 - ((nighttime - tilSunrise)/nighttime) * 100) + "%";
				} else {
					moonDiv.style.top = (((nighttime - tilSunrise)/nighttime) * 100) - 50 + "%";
				}
				progressBar.style.width = ((nighttime - tilSunrise)/nighttime) * 100 + "%";
				formatTime(tilSunrise, hr, min, sec);
				progressTowards.innerHTML = "\u2192 Sunrise";
			}
			// If time is after sunrise and before sunset
			if (timeNow > sunriseToday && timeNow < sunsetToday){
				if (timeNow == sunriseToday+1) day();
				if (timeNow == sunsetToday-1) night();
				// Sun is tilSunset/daylight to go from right -> left since it's counting down instead of up
				// Progressbar is (daylight-tilSunset)/daylight to go from left -> right since it's counting up 
				sunDiv.style.left = (tilSunset/daylight) * 100 + "%";
				// If progress is before 50% thru the day, move sun upwards
				if (((daylight - tilSunset)/daylight) * 100 <= 50){
					sunDiv.style.top = (50 - ((daylight - tilSunset)/daylight) * 100) + "%";
				} else {
					sunDiv.style.top = (((daylight - tilSunset)/daylight) * 100) - 50 + "%";
				}
				progressBar.style.width = ((daylight - tilSunset)/daylight) * 100 + "%";
				formatTime(tilSunset, hr, min, sec);
				progressTowards.innerHTML = "\u2192 Sunset";
			} 
		}, 1000);
	}
}
// Converts Kelvin to F
function KtoF(temp){
	temp = Math.round((temp - 273.15) * (9/5) + 32);
	return temp;
}
// Returns a random number by selected range 
var getRandomNumberInRange = (min, max) => Math.random() * (max - min) + min;

// When the weather changes, remove any current weather elements and change to current
function defaults(){
	html = ''; // reset html
	// Removes rain, clouds, etc
	function removeWeather(div){
		if (div.children.length > 0){
			i = div.children.length;
			while (i != 0){
				div.children[0].remove();
				i = div.children.length;
			}
		}
	}
	removeWeather(bigCloudsDiv);
	removeWeather(smallCloudsDiv);
	removeWeather(rainDiv);
}
// No clouds, just the pretty sky
function clearSkies(){
	defaults();
	weatherIcon.className = "wi wi-day-sunny";
}
// Settings for day
function day(){
	/*
	setTimeout(function(){
		sunDiv.style.opacity = 1;
		moonDiv.style.opacity = 0;
	}, 1000); */
	sunDiv.style.opacity = 1;
	moonDiv.style.opacity = 0;
	cssVar('no-bkg-text-color', 'black');
	cssVar('desc-border-color', 'white');
	cssVar('desc-text-color', 'black');

	// Atmosphere bkg colors 
	cssVar('exo-bkg-color', 'linear-gradient(#000000, #0F1B4D)');
	cssVar('thermo-bkg-color', 'linear-gradient(#0F1B4D, #1E4873)');
	cssVar('meso-bkg-color', 'linear-gradient(#1E4873, #4190A6)');
	cssVar('strato-bkg-color', 'linear-gradient(#4190A6, #4D98EC)');
	cssVar('tropo-bkg-color', 'linear-gradient(#4D98EC, #B1D2F5)');

	// Atmosphere other variables
	cssVar('tropo-text-color', 'black');
	
	// Change colors of nav bar when scrolling to tropo
	body.addEventListener('scroll', doTropoNavColorChange);
}
// Settings for night
function night(){ 
	setTimeout(function(){
		sunDiv.style.opacity = 0;
		moonDiv.style.opacity = 1;
	}, 1000);
	// Change colors of texts
	cssVar('no-bkg-text-color', '#D28D15'); // Header, title texts
	cssVar('desc-border-color', '#D28D15');
	cssVar('desc-text-color', 'white');

	// Atmosphere bkg colors 
	cssVar('exo-bkg-color', 'linear-gradient(#000000, #050919)');
	cssVar('thermo-bkg-color', 'linear-gradient(#050919, #080F2A)');
	cssVar('meso-bkg-color', 'linear-gradient(#080F2A, #0B143A)');
	cssVar('strato-bkg-color', 'linear-gradient(#0B143A, #0F1B4D)');
	cssVar('tropo-bkg-color', 'linear-gradient(#0F1B4D, #142550)');

	// Atmosphere other variables
	cssVar('tropo-text-color', '#D9D6D9');

	// Change colors of nav bar when scrolling to tropo
	body.removeEventListener('scroll', doTropoNavColorChange);
	// Case: if it's black when it turns into night time, make nav headers white anyway
	for (i = 0; i < navHeader.length; i++){
		navHeader[i].style.color = "#D9D6D9";
	}
}
function clouds(cloudPercent){
	defaults();
	weatherIcon.className = "wi wi-day-cloudy"; // Weather card icon
	if (mobileWidth.matches) cloudPercent = Math.round(cloudPercent/2); // # of clouds, reduce by half for mobile for less lag
	console.log(cloudPercent)
	// Spawn random amounts of small clouds
	for (i = 0; i < cloudPercent; i++){
		html += `
			<div class = "small-cloud" style = "top: ${getRandomNumberInRange(0,30)}%;">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
		`;
		smallCloudsDiv.innerHTML = html;
	}
	// Animate small clouds
	// Have to make 2nd loop b/c they all need to spawn first
	for (i = 0; i < cloudPercent; i++){
		smallCloudsDiv.children[i].animate([
			{
				opacity: 0,
				left: "-20%",
			},
			{
				opacity: 1,
				left: "-19%",
				offset: 0.01,
			},
			{
				opacity: 1,
				left: "99%",
				offset: 0.99,
			},
			{
				opacity: 0,
				left: "100%",
			}
		], {
			duration: getRandomNumberInRange(30000, 100000),
			delay: getRandomNumberInRange(0,60000),
			iterations: Infinity
		});
	}
}
function rain(type){
	defaults();
	tropoDiv.style.background = '#B5B6B2'; // Light gray background
	sunDiv.style.opacity = 0;

	// Change amount of precip or type depending on the type given
	switch (type){
		case "Rain": applyRainAmount(100, 200); weatherIcon.className = "wi wi-day-rain"; break; 
		case "Drizzle": applyRainAmount(10, 50); weatherIcon.className = "wi wi-day-rain"; break;

	}
	function applyRainAmount(minRange, maxRange){
		randomNum = getRandomNumberInRange(minRange, maxRange); // Rain drops
		// Summon 100-200 drops, spawn at 1-100% left, few second delay for each to make it look more random
		for (i = 0; i < randomNum; i++){
			html += `
				<div class = "rain" style = "left: ${getRandomNumberInRange(1,100)}%; animation-delay: ${getRandomNumberInRange(1,5)}s;"></div>
			`;
			rainDiv.innerHTML = html;
		}

		html += `
			<div class = "static-big-cloud">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>

			<div class = "big-cloud" style = "animation: big_cloud_0left_to_right 60s linear infinite;">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>

			<div class = "big-cloud" style = "animation: big_cloud_0left_to_right 60s linear infinite; animation-delay: 30s;">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>

			<div class = "big-cloud" style = "animation: big_cloud_10left_to_right 60s linear infinite;">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>

			<div class = "big-cloud" style = "animation: big_cloud_50left_to_right 60s linear infinite;">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
		`;
		bigCloudsDiv.innerHTML = html;
	}
	
}

function stars(){
	html = '';
	// If mobile, reduce number of stars
	if (mobileWidth.matches) randomNum = getRandomNumberInRange(5, 10);
	else randomNum = getRandomNumberInRange(10, 50); // # of stars
	for (i = 0; i < randomNum; i++){
		html += `
			<div class = "star" style = "top: ${getRandomNumberInRange(0,40)}%; left: ${getRandomNumberInRange(0,100)}%; animation-delay: ${getRandomNumberInRange(0,5)}s;">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
		`;
		starDiv.innerHTML = html; 
	}
}
stars();

function meteors(){
	html = '';
	var rotation;
	// Depending on the size of the screen, change the angle of the meteors so they look better
	if (mobileWidth.matches){
		rotation = "rotate(-25deg);"
	} else {
		rotation = "rotate(25deg);"
	}
	randomNum = getRandomNumberInRange(20, 50); // # of meteors
	for (i = 0; i < randomNum; i++){
		html += `
			<div class = "meteor-box" style = "transform: ${rotation}">
				<img src = "./images/rock-1.svg">

				<!-- Circle on the rock -->
				<span></span>
				<!-- Trail -->
				<span></span>
			</div>
		`;
		meteorDiv.innerHTML = html;
	}
	// Animate meteors
	// Have to make 2nd loop b/c they all need to spawn first
	var randomTop, randomLeft;
	
	for (i = 0; i < meteorDiv.children.length; i++){
		randomTop = getRandomNumberInRange(0, 80);
		randomLeft = getRandomNumberInRange(50, 90);

		meteorDiv.children[i].animate([
			{
				opacity: 0,
				top: randomTop + "%",
				left: randomLeft + "%",
			},
			{
				opacity: 1,
				top: randomTop + (randomTop*0.10) + "%",
				left: randomLeft - (randomLeft*0.10) + "%",
				offset: 0.1,
			},
			{
				opacity: 0,
				top: randomTop + (randomTop*0.90) + "%",
				left: randomLeft - (randomLeft*0.90) + "%",
				offset: 0.90,
			},
			{
				opacity: 0,
				top: randomTop + randomTop + "%",
				left: randomLeft - randomLeft + "%",
				left: "100%",
			}
		], {
			duration: getRandomNumberInRange(10000, 20000),
			delay: getRandomNumberInRange(0,60000),
			iterations: Infinity
		});
	}
}
meteors();

// Format the time to display in days, hours, minutes, and seconds
// Parameters: time, HTML IDs of days, hours, mins, seconds
function formatTime(result_time, hours, minutes, seconds){
    var s = Math.floor(result_time);
    var m = Math.floor(s / 60);
    var h = Math.floor(m / 60);

    if (isNaN(s) == true){
        s = 0;
        m = 0;
        h = 0;
    }

    h %= 24;
    m %= 60; 
    s %= 60;

    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s; 

    hours.innerHTML = h + "h";
    minutes.innerHTML = m + "m";
    seconds.innerHTML = s + "s";
}

// Other things I need to add
// Mist
// Thunderstorm
// Drizzle
// Smoke
// Haze

var tropoHeader = document.getElementById('tropo-header'),
	navHeader = document.getElementsByClassName('nav-header');

function tropoNavColorChange(){
	// Get value of where the header is located
	var headerPos = tropoHeader.getBoundingClientRect(); 
	// If the header of the tropo top value is 1000 (about when the words start showing up on screen)
	// then change the nav to black, otherwise keep the same
	if (headerPos.top < 1000){
		for (i = 0; i < navHeader.length; i++){
			navHeader[i].style.color = "black";
		}
	} else {
		for (i = 0; i < navHeader.length; i++){
			navHeader[i].style.color = "#D9D6D9";
		}
	}
}
//Throttle the scroll so that it does go off every scroll
// This reduces the lag, esp on mobile
function throttle(fn, delay){
	var time = Date.now(); 
	return function(){
		if ((time + delay - Date.now()) < 0){
			fn();
			time = Date.now();
		}
	}
}
var doTropoNavColorChange = throttle(tropoNavColorChange, 300);

// Initiate so that the DOM knows there's some value
/*
passions.style.left = "-100%";
passionDesc.style.right = "-100%";
projects.style.left = "-100%";
projectDesc.style.right = "-100%";
*/
/*
var groundDiv = document.getElementById('ground');
// When user scrolls, initite this function to show elements at specific points of an element's top position
body.addEventListener("scroll", throttle(scrollAnimation, 200));

function scrollAnimation(){
	var aboutMePosition = document.getElementById('about-me').getBoundingClientRect();
   	var projectPosition = document.getElementById('projects').getBoundingClientRect();
   	console.log("does this still happen")

   	// 400 = lil below mid screen
   	if (aboutMePosition.top < 300 && aboutMePosition.top > 0){
   		// For about-me headers
   		if (passions.style.left != "0px"){
   			passions.animate([
				{
					opacity: 0,
					visibility: "hidden",
					transform: "translateX(-100px)",
				},
				{
					opacity: 1,
					visibility: "visible",
					transform: "translateX(0px)",
				}
			], {
				duration: 1000,
				easing: "ease",
				fill: "forwards",
			});
			passions.style.left = 0;
   		} 
   		// For passion descs
   		if (passionDesc.style.right != "0px"){
	   		passionDesc.animate([
				{
					opacity: 0,
					transform: "translateX(100px)",
				},
				{
					opacity: 1,
					transform: "translateX(0px)",
				}
			], {
				duration: 1000,
				easing: "ease",
				fill: "forwards",
			});
			passionDesc.style.right = 0;
   		}
   	}
   	// 400 = lil below mid screen
   	if (projectPosition.top < 300 && projectPosition.top > 0){
   		// For project headers
   		if (projects.style.left != "0px"){
   			projects.animate([
				{
					opacity: 0,
					visibility: "hidden",
					transform: "translateX(-100px)",
				},
				{
					opacity: 1,
					visibility: "visible",
					transform: "translateX(0px)",
				}
			], {
				duration: 1000,
				easing: "ease",
				fill: "forwards",
			});
			projects.style.left = 0;
   		} 
   		// For passion descs
   		if (projectDesc.style.right != "0px"){
	   		projectDesc.animate([
				{	
					opacity: 0,
					transform: "translateX(100px)",
				},
				{
					opacity: 1,
					transform: "translateX(0px)",
				}
			], {
				duration: 1000,
				easing: "ease",
				fill: "forwards",
			});
			projectDesc.style.right = 0;
   		}
   	}
}
*/

/*
var text1 = "(New-Yen)",
	text2 = "(New-Gen)",
	text3 = "(Nwin)",
	text4 = "Nguyen"
	enterName = document.getElementById('name'); 

var counter = 0;
var counterCheck1 = 0,
	counterCheck2 = 0,
	counterCheck3 = 0;
	counterCheck4 = 0;

// Animation to write diff versions of my last name
function typeWriter(){
	// Create New-Gen
	if (counterCheck1 == 0){
		setTimeout(function create1(){
			// Check if counter is less than length of text to stop it from counting up
			if (counter < text1.length){
				enterName.innerHTML += text1.charAt(counter);
				counter++;
				setTimeout(create1, 50);
				if (counter == text1.length-1){
					counterCheck1 = 1;
					typeWriter();
				}
			}
		}, 1000);
	}

	// Erase New-Gen
	if (counterCheck1 == 1){
		setTimeout(function erase1(){
			if (counter <= text1.length && counterCheck1 == 1){
				enterName.innerHTML = text1.substring(0, enterName.innerHTML.length-1);
				counter--;
				setTimeout(erase1, 50);
				if (counter == 0){
					counterCheck1 = 2;
					typeWriter();
				}	
			}
		}, 1000);
	}
	// Create Nwin
	if (counterCheck1 == 2 && counterCheck2 == 0){
		setTimeout(function create2(){
			if (counter < text2.length){
				enterName.innerHTML += text2.charAt(counter);
				counter++;
				setTimeout(create2, 50);
				if (counter == text2.length){
					counterCheck2 = 1;
					typeWriter();
				}
			}
		}, 1000);
	}
	// Erase Nwin
	if (counterCheck2 == 1){
		setTimeout(function erase2(){
			if (counter <= text2.length && counterCheck2 == 1){
				enterName.innerHTML = text2.substring(0, enterName.innerHTML.length-1);
				counter--;
				setTimeout(erase2, 50);
				if (counter == 0){
					counterCheck2 = 2;
					typeWriter();
				}	
			}
		}, 1000);
	}
	// Create New-Yen
	if (counterCheck2 == 2 && counterCheck3 == 0){
		setTimeout(function create3(){
			if (counter < text3.length){
				enterName.innerHTML += text3.charAt(counter);
				counter++;
				setTimeout(create3, 50);
				if (counter == text3.length){
					counterCheck3 = 1;
					typeWriter();
				}
			}
		}, 1000);
	}
	// Erase New-Yen
	if (counterCheck3 == 1){
		setTimeout(function erase3(){
			if (counter <= text3.length && counterCheck3 == 1){
				enterName.innerHTML = text3.substring(0, enterName.innerHTML.length-1);
				counter--;
				setTimeout(erase3, 50);
				if (counter == 0){
					counterCheck3 = 2;
					typeWriter();
				}	
			}
		}, 1000);
	}
	// Create Nguyen
	if (counterCheck3 == 2 && counterCheck4 == 0){
		setTimeout(function create4(){
			if (counter < text4.length){
				enterName.innerHTML += text4.charAt(counter);
				counter++;
				setTimeout(create4, 50);
				if (counter == text4.length){
					counterCheck4 = 1;
					typeWriter();
				}
			}
		}, 1000);
	}
}
setTimeout(typeWriter, 1000);
*/
var tree = document.getElementById('apply-tree'), 
	cityInput = document.getElementById('cityInput'),
	sky = document.getElementById('troposphere');

// If city focus -> remove tree on mobile
cityInput.addEventListener('focus', function() {
	if (mobileWidth.matches) tree.style.opacity = 0;
	else tree.style.opacity = 1;
});
cityInput.addEventListener('focusout', () => tree.style.opacity = 1);
/* 
	=====================================
	============== SLIDES ===============
	=====================================
*/
/*
var slideIndex = 1; 
showSlides(slideIndex);

function nextSlide(num){
	showSlides(slideIndex += num);
}

function showSlides(num){
	var slides = document.getElementsByClassName('slides-thermo');
	// When slides are less than the length of all of them, reset it back to the first
	if (num > slides.length){
		slideIndex = 1;
	}
	if (num < 1){
		slideIndex = slides.length;
	}
	for (i = 0; i < slides.length; i++) {
     	slides[i].style.display = "none";  
  	}
	slides[slideIndex - 1].style.display = "block";
}
*/
let screenHeight = screen.height,
	windowWidth = window.innerWidth;

let thermoStickyHeader = document.getElementById('thermo-sticky-header');

body.addEventListener('scroll', () => {
	let mesoDivY = mesoDiv.getBoundingClientRect().y,
		thermoDivY = thermoDiv.getBoundingClientRect().y; 

	console.log('screenheight: ', thermoDivY);
	if (mesoDivY >= screenHeight && thermoDivY <= 0){
		thermoStickyHeader.style.transform = `translateY(${thermoDivY * -1}px)`;
	}
})