<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Upload Mp3 File</h1>
    <form enctype="multipart/form-data" method="post">
      <input type="file" name="file" value="">
      <input type="submit" name="submit" value="Submit">
    </form>
  </body>
</html> -->
<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <body>
        <h2>Sound Information</h2>
        <div id="length">Duration:</div>
        <div id="source">Source:</div>
        <div id="status" style="color:red;">Status: Loading</div>
        <hr>
        <h2>Control Buttons</h2>
        <button id="play">Play</button>
        <button id="pause">Pause</button>
        <button id="restart">Restart</button>
        <hr>
        <h2>Playing Information</h2>
        <div id="currentTime">0</div>
    </body>
    <script type="text/javascript">
    $(document).ready(function() {
  var audioElement = document.createElement('audio');
  audioElement.setAttribute('src', 'https://amkwebsolutions.com/shopify-app/Shopify_announcement_bar/assets/audio_file/8421_download_flute_thank_you_ringtone.mp3');

  audioElement.addEventListener('ended', function() {
      this.play();
  }, false);

  audioElement.addEventListener("canplay",function(){
      $("#length").text("Duration:" + audioElement.duration + " seconds");
      $("#source").text("Source:" + audioElement.src);
      $("#status").text("Status: Ready to play").css("color","green");
  });

  audioElement.addEventListener("timeupdate",function(){
      $("#currentTime").text("Current second:" + audioElement.currentTime);
  });

  $('#play').click(function() {
      audioElement.play();
      $("#status").text("Status: Playing");
  });

  $('#pause').click(function() {
      audioElement.pause();
      $("#status").text("Status: Paused");
  });

  $('#restart').click(function() {
      audioElement.currentTime = 0;
  });
});
    </script>
</html> -->


<!--
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style media="screen">

/* resets and general styles */

