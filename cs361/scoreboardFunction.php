<link rel="stylesheet" type="text/css" href="4styles.css">
<?php
  $dbhost = 'oniddb.cws.oregonstate.edu';
  $dbname = 'hotant-db';
  $dbuser = 'hotant-db';
  $dbpass = 'L7DDhDjzEpfmlwUv';
  $msg = '';

  $mysql_handle = mysql_connect($dbhost, $dbuser, $dbpass)
    or die("Error connecting to database server");

  mysql_select_db($dbname, $mysql_handle)
    or die("Error selecting database: $dbname");

  $price = $_GET['price'];
  $speciality = $_GET['speciality'];
  $location = $_GET['location'];

  if($price == "low"){
        //low price, yes location, yes speciality
    $query = "SELECT * FROM therapists WHERE speciality = '$speciality' AND location = '$location' ORDER BY price DESC";
    $result = mysql_query($query);
    echo "<table>";
    echo "<tr><th>" . "First Name" . "</th><th>" . "Last Name". "</th><th>" . "Price". "</th><th>" . "Speciality". "</th><th>" . "Location". "</th></tr>";
    while($row = mysql_fetch_array($result))
    {
      echo "<tr><td>" . $row['firstName'] . "</td><td>" . $row['lastName'] . "</td><td>" . $row['price'] . "</td><td>" . $row['speciality'] . "</td><td>" . $row['location'] . "</td></tr>";
    }
    echo "</table>";
  }else if($price == "high"){
        //high price, yes location, yes speciality
    $query = "SELECT * FROM therapists WHERE speciality = '$speciality' AND location = '$location' ORDER BY price ASC";
    $result = mysql_query($query);
    echo "<table>";
    echo "<tr><th>" . "First Name" . "</th><th>" . "Last Name". "</th><th>" . "Price". "</th><th>" . "Speciality". "</th><th>" . "Location". "</th></tr>";
    while($row = mysql_fetch_array($result))
    {
        echo "<tr><td>" . $row['firstName'] . "</td><td>" . $row['lastName'] . "</td><td>" . $row['price'] . "</td><td>" . $row['speciality'] . "</td><td>" . $row['location'] . "</td></tr>";
    }
    echo "</table>";
  } else if ($price == "any"){
    $query = "SELECT * FROM therapists WHERE location = '$location' AND speciality = '$speciality'";
    $result = mysql_query($query);
    echo "<table>";
    echo "<tr><th>" . "First Name" . "</th><th>" . "Last Name". "</th><th>" . "Price". "</th><th>" . "Speciality". "</th><th>" . "Location". "</th></tr>";
    while($row = mysql_fetch_array($result))
    {
      echo "<tr><td>" . $row['firstName'] . "</td><td>" . $row['lastName'] . "</td><td>" . $row['price'] . "</td><td>" . $row['speciality'] . "</td><td>" . $row['location'] . "</td></tr>";
    }
    echo "</table>";
  }
  mysql_close($mysql_handle);
?>
