<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>

<title>Poster 2</title>

<?php include("head.php"); ?> 
<style type="text/css">
#layer1 {
 position: absolute;
 z-index:1;
 visibility: hidden;
 width: 150px;
 height: 250px;
 left: 100px;
 top: 100px;
 margin-top:325px;
 margin-left:295px;
 background-color: #FFFFFF;
 border: 1px solid #000;
 padding: 10px;
}
#layer2 {
 position: absolute;
 z-index:1;
 visibility: hidden;
 width: 150px;
 height: 250px;
 left: 20px;
 top: 500px;
 margin-top:300px;
 margin-left:25px;
 background-color: #FFFFFF;
 border: 1px solid #000;
 padding: 10px;
}
#layer3 {
 position: absolute;
 z-index:1;
 visibility: hidden;
 width: 150px;
 height: 250px;
 left: 20px;
 top: 500px;
 margin-top:250px;
 margin-left:25px;
 background-color: #FFFFFF;
 border: 1px solid #000;
 padding: 10px;
}

#close {
 float: right;
}
</style>

<!-- Ken's Code -->

<!-- Pop Up Window -->
<script type=text/javascript>
x = 20;
y = 70;
function setVisible(obj)
{
 obj = document.getElementById(obj);
 obj.style.visibility = (obj.style.visibility == 'visible') ? 'hidden' : 'visible';
}
function placeIt(obj)
{
 obj = document.getElementById(obj);
 if (document.documentElement)
 {
  theLeft = document.documentElement.scrollLeft;
  theTop = document.documentElement.scrollTop;
 }
 else if (document.body)
 {
  theLeft = document.body.scrollLeft;
  theTop = document.body.scrollTop;
 }
 theLeft += x;
 theTop += y;
 obj.style.left = theLeft + 'px' ;
 obj.style.top = theTop + 'px' ;
 setTimeout("placeIt('layer1')",500);
}
window.onscroll = setTimeout("placeIt('layer1')",500);
</script>

<script type=text/javascript>
x = 20;
y = 70;
function setVisible(obj)
{
 obj = document.getElementById(obj);
 obj.style.visibility = (obj.style.visibility == 'visible') ? 'hidden' : 'visible';
}
function placeIt(obj)
{
 obj = document.getElementById(obj);
 if (document.documentElement)
 {
  theLeft = document.documentElement.scrollLeft;
  theTop = document.documentElement.scrollTop;
 }
 else if (document.body)
 {
  theLeft = document.body.scrollLeft;
  theTop = document.body.scrollTop;
 }
 theLeft += x;
 theTop += y;
 obj.style.left = theLeft + 'px' ;
 obj.style.top = theTop + 'px' ;
 setTimeout("placeIt('layer2')",500);
}
window.onscroll = setTimeout("placeIt('layer2')",500);
</script>
<script type=text/javascript>
x = 20;
y = 70;
function setVisible(obj)
{
 obj = document.getElementById(obj);
 obj.style.visibility = (obj.style.visibility == 'visible') ? 'hidden' : 'visible';
}
function placeIt(obj)
{
 obj = document.getElementById(obj);
 if (document.documentElement)
 {
  theLeft = document.documentElement.scrollLeft;
  theTop = document.documentElement.scrollTop;
 }
 else if (document.body)
 {
  theLeft = document.body.scrollLeft;
  theTop = document.body.scrollTop;
 }
 theLeft += x;
 theTop += y;
 obj.style.left = theLeft + 'px' ;
 obj.style.top = theTop + 'px' ;
 setTimeout("placeIt('layer3')",500);
}
window.onscroll = setTimeout("placeIt('layer3')",500);
</script>



</head>


<body style="background: #7ecefd">

<!-- Facebook -->
<!--
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=412475362202298";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
-->


<!-- Analytics -->
<?php include("ga.php"); ?>
<!--  END Analytics -->

<!-- TOP MENU -->
<?php include("menu.php"); ?>

<!-- Social Media Popup (Ken) -->
<div class="row">
    <div class="nine columns">

