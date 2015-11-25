<?php
$msg1 = '';
$msg2 = "Welcome, ";

if(!$login_session){ //no greeting if no account logged in
  $msg2 = '';
}

if (isset($_POST['logout'])) //is you push logout button, end session, and display appropriate message
{
   session_destroy();
   $msg1 = " logged out.";
   $msg2 = '';
}

?>
