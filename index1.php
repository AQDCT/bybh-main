<!DOCTYPE html>


<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

<?php include("includes/head.php"); ?>
  <title>BeYouBeHealthy</title>


</head>


<body>

<!-- Analytics -->
<?php include("includes/ga.php"); ?>
<!--  END Analytics -->

<!-- TOP MENU -->
<?php include("includes/menu.php"); ?>
<!--  END MENU -->


<!--
<div class="row tpad135 home-grad">
	<div class="four mobile-four columns">
		
	</div>
    <div class="seven columns">
	 	

    </div>
    
    <div class="four columns">
   	
	</div>
	
</div>
-->


<div class="push"></div>

<div class="row home">
    <div class="fifteen columns centered">	

		<div class="three columns home-love panel" style="border-right: thin solid #dcdcdc">
				<a href="bodies.php"><h4>Sex &amp; <br>Relationships</h4></a>
		</div>
		
		<div class="three columns home-health panel" style="border-right: thin solid #dcdcdc">
				<a href="health-matters.php"><h4>Health <br>Matters</h4></a>
		</div>
		
		<div class="three columns home-teen panel" style="border-right: thin solid #dcdcdc">
				<a href="teen_health_rights.php"><h4>Teen Health <br>Care Rights</h4></a>
		</div>
		
		<div class="three columns home-clinic panel" style="border-right: thin solid #dcdcdc">
				<a href="clinic_finder.php"><h4>Clinic <br>Finder</h4></a>
		</div>
		
		 <div class="three columns home-data panel">
				<a href="health_data_research.php"><h4>Health Data <br>& Research</h4></a>			
		</div>

	</div>
</div>

   
<?php include("includes/noscroll-footer.php"); ?>
  

  <!-- Included JS Files (Compressed) -->
  <script src="javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <!-- <script src="javascripts/app.js"></script> -->

 
			<script>
		  $('#featured').orbit({
		  animation: 'fade',      // fade, horizontal-slide, vertical-slide, horizontal-push
		  animationSpeed: 1100,                // how fast animtions are
		  timer: true,                       // true or false to have the timer
		  resetTimerOnClick: true,           // true resets the timer instead of pausing slideshow progress
		  advanceSpeed: 4000,                 // if timer is enabled, time between transitions
		  pauseOnHover: true,                // if you hover pauses the slider
		  startClockOnMouseOut: true,        // if clock should start on MouseOut
		  startClockOnMouseOutAfter: 1000,    // how long after MouseOut should the timer start again
		  directionalNav: true,               // manual advancing directional navs
		  captions: false,                    // do you want captions?
		  captionAnimation: 'none',           // fade, slideOpen, none
		  captionAnimationSpeed: 800,         // if so how quickly should they animate in
		  bullets: false,                      // true or false to activate the bullet navigation
		  bulletThumbs: false,                // thumbnails for the bullets

		  afterSlideChange: function(){},     // empty function
		  fluid: true                         // or set a aspect ratio for content slides (ex: '4x3')
		});
    </script> 
    
    
  
</body>
</html>
