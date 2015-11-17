<?php
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
            <?php
            include('scoreboardFunction.php');
            ?>
          </div>

          <footer>
            Copyright © 2015 Tyler Hotan
          </footer>

        </body>
</html>
