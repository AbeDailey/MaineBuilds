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


    <link rel="stylesheet" href="../css_01_formating.css">
    <link rel="stylesheet" href="../css_02_elements.css">
    <link rel="stylesheet" href="../css_03_layout.css">
    <link rel="stylesheet" href="../css_04_colors.css">
    <link rel="stylesheet" href="../css_05_animation.css">
    <link rel="stylesheet" href="../css_06_media_queries.css">


</head>



<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Arial", sans-serif}
  .goog-te-banner-frame.skiptranslate {
    display: none !important;
    } 

    body {
    top: 0px !important; 
    }

img {vertical-align: middle;}

    /* Slideshow container */
    
    .slideshow-container {
        max-width: 500px;
        position: relative;
        margin: auto;
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
        from {
            opacity: .8
        }
        to {
            opacity: 1
        }
    }
    
    @keyframes fade {
        from {
            opacity: .8
        }
        to {
            opacity: 1
        }
    }

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

</style>




<body>

<!-- Navbar -->
<div class="w3-top" style="position:fixed; top:0; left:0; right:0; height:51px;">
        <div class="w3-bar w3-blue w3-card w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="index.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-light-gray">Home</a>
            <a href="map.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-light-gray">Map</a>
            <a href="progress/westbrook.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-light-gray">Progress</a>
            <a href="upload/index.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-light-gray">Upload Data</a>
            <a href="signup.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-light-gray">Request Account</a>
            <a href="mailto:info@mainebuilds.org?subject=Maine Builds Information Request" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-light-gray">Contact</a>
        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
            <a href="map.html" class="w3-bar-item w3-button w3-padding-large">Map</a>
            <a href="progress/westbrook.html" class="w3-bar-item w3-button w3-padding-large">Progress</a>
            <a href="upload/index.html" class="w3-bar-item w3-button w3-padding-large">Upload Data</a>
            <a href="signup.html" class="w3-bar-item w3-button w3-padding-large">Request Account</a>
            <a href="mailto:info@mainebuilds.org?subject=Maine Builds Information Request" class="w3-bar-item w3-button w3-padding-large">Contact</a>
        </div>
    </div>

    <header class="w3-container w3-center" style="margin-top:50px; padding: 96px 16px; background-image:url('images/map_home.jpg'); background-size:cover">
        <h1 class="w3-margin w3-jumbo">Maine Builds</h1>
    </header>

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

			<div class="mySlides fade" alt="A slideshow showing 3 alternative development scenarios">
 				<img src="images/houses/5.jpg" alt="A picture of one development scenario." style="width:309px; height:343px;">
			</div>
			<div class="mySlides fade">
 				<img src="images/houses/6.jpg" alt="A picture of an alternative development scenario." style="width:309px; height:343px;">
			</div>

			<div class="mySlides fade">
 				<img src="images/houses/8.jpg" alt="A picture of a third development scenario." style="width:309px; height:343px;">
			</div>
		</div>
	</div>
</div>


<footer class="w3-bottom w3-container w3-blue w3-center ">
        <p class="w3-center">Powered by
            <a href="https://www.gpcog.org" target="_blank"><img src="images/logos/gpcog_white.png" alt="GPCOG" class="center" style="width:150px; height:55px;"></a>
        </p>

        <div class="w3-row-padding w3-padding-16 w3-container">
            <div class="w3-content">
                <div class="w3-third">
                    <a href="website_accessibility.html">Accessibility</a>
                </div>
                <div class="w3-third">
                    <a href="privacy_policy.html">Privacy Policy</a>
                </div>
                <div class="w3-third">
                    <a href="license.html">License</a>
                </div>
            </div>
        </div>

    </footer>


 <!----------Google Translate (Mobile Friendly)--------->

 <style>
        #google-translate-container {
            float: right;
            padding: 3px 5px 0px 0px;
        }
        
        .goog-te-combo,
        .goog-te-banner *,
        .goog-te-ftab *,
        .goog-te-menu *,
        .goog-te-menu2 *,
        .goog-te-balloon * {
            font-family: arial;
            font-size: 10pt;
            background-image: url("images/Google.png");
            background-position: 3px 4px;
            background-size: 22px;
            background-repeat: no-repeat;
            text-indent: 20px;
            background-color: #fff;
            color: #000 !important;
        }
        
        .goog-logo-link {
            display: none !important;
        }
        
        .goog-te-gadget {
            color: transparent !important;
        }
        
        .goog-te-gadget .goog-te-combo {
            margin: 2px 0 !important;
            border-radius: 15px !important;
        }
        
        .goog-te-combo {
            border: 1px solid !important;
            border-color: #bcc9d7 #96a3b1 #96a3b1 #bcc9d7 !important;
            border-radius: 0 !important;
            height: 32px;
            !important;
            padding: 0 1px 0 .25rem !important;
        }
        
        #launcher-wrapper {
            bottom: 50px !important;
        }
    </style>

    <div id="google-translate-container">

        <div id="google_translate_element" style="position: fixed; bottom: 0px; right: 20px; z-index: 5;"></div>

    </div>

    <script type="text/javascript">
        function googleTranslateElementInit() {

            new google.translate.TranslateElement({
                pageLanguage: "en",
                autoDisplay: false,
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, "google_translate_element");

            // begin accessibility compliance

            /*             $('img.goog-te-gadget-icon').attr('alt', 'Google Translate');

                        $('div#goog-gt-tt div.logo img').attr('alt', 'translate');

                        $('div#goog-gt-tt .original-text').css('text-align', 'left');

                        $('.goog-te-gadget-simple .goog-te-menu-value span').css('color', '#000000');

                        $('.goog-te-combo').attr('aria-label', 'google translate languages');

                        $('svg.goog-te-spinner').attr('title', 'Google Translate Spinner');

                        $('.goog-te-gadget-simple .goog-te-menu-value span').css('color', '#000000'); */

        }
    </script>

    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>




    <!--------------End Google Translate----------------->

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