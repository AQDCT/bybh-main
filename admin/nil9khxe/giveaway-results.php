<head>
 <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

  </head><?php

include('../config.php');

$con=mysql_connect($hostname, $username, $password);
// Check connection
if(! $con )
{
  die('Could not connect: ' . mysql_error());
}

$query = "SELECT * FROM `".$database."`.`condom_giveaway`;";

$result = mysql_query($query);
// Check result
if(! $result )
{
  die('no result: ' . mysql_error());
}

echo "<table><tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Address</th><th>City</th><th>State</th><th>Zip</th><th>School</th></tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr><td>" . $row['firstname'] . "</td><td>" . $row['lastname'] . "</td><td>" . $row['email'] . "</td>";
  echo "<td>".$row['address']."</td><td>".$row['city']."</td><td>".$row['state']."</td><td>".$row['zip']."</td>";
  echo "<td>".$row['school']."</tr>";
  }
echo "</table>";

mysql_close($con);


?>