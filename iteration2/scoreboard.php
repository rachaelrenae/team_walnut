<?php
include('session.php');
include('logout.php');
include('session2.php');
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
			  <a href="Therapist_Form.php">Therapist Information</a>
            </nav>
          </header>

          <div class="main">
            <b>Filters:</b>
            <form>
            Credentials:
              <select>
                <option value="#">1</option>
                <option value="#">2</option>
                <option value="#">3</option>
                <option value="#">4</option>
              </select>
            <br>Disorder Specialization:
              <select>
                <option value="#">1</option>
                <option value="#">2</option>
                <option value="#">3</option>
                <option value="#">4</option>
              </select>
            <br>Price Range:
              <select>
                <option value="#">1</option>
                <option value="#">2</option>
                <option value="#">3</option>
                <option value="#">4</option>
              </select>
            </form>
            <?php
            include('scoreboardFunction.php');
            ?>
          </div>

          <footer>
            Copyright © 2015 Team Walnut Incorporated
          </footer>

        </body>
</html>
