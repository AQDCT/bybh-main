<?php

include('admin/config.php');

$conn=mysql_connect($hostname, $username, $password);
// Check connection
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$firstname = mysql_real_escape_string($_GET['firstname']);
$lastname = mysql_real_escape_string($_GET['lastname']);

$email = mysql_real_escape_string($_GET['email']);

$address = mysql_real_escape_string($_GET['address']);
$city = mysql_real_escape_string($_GET['city']);
$state = mysql_real_escape_string($_GET['state']);
$zip = mysql_real_escape_string($_GET['zip']);

$school = mysql_real_escape_string($_GET['school']);
//echo "('".$firstname."', '".$lastname."', '".$email."', '".$address."', '".$city."', '".$state."', '".$zip."', '".$school."')";
$sql='SELECT email FROM `'.$database.'`.`condom_giveaway` WHERE email="'.$email.'"';
//echo $sql;

$result = mysql_query($sql);
$count = mysql_num_rows($result);

if($count == 0){

  $stmt = "INSERT INTO `$database`.`condom_giveaway` (firstname, lastname, email, address, city, state, zip, school) VALUES ('".$firstname."', '".$lastname."', '".$email."', '".$address."', '".$city."', '".$state."', '".$zip."', '".$school."')";
  $insert = mysql_query($stmt);

  $send = "<h1>Another request has come in for the condom giveaway.</h1>";
  $send .= "Name: ".$firstname." ".$lastname."<br/>";
  $send .= "Email: ".$email."<br/>";
  $send .= "School: ".$school."<br/>";
  $send .= "<p>Address:";
  $send .= "<br/>".$address."<br/>".$city.", ".$state." ".$zip."</p>";
  $send .= "<p>This website request originated from <a href='http://www.beyoubehealthy.org/giveaway.php'>http://www.beyoubehealthy.org/giveaway.php</a>.<br/></p>";

  $to = 'prsolans@gmail.com';
  //$to      = 'Suzanne.Elder@cityofchicago.org';
  $subject = 'BeYouBeHealthy.org Web Request - Condom Giveaway';
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $headers .= 'Bcc: paul@aqdct.com' . "\r\n";
  $headers .= 'From: Condom Giveaway <website@BeYouBeHealthy.org>' . "\r\n" .
      'Reply-To: do-not-reply@BeYouBeHealthy.org' . "\r\n" .
      'X-Mailer: PHP/' . phpversion();

  $success = 'add';
  
  mail($to, $subject, $send, $headers);
}
else{
  $success = "error";
}

mysql_close($conn);


/* Redirect to a different page in the current directory that was requested  */
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'giveaway.php?m='.$success.'';

header('Location: http://$host$uri/$extra');

?>