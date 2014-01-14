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
<div class="fixed contain-to-grid drop">
	<div class="row">
		<nav class="top-bar">
			  <ul>
					<!-- Title Area -->
					<li><a href="<?=$root;?>/index.php"><img class="hide-for-medium-down" src="<?=$root;?>/images/BeYouBeHealthy_logo_300.png" alt="Be You Be Healthy Logo"><img class="show-for-medium-down" src="<?=$root;?>/images/BeYouBeHealthy_logo.png" alt="Be You Be Healthy Logo"></a></li>
					<li class="toggle-topbar"><a href="#"></a></li>
			  </ul> 

		 <section>
			<!-- Right Nav Section -->

				<ul class="right">
		 
				   <li class="social" style="list-style: none"><a href="http://www.facebook.com/sexloop" target="_blank"><i class="icon-facebook" style="font-color: white; font-size: 20px"> </i></a></li>
		   
					<li class="social" style="list-style: none"><a href="https://twitter.com/sexedloop" target="_blank"><i class="icon-twitter" style="font-color: white; font-size: 20px; padding-right: 10px"> </i></a></li>
			
				   <li class="social" style="list-style: none"><a href="http://www.sexedloop.com/feed" target="_blank"><i class="icon-rss" style="font-color: white; font-size: 20px; padding-right: 15px"> </i></a></li>
		  
				</ul>
     	 </section>
    </nav>	

  </div>
<!-- END TOP FIXD -->	

</div>
     
  


<div class="show-for-xlarge" style="margin:320px 0px 190px;">
	<div class="row">
		<div class="seven columns push-eight">
			<h1 style="font-size:42px; text-align: right; padding-right:40px;">It is easier to build<br/>strong children than to<br/>repair broken men.</h1>
			<h5 style="color:#dcdcdc; text-align:right; padding-right:40px; margin-top:40px;">- Fredrick Douglas</h5>
		</div>
		<div class="one columns"></div>
	</div>
</div>

<div class="show-for-large" style="margin: 290px 0px 140px;">
	<div class="row">
		<div class="seven columns push-eight">
			<h1 style="font-size:42px; text-align: right; padding-right:40px;">It is easier to build<br/>strong children than to<br/>repair broken men.</h1>
			<h5 style="color:#dcdcdc; text-align:right; padding-right:40px; margin-top:40px;">- Fredrick Douglas</h5>
		</div>
		<div class="one columns"></div>
	</div>
</div>

<div class="show-for-medium" style="margin: 240px 0px 140px ">
	<div class="row">
		<div class="seven columns push-eight">
			<h1 style="font-size:48px; text-align: right; padding-right:40px;">It is easier to build<br/>strong children than to<br/>repair broken men.</h1>
			<h5 style="color:#dcdcdc; text-align:right; padding-right:40px; margin-top:40px;">- Fredrick Douglas</h5>
		</div>
		<div class="one columns"></div>
	</div>
</div>



<div class="show-for-medium-down" style="margin: 60px 0"></div>
	<div class="row home">
		<div class="fifteen columns">	
			
			<div class="row">
				<div class="twelve columns push-three">
				
					<div class="text-glow-hover three columns home-love panel">
							<a href="bodies.php"><h4>Sex &amp; Relationships</h4></a>
					</div>
	
					<div class="text-glow-hover three columns home-health panel">
							<a href="health-matters.php"><h4>Health Matters</h4></a>
					</div>
	
					<div class="text-glow-hover three columns home-teen panel">
							<a href="teen_health_rights.php"><h4>Your Health Care Rights</h4></a>
					</div>
	
					<div class="text-glow-hover three columns home-clinic panel">
							<a href="http://beyoumedia.org" target="_blank"><h4>BeYou Media</h4></a>
					</div>
	
					 <div class="text-glow-hover three columns home-data panel">
							<a href="health_data_research.php"><h4>Health Data & Research</h4></a>			
					</div>
					
				</div>
			</div>
		</div>
		
</div>
    
<?php include("includes/noscroll-footer.php"); ?>
  

  <!-- Included JS Files (Compressed) -->
  <script src="javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <!-- <script src="javascripts/app.js"></script> -->

 <!--
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
  -->  
    
  
</body>
</html>
