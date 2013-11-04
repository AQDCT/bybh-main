<?php

/*
$username = "dbo466179813";
$database = "db466179813";
$password = "Bananas!!";
$hostname = "localhost:/tmp/mysql5.sock"; 
*/

$username = 'root';
$database = 'bybh';
$password = 'root';
$hostname = 'localhost';

$conn = new mysqli($hostname, $username, $password, $database);

// check connection
if ($conn->connect_error) {
  trigger_error('Database connection failed: '  . $conn->connect_error, E_USER_ERROR);
}

$firstname = $conn->real_escape_string($_GET['firstname']);
$lastname = $conn->real_escape_string($_GET['lastname']);
$email = $conn->real_escape_string($_GET['email']);
$address = $conn->real_escape_string($_GET['address']);
$city = $conn->real_escape_string($_GET['city']);
$state = $conn->real_escape_string($_GET['state']);
$zip = $conn->real_escape_string($_GET['zip']);
$school = $conn->real_escape_string($_GET['school']);

$sql='SELECT email FROM condom_giveaway WHERE email="'.$email.'"';
 
$rs=$conn->query($sql);
$rows_returned = $rs->num_rows;
 
if($rows_returned == 0) {
$success = "add";

$stmt = $conn->prepare("INSERT INTO condom_giveaway (firstname, lastname, email, address, city, state, zip, school) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param('ssssssss', $firstname, $lastname, $email, $address, $city, $state, $zip, $school);
$stmt->execute();

} else {
  $success = "error";
}


$send = "<h1>Another request has come in for the condom giveaway.</h1>";
$send .= "Name: ".$firstname." ".$lastname."<br/>Email: ".$email."<br/>Address:<br/>".$address."<br/>".$city.", ".$state." ".$zip."";
$send .= "<p>This website request originated from <a href='http://www.beyoubehealthy.org/giveaway.php'>http://www.beyoubehealthy.org/giveaway.php</a>.<br/></p>";

$to = 'prsolans@gmail.com';
//$to      = 'Suzanne.Elder@cityofchicago.org';
$subject = 'BeYouBeHealthy.org Web Request - Condom Giveaway';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//$headers .= 'Cc: michael@aqdct.com' . "\r\n";
$headers .= 'From: Condom Giveaway <website@BeYouBeHealthy.org>' . "\r\n" .
    'Reply-To: do-not-reply@BeYouBeHealthy.org' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $send, $headers);

mysqli_close($conn);

/* Redirect to a different page in the current directory that was requested  */
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'giveaway.php?m='.$success.'';
header("Location: http://$host$uri/$extra");
echo $to;
echo $subject;
echo $headers;
echo $send;
?>