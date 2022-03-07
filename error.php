<?php

$page_redirected_from = $_SERVER['REQUEST_URI'];  // this is especially useful with error 404 to indicate the missing page.
$server_url = "http://" . $_SERVER["SERVER_NAME"] . "/";
$redirect_url = $_SERVER["REDIRECT_URL"];
$redirect_url_array = parse_url($redirect_url);
$end_of_path = strrchr($redirect_url_array["path"], "/");

switch(getenv("REDIRECT_STATUS"))
{
	# "400 - Bad Request"
	case 400:
	$error_code = "400 - Bad Request";
	$explanation = "The syntax of the URL submitted by your browser could not be understood. Please verify the address and try again.";
	$redirect_to = "";
	break;

	# "401 - Unauthorized"
	case 401:
	$error_code = "401 - Unauthorized";
	$explanation = "This section requires a password or is otherwise protected. If you feel you have reached this page in error, please return to the login page and try again, or contact the webmaster if you continue to have problems.";
	$redirect_to = "";
	break;

	# "403 - Forbidden"
	case 403:
	$error_code = "403 - Forbidden";
	$explanation = "This section requires a password or is otherwise protected. If you feel you have reached this page in error, please return to the login page and try again, or contact the webmaster if you continue to have problems.";
	$redirect_to = "";
	break;

	# "404 - Not Found"
	case 404:
	$error_code = "404 - Not Found";
	$explanation = "The requested resource '" . $page_redirected_from . "' could not be found on this server. Please verify the address and try again.";
	$redirect_to = "";
	break;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<link rel="Shortcut Icon" href="/favicon.ico" type="image/x-icon" />
	
	
	
	
	
<?php
	if ($redirect_to != "")
	{
?>

	<meta http-equiv="Refresh" content="5; url='<?php print($redirect_to); ?>'">
<?php
	}
?>

	<title>Page not found <?php print ($redirect_to); ?></title>

</head>


<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="font-awesome.min.css">


<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Arial", sans-serif}
.w3-bar,h1,button {font-family: "Verdana", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}

img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 500px;
  position: relative;
  margin: auto;
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
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.0s;
  animation-name: fade;
  animation-duration: 1.0s;
}

@-webkit-keyframes fade {
  from {opacity: .8} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .8} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

</style>




<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-blue w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-light-gray">Home</a>
    <a href="https://www.mainebuilds.org/map.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-light-gray">Map</a>
    <a href="https://progress.mainebuilds.org" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-light-gray">Progress</a>
    <a href="https://survey.mainebuilds.org" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-light-gray">Survey</a>
    <a href="mailto:info@mainebuilds.org?subject=Maine Builds Information Request" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-light-gray">Contact</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="https://www.mainebuilds.org/map.html" class="w3-bar-item w3-button w3-padding-large">Map</a>
    <a href="https://progress.mainebuilds.org" class="w3-bar-item w3-button w3-padding-large">Progress</a>
    <a href="https://survey.mainebuilds.org" class="w3-bar-item w3-button w3-padding-large">Survey</a>
    <a href="mailto:info@mainebuilds.org?subject=Maine Builds Information Request" class="w3-bar-item w3-button w3-padding-large">Contact</a>
  </div>
</div>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <!--<div class="w3-content">-->
  <div class="w3-container  w3-center">

	<h1>Error Code <?php print ($error_code); ?></h1>

	<p class="w3-text-grey">We were not able to find the <a href="http://en.wikipedia.org/wiki/Uniform_resource_locator">URL</a> you requested. 

	<br> 

	<br> 

	<?PHP echo($explanation); ?>
	</p>


	<p class="w3-text-grey">You may want to try starting from the home page: <a href="<?php print ($server_url); ?>"><?php print ($server_url); ?></a></p>


	<p class="w3-text-grey">Or, consider these alternatives:</p>


    	<div class="slideshow-container">

			<div class="mySlides fade">
 				<img src="images/houses/5.jpg" style="width:309px; height:343px;">
			</div>
			<div class="mySlides fade">
 				<img src="images/houses/6.jpg" style="width:309px; height:343px;">
			</div>

			<div class="mySlides fade">
 				<img src="images/houses/8.jpg" style="width:309px; height:343px;">
			</div>
		</div>
	</div>
</div>


<!-- Footer -->
<footer class="w3-container  w3-center w3-opacity">  
 <p>Powered by <a href="https://www.gpcog.org" target="_blank"><img src="images/logos/gpcog.png" alt="GPCOG" class="center" style="width:150px; height:55px;"></a></p>
</footer>


<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>