<div style="float: left">
  <img src="images/poster-2.png" style="margin-top:100px;">
  <form>
<input type="button" value="Download" onclick="setVisible('layer1')" style="margin-top:5px; margin-left: 325px;">
</form>
  </div>
  <div id="layer1"><span id="close">
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    <a style="TEXT-DECORATION: none" 
href="javascript:setVisible('layer1')"><STRONG>Close X</STRONG></a></span> 
<p style="clear: both">Please take the time and share this with your friends.</p>
<div style="clear: both">
<a href="http://www.facebook.com/share.php?u=http://beyoubehealthy.org/poster-test-2.php" target="_blank"><img src="images/facebook.png" alt="Facebook"></a>
<div style="padding-top: 7px;"><a href="https://twitter.com/share" class="twitter-share-button" data-text="I've just downloaded a poster from BeYouBeHealthy.org" data-hashtags="BeYouBeHealthy">Tweet</a></div>
<div style="padding-top: 7px;">
<script src="//platform.linkedin.com/in.js" type="text/javascript">
 lang: en_US
</script>
<script type="IN/Share" data-url="http://beyoubehealthy.org/poster-test-2.php" data-counter="right"></script>
</div>
 <div style="clear: both; padding-top: 11px;" >
 <a href="pdf/TPPI_Poster_2.pdf">Download your File</a></div>
</div>
</div>
</div>

<div class="row">
    <div class="three columns">
<div style="float: left;">
  <img src="images/poster-1.png" style="margin-top:150px;">
  <form>
<input type="button" value="Download" onclick="setVisible('layer2')" style="margin-top:5px; margin-left: 75px;">
</form>
  
  <div id="layer2"><span id="close">
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    <a style="TEXT-DECORATION: none" 
href="javascript:setVisible('layer2')"><STRONG>Close X</STRONG></a></span> 
<p style="clear: both">Please take the time and share this with your friends.</p>
<div style="clear: both">
<a href="http://www.facebook.com/share.php?u=http://beyoubehealthy.org/poster-test-1.php" target="_blank"><img src="images/facebook.png" alt="Facebook"></a>
<a href="https://twitter.com/share" style="padding-top: 11px;" class="twitter-share-button" data-text="I've just downloaded a poster from BeYouBeHealthy.org" data-hashtags="BeYouBeHealthy">Tweet</a>
<script src="//platform.linkedin.com/in.js" type="text/javascript">
 lang: en_US
</script>
<script type="IN/Share" data-url="http://beyoubehealthy.org/poster-test-1.php" data-counter="right"></script>

 <div style="clear: both;" >
 <a href="pdf/TPPI_Poster_1.pdf">Download your File</a></div>
</div>
</div>
</div>


<div>
  <img src="images/poster-3.png" style="margin-top:20px;">
  <form>
<input type="button" value="Download" onclick="setVisible('layer3')" style="margin-top:5px; margin-left: 75px;">
</form>
  
  <div id="layer3"><span id="close">
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    <a style="TEXT-DECORATION: none" 
href="javascript:setVisible('layer3')"><STRONG>Close X</STRONG></a></span> 
<p style="clear: both">Please take the time and share this with your friends.</p>
<div style="clear: both">
<a href="http://www.facebook.com/share.php?u=http://beyoubehealthy.org/poster-test-3.php" target="_blank"><img src="images/facebook.png" alt="Facebook"></a>
<a href="https://twitter.com/share" style="padding-top: 11px;" class="twitter-share-button" data-text="I've just downloaded a poster from BeYouBeHealthy.org" data-hashtags="BeYouBeHealthy">Tweet</a>
<script src="//platform.linkedin.com/in.js" type="text/javascript">
 lang: en_US
</script>
<script type="IN/Share" data-url="http://beyoubehealthy.org/poster-test-3.php" data-counter="right"></script>

 <div style="clear: both;" >
 <a href="pdf/TPPI_Poster_3.pdf">Download your File</a></div>
</div>
</div>
</div>
</div>

<!-- End Social -->

</body>
</html>