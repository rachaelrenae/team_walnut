<?php
include('signupFunction.php');
include('session.php');
include('logout.php');
?>

<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="4styles.css">
    <title>
      Rock Paper Scissors
    </title>
  </head>
        <body>
          <header>
            <div id = "session">
              <i><?php echo $msg2; echo $login_session; echo $msg1; ?></i>
              <form method="POST" action="">
                <input type="submit" name="logout"  value="Logout">
              </form>
            </div>
            <h1>Rock Paper Scissors</h1>
            <!-- <img id="logo" src="images/logo.png"> -->
            <nav>
              <a href="login.php">Login</a>
              <a href="signup.php">Sign Up</a>
              <a href="game.php">Play Game</a>
              <a href="scoreboard.php">Scoreboard</a>
            </nav>
          </header>

          <div class="main">
            *Password must start with an uppercase letter and end with 2 digits
            <form action = "" method = "post">
              <table>
                <tr>
                  <td> First name: </td>
                  <td> <input type = "text" name = "firstname" placeholder = "First Name"> </td>
                </tr>
                <tr>
                  <td> Last name: </td>
                  <td> <input type = "text" name = "lastname" placeholder = "Last Name"> </td>
                </tr>
                <tr>
                  <td> Username: </td>
                  <td> <input type = "text" name = "newusername" placeholder = "Username"> </td>
                </tr>
                <tr>
                  <td> Password: </td>
                  <td> <input type = "password" name = "newpassword" placeholder = "Password"> </td>
                </tr>
              <table>
              <input type="submit" value ="Sign up" name = "submit">
            </form>
            <br>
            <span><?php echo $msg; ?></span>
          </div>

          <footer>
            Copyright © 2015 Tyler Hotan
          </footer>

        </body>
</html>