*{
	margin: 0 auto;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

::-moz-selection{
	color: #FFFFFF;
	background: #FF5722;
}

::selection{
	color: #FFFFFF;
	background: #FF5722;
}

body{
	font: normal 16px 'Roboto', sans-serif;
	position: absolute;
	height: 100%;
	width: 100%;
}

div.wrapper{
	width: calc(4*225px);
	margin: 0 auto;
}

span, a, strong{font-weight: 700;}
a{transition: .2s; text-decoration: none; color: #787878; border-bottom: 1px solid #607D8B;}
a:hover{transition: .2s; color: #FF5722;}

/* page layout */

/* header */

header{
	width: 100%;
	height: 50%;
	background: #607D8B;
}

/* section */

section{
	width: 100%;
	height: 50%;
}

section h1, section p.meta{
	color: #FFFFFF;
	margin-bottom: 15px;
}

section hgroup{margin-top: -360px;}

section p.numbers{font-size: 6em;}
section p.meta,section p.strings{font-size: 1.5em;}
section h1{font-size: 4.5em;}

/* countdown styles */

div#countdown{color: #353535;}

div#countdown p{
	width: 100%;
	display: inline-block;
	text-align: center;
}

p.numbers{
	width: 100%;
	height: 85%;
	background: #FFFFFF;
	margin-top: -25px;
	padding-top: 100px;
}

p.strings{
	width: 100%;
	height: auto;
	padding: 30px 0;
	background: #FF5722;
	color: #FFFFFF;
}

div.cd-box{
	width: 210px;
	height: 360px;
	background: #FFFFFF;
	float: left;
	padding: 25px 0 0 0;
	margin: 30px 15px 0 0;
	-webkit-box-shadow: 5px 6px 9px 1px rgba(53, 53, 53, 0.5);
	-moz-box-shadow: 5px 6px 9px 1px rgba(53, 53, 53, 0.5);
	box-shadow: 5px 6px 9px 1px rgba(53, 53, 53, 0.5);
}

/* footer */

footer{
	position: relative;
	top: 60px;
}

footer p{
  color: #787878;
}
</style>
  </head>
  <body>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet" type="text/css">

    <section>
      <div class="wrapper">
        <div id="countdown">
          <div class="cd-box">
            <p class="numbers days">00</p><br>
            <p class="strings timeRefDays">Days</p>
          </div>
          <div class="cd-box">
            <p class="numbers hours">00</p><br>
            <p class="strings timeRefHours">Hours</p>
          </div>
          <div class="cd-box">
            <p class="numbers minutes">00</p><br>
            <p class="strings timeRefMinutes">Minutes</p>
          </div>
          <div class="cd-box">
            <p class="numbers seconds">00</p><br>
            <p class="strings timeRefSeconds">Seconds</p>
          </div>
        </div>
      </div>
    </section>
<script type="text/javascript">

$(document).ready(function(){
	//
  (function(e){
		e.fn.countdown = function (t, n){
      console.log(n,"n");
			function i(){
				eventDate = Date.parse(r.date) / 1e3;
				currentDate = Math.floor(e.now() / 1e3);
				//
				if(eventDate <= currentDate){
					n.call(this);
					clearInterval(interval)
				}
				//
				seconds = eventDate - currentDate;
				days = Math.floor(seconds / 86400);
				seconds -= days * 60 * 60 * 24;
				hours = Math.floor(seconds / 3600);
				seconds -= hours * 60 * 60;
				minutes = Math.floor(seconds / 60);
				seconds -= minutes * 60;
				//
				days == 1 ? thisEl.find(".timeRefDays").text("Days") : thisEl.find(".timeRefDays").text("Days");
				hours == 1 ? thisEl.find(".timeRefHours").text("Hours") : thisEl.find(".timeRefHours").text("Hours");
				minutes == 1 ? thisEl.find(".timeRefMinutes").text("Minutes") : thisEl.find(".timeRefMinutes").text("Minutes");
				seconds == 1 ? thisEl.find(".timeRefSeconds").text("Seconds") : thisEl.find(".timeRefSeconds").text("Seconds");
				//
				if(r["format"] == "on"){
					days = String(days).length >= 2 ? days : "0" + days;
					hours = String(hours).length >= 2 ? hours : "0" + hours;
					minutes = String(minutes).length >= 2 ? minutes : "0" + minutes;
					seconds = String(seconds).length >= 2 ? seconds : "0" + seconds
				}
				//
				if(!isNaN(eventDate)){
					thisEl.find(".days").text(days);
					thisEl.find(".hours").text(hours);
					thisEl.find(".minutes").text(minutes);
					thisEl.find(".seconds").text(seconds)
				}
        else{
          errorMessage = "Invalid date. Example: 27 March 2015 17:00:00";
					alert(errorMessage);
					console.log(errorMessage);
					clearInterval(interval)
				}
			}
			//
			var thisEl = e(this);
			var r = {
				date: null,
				format: null
			};
			//
			t && e.extend(r, t);
			i();
			interval = setInterval(i, 1e3)
		}
	})(jQuery);
	//
	$(document).ready(function(){
		function e(){
			var e = new Date;
			e.setDate(e.getDate() + 60);
			dd = e.getDate();
			mm = e.getMonth() + 1;
			y = e.getFullYear();
			futureFormattedDate = mm + "/" + dd + "/" + y;
			return futureFormattedDate
		}
		//
		$("#countdown").countdown({
			date: "12 May 2020 08:06:00", // change date/time here - do not change the format!
			format: "on"
		});
	});
});
</script>
  </body>
</html> -->



<!-- Flip countdown -->

<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://momentjs.com/downloads/moment.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.14/moment-timezone-with-data-2012-2022.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.js"></script>
    <style media="screen">
    .clock {
      width: 650px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translateX(-50%) translateY(-50%);
    }
    </style>
  </head>
  <body>
    <div class="clock"></div>
    <script type="text/javascript">
    $(document).ready(function() {
      var clock;

      // Grab the current date
      var currentDate = new Date();

      // Target future date/24 hour time/Timezone
      var targetDate = moment.tz("2020-05-16 23:59", "Australia/Sydney");

      // Calculate the difference in seconds between the future and current date
      var diff = targetDate / 1000 - currentDate.getTime() / 1000;

      if (diff <= 0) {
        // If remaining countdown is 0
        clock = $(".clock").FlipClock(0, {
          clockFace: "DailyCounter",
          countdown: true,
          autostart: false
        });
        console.log("Date has already passed!")

      } else {
        // Run countdown timer
        clock = $(".clock").FlipClock(diff, {
          clockFace: "DailyCounter",
          countdown: true,
          callbacks: {
            stop: function() {
              console.log("Timer has ended!")
            }
          }
        });

        // Check when timer reaches 0, then stop at 0
        setTimeout(function() {
          checktime();
        }, 1000);

        function checktime() {
          t = clock.getTime();
          if (t <= 0) {
            clock.setTime(0);
          }
          setTimeout(function() {
            checktime();
          }, 1000);
        }
      }
    });

    </script>
  </body>
</html> -->

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img_nature_wide.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img_snow_wide.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img_mountains_wide.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html>
