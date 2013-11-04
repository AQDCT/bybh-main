<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>

  <title>Bodies | Be You Be Healthy</title>
  
<?php include("includes/head.php"); ?>
  
</head>


<body style="background: #D92B28">

<!-- Analytics -->
<?php include("includes/ga.php"); ?>
<!--  END Analytics -->

<!-- TOP MENU -->
<?php include("includes/menu.php"); ?>
<!--  END MENU -->

  <div id="sectionT" class="tpad">  
      <div class="row">
        <div class="three columns offset-by-one">
        <img src="images/button-Pandora-Ads-2.png"/>
        <p style='text-align: right; color: white; '><b>Yes, we’ll mail them to you. We want you to protect yourself and your partner from unplanned pregnancies and sexually transmitted infections (STIs). Condoms do both. Because your privacy matters, too, we will not use your personal information for any other reason than to send you the condom kit you have requested.* Packages will be mailed in a plain envelope.</b></p>
        </div>
        <div class="ten columns offset-by-one end">
        <p>Just fill out this form and the Office of Adolescent and School Health will mail you a discrete package that includes condoms and instructions on proper use. We’ll also hook you up with solid information about how to make safe, healthy, and responsible choices.</p>
       <h3>Your Information</h3>
       <?php 
          if(isset($_GET['m'])){
            if($_GET['m'] == 'add'){
              echo "<div class='alert-box success'>Thank you for registering.</div>";

            }
            if($_GET['m'] == 'error'){
              echo "<div class='alert-box alert'>You can only register once.</div>";
            }
          }
       ?>

       <form action='giveaway-process2.php'>
           <fieldset>


   <div class="row">
    <div class="five columns">
      <input type="text" placeholder="First Name" name='firstname' />
    </div>
     <div class="five columns">
      <input type="text" placeholder="Last Name" name='lastname'/>
    </div>
    <div class="five columns">
      <input type="text" placeholder="Email" name='email'/>
    </div>
  </div>
   
  <input type="text" class="fifteen" placeholder="Street" name='address' />
  <div class="row">
    <div class="eight columns">
      <input type="text" placeholder="City" name='city'/>
    </div>
    <div class="two columns">
      <input type="text" placeholder="State" name='state'/>
    </div>
    <div class="five columns">
      <input type="text" placeholder="ZIP" name='zip'/>
    </div>
  </div>
  <div class='row'>
    <div class='fifteen columns'>
    <input type='text' placeholder="School (Optional)" name='school' />
  </div>
  </div>
    <div class='row'>
    <div class='five columns'>
    <input type='submit' class='button' value='Submit'  />
  </div>
  <div class='ten columns'>
    <p>*One package per request. While supplies last. Packages will be mailed in a plain envelope. Please think carefully before ordering for anyone other than yourself. You must have explicit permission from another student to order on their behalf. Pranksters beware.</p>
  </div>
  </div>
</fieldset>
        </form>
        </div>
  </div>
</div>
<!-- TOP MENU -->
<?php include("includes/footer.php"); ?>
<!--  END MENU -->

</body>
</html>
