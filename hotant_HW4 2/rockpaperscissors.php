<?php

if(isset($_POST['submit'])) //if you push the submit button
{
  if ($_POST['material'] == 'rock'){ //set user number based on input
    $userNum = 1;
  } elseif ($_POST['material'] == 'paper') {
    $userNum = 2;
  } else {
    $userNum = 3;
  }

  $computerNum = rand(1,3); //set random computer num

  if ($userNum == 1){ //print out users choice
    echo nl2br("You chose rock\n");
  } else if ($userNum == 2){
    echo nl2br("You chose paper\n");
  } else {
    echo nl2br("You chose scissors\n");
  }

  if ($computerNum == 1){ //print out computers choice
    echo nl2br("Computer chose rock\n");
  } else if ($computerNum == 2){
    echo nl2br("Computer chose paper\n");
  } else {
    echo nl2br("Computer chose scissors\n");
  }

  if ($userNum == $computerNum) { //compare two numbers to determine winner
    echo nl2br("It is a tie!\n");
  } elseif ($userNum == 1 && $computerNum == 2) {
    mysql_query("UPDATE rockpaperscissors SET losses= losses + 1 WHERE userName = '$login_session'");
    echo nl2br("Computer wins!\n");
  } elseif ($userNum == 1 && $computerNum == 3) {
    mysql_query("UPDATE rockpaperscissors SET wins= wins + 1 WHERE userName = '$login_session'");
    echo nl2br("User wins!\n");
  } elseif ($userNum == 2 && $computerNum == 1) {
    mysql_query("UPDATE rockpaperscissors SET wins= wins + 1 WHERE userName = '$login_session'");
    echo nl2br("User wins!\n");
  } elseif ($userNum == 2 && $computerNum == 3) {
    mysql_query("UPDATE rockpaperscissors SET losses= losses + 1 WHERE userName = '$login_session'");
    echo nl2br("Computer wins!\n");
  } elseif ($userNum == 3 && $computerNum == 1) {
    mysql_query("UPDATE rockpaperscissors SET losses= losses + 1 WHERE userName = '$login_session'");
    echo nl2br("Computer wins!\n");
  } elseif ($userNum == 3 && $computerNum == 2) {
    mysql_query("UPDATE rockpaperscissors SET wins= wins + 1 WHERE userName = '$login_session'");
    echo nl2br("User wins!\n");
  }

  //put code here to output wins and losses

  $query = "SELECT * FROM rockpaperscissors WHERE userName = '$login_session'"; //select from rockpaperscissors table on the session users row
  $result = mysql_query($query);
  while($row = mysql_fetch_array($result)){ //search the row and print out values in wins and losses
    echo "Total Account Wins: " . $row['wins'];
    echo nl2br("\n");
    echo "Total Account Losses: " . $row['losses'];
  }
  mysqli_free_result($result);

}

?>
