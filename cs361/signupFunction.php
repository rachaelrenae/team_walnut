<?php
$dbhost = 'oniddb.cws.oregonstate.edu';
$dbname = 'hotant-db';
$dbuser = 'hotant-db';
$dbpass = 'L7DDhDjzEpfmlwUv';
$msg = '';

$mysql_handle = mysql_connect($dbhost, $dbuser, $dbpass) //connection db user
  or die("Error connecting to database server");

mysql_select_db($dbname, $mysql_handle) //selecting proper database
  or die("Error selecting database: $dbname");

if (isset($_POST['submit'])) { //if submit button is pushed
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $newusername = $_POST['newusername'];
  $newpassword = $_POST['newpassword'];
  $newusername = stripslashes($newusername);
  $newpassword = stripslashes($newpassword);
  $newusername = mysql_real_escape_string($newusername);
  $newpassword = mysql_real_escape_string($newpassword);

  if(preg_match("/^[A-Z]+\w*[0-9]{2,}$/", "$newpassword")) { //checking if passwword meets standards
    $newpassword = sha1($newpassword); //encrypt
    $query = "INSERT INTO Users(firstName, lastName, userName, password) VALUES ('$firstname', '$lastname', '$newusername', '$newpassword')";
    $msg = "Account created"; //insert into table
  } else {
    $msg = "Invalid password";
  }
  mysql_query($query);
}

mysql_close($mysql_handle);

?>
