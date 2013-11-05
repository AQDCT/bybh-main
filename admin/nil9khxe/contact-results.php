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

$query = "SELECT * FROM `$database`.`health_matters`;";

$result = mysql_query($query);
// Check result
if(! $result )
{
  die('no result: ' . mysql_error());
}

echo "<table><tr><th>Name</th><th>Organization</th><th>Email</th></tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr><td>" . $row['name'] . "</td><td>" . $row['organization'] . "</td><td>" . $row['email'] . "</td></tr>";
  }
echo "</table>";

mysql_close($con);




?>