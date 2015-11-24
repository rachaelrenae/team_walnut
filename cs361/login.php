<?php
include('loginFunction2.php'); // Includes Login Script
include('session.php');
include('logout.php');
//include('session2.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="4styles.css">
    <title>
      Therapist Connect
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
            <h1>Therapist Connect</h1>
            <!-- <img id="logo" src="images/logo.png"> -->
            <nav>
              <a href="login.php">Therapist Login</a>
              <a href="game.php">User Login</a>
              <a href="signup.php">User Sign Up</a>
              <a href="verification.php">Get Verified as a Therapist!</a>
              <a href="scoreboard.php">Therapist List</a>
            </nav>
          </header>

          <div class="main">
            <form action ="" method = "post">
              <table>
                <tr>
                  <td> Username: </td>
                  <td> <input type = "text" name = "username" placeholder = "Username"> </td>
                </tr>
                <tr>
                  <td> Password: </td>
                  <td> <input type = "password" name = "password" placeholder = "Password"> </td>
                </tr>
              </table>
              <input type="submit" value ="Login" name="submit">
            </form>
            <br>
            <span><?php echo $msg; ?></span>
          </div>

          <footer>
            Copyright © 2015 Team Walnut Incorporated
          </footer>

        </body>
</html>
