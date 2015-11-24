<?php
//establishing session for account login functionality
$dbhost = 'oniddb.cws.oregonstate.edu';
$dbname = 'hotant-db';
$dbuser = 'hotant-db';
$dbpass = 'L7DDhDjzEpfmlwUv';
//making connection
$connection = mysql_connect($dbhost, $dbuser, $dbpass);
//picking database
$db = mysql_select_db($dbname, $connection);
session_start();// starting Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select username from Users where userName='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];// Storing Session as username
if(!isset($login_session)){ //if login session is not set
mysql_close($connection); // Closing Connection
}
?>
