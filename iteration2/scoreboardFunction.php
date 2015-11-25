<link rel="stylesheet" type="text/css" href="4styles.css">
<?php
$dbhost = 'oniddb.cws.oregonstate.edu';
$dbname = 'christme-db';
$dbuser = 'christme-db';
$dbpass = '0M0RvQrlk8ux5iWf';
$msg = '';

$mysql_handle = mysql_connect($dbhost, $dbuser, $dbpass)
  or die("Error connecting to database server");

mysql_select_db($dbname, $mysql_handle)
  or die("Error selecting database: $dbname");

  $query = "SELECT * FROM therapists"; //You don't need a ; like you do in SQL
  $result = mysql_query($query);
  echo "<table>"; // start a table tag in the HTML
  echo "<tr><th>" . "First Name" . "</th><th>" . "Last Name". "</th></tr>";
  while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
  echo "<tr><td>" . $row['firstName'] . "</td><td>" . $row['lastName'] . "</td></tr>";  //$row['index'] the index here is a field name
  }

  echo "</table>"; //Close the table in HTML

mysql_close($mysql_handle);
?>
