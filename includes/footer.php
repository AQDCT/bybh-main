
<!-- We have 2 footer includes. This one is for pages with scrolling section functionality 
USE WITH SCROLLING PAGES -->



<div class="footer">
	<div class="row">		
		<div class="fifteen columns">
			<div class="four mobile-two columns">
				<ul style="padding-top:5px">
					<a href="http://aqdct.com" target="_blank">site by AQDCT</a>
				</ul>
			</div>
			
			<div class="eleven mobile-four columns">
				<ul class="right">
					<a href="parents_teachers.php">Adults Who Care</a>&nbsp;&nbsp;&nbsp;
					<a href="clinic_finder.php">Clinic Finder</a>&nbsp;&nbsp;&nbsp;
					<a href="about.php">About</a>&nbsp;&nbsp;&nbsp;
					<a href="contact.php">Contact</a>&nbsp;&nbsp;&nbsp;
					<a href="site-map.php">Site Map</a>&nbsp;&nbsp;&nbsp;
					<a href="privacy_policy.php">Privacy Policy</a> &nbsp;&nbsp;
					
					<img src="<?=$root;?>/images/healthy_chicago_logo.png" align="absmiddle" />
				</ul>
			</div>
			
		</div>
	</div>
</div>  


<!-- Included JS Files (Uncompressed) -->
<script src="javascripts/parsley.min.js"></script>

<!-- Included JS Files (Compressed) -->
<script src="javascripts/foundation.min.js"></script>

<!-- Initialize JS Plugins -->
<script src="javascripts/app.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>


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
        
<!-- We have 2 footer includes. This one is for pages with scrolling section functionality 
USE WITH SCROLLING PAGES -->
