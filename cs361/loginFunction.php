<?php
session_start(); // Starting Session
$msg=''; // print message for user

$dbhost = 'oniddb.cws.oregonstate.edu';
$dbname = 'hotant-db';
$dbuser = 'hotant-db';
$dbpass = 'L7DDhDjzEpfmlwUv';

if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) { //if a form entry is empty
  $msg = "Username or Password is invalid!";
} else {
  // Define $username and $password
  $username=$_POST['username'];
  $password=$_POST['password'];

  // making connection
  $connection = mysql_connect($dbhost, $dbuser, $dbpass);
  $username = stripslashes($username);
  $password = stripslashes($password);
  $username = mysql_real_escape_string($username);
  $password = mysql_real_escape_string($password);
  $password = sha1($password);//encrpyt password
  //selecting the database
  $db = mysql_select_db($dbname, $connection);
  //finding user match in database
  $query = mysql_query("select * from Users where password='$password' AND userName='$username'", $connection);
  $rows = mysql_num_rows($query);
  if ($rows == 1) {//check if theres row matching input username and password
    $_SESSION['login_user']=$username; // Initializing Session
    $msg = "Login successful";
  } else {
    $msg = "Username or Password is invalid!";
  }
  mysql_close($connection); // Closing Connection
}
}
?>
