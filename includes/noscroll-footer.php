
<!-- We have 2 footer includes. This one is for pages with NO SCROLLING functionality 
USE WITH NON-SCROLLING PAGES -->

<div class="noscroll-footer">

	<div class="row">		
		<div class="fifteen columns">
			<div class="hide-for-small four mobile-two columns">
				<ul style="padding-top:5px">
					<a href="http://aqdct.com" target="_blank">site by AQDCT</a>
				</ul>
			</div>
			
			<div class="eleven mobile-four columns">
				<ul class="right">
					<img class="hide-for-small" src="<?=$root;?>/images/healthy_chicago_logo.png" align="right"/>
					<a href="parents_teachers.php">Adults Who Care</a>&nbsp;&nbsp;&nbsp;
					<a href="clinic_finder.php">Clinic Finder</a>&nbsp;&nbsp;&nbsp;
					<a href="about.php">About</a>&nbsp;&nbsp;&nbsp;
					<a href="contact.php">Contact</a>&nbsp;&nbsp;&nbsp;
					<a href="site-map.php">Site Map</a>&nbsp;&nbsp;&nbsp;
					<a href="privacy_policy.php">Privacy Policy</a> &nbsp;&nbsp;
					
				</ul>
			</div>
			
		</div>
	</div>
</div>   


  <script src="/CDC/web/bybh/javascripts/jquery.foundation.mediaQueryToggle.js"></script>
  <script src="/CDC/web/bybh/javascripts/jquery.foundation.orbit.js"></script>
  <script src="/CDC/web/bybh/javascripts/jquery.foundation.accordion.js"></script>
  <script src="/CDC/web/bybh/javascripts/foundation.min.js"></script>
  <script type="text/javascript" src="/CDC/web/bybh/stylesheets/jquery.easing.1.3.js"></script>

 <script type="text/javascript">
            $(function() {
                $('ul.nav a').bind('click',function(event){
                    var $anchor = $(this);
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 1500,'easeInOutExpo');
                   
                    event.preventDefault();
                });
            });
        </script>

