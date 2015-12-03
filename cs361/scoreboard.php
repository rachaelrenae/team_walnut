<?php
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
            <b>Filters:</b>
            <form method="GET" action="">
              <table>
                <tr><td>Price range:</td>
                  <td>
                  <select name = "price">
                    <option value="low">Low to High</option>
                    <option value="high">High to Low</option>
                    <option value="any">None</option>
                  </select>
                  </td>
                </tr>
                <tr><td>Disorder Specialization:</td>
                  <td>
                  <select name="speciality">
                    <option value="PTSD">PTSD</option>
                    <option value="OCD">OCD</option>
                    <option value="Anxiety">Anxiety</option>
                  </select>
                  </td>
                </tr>
                <tr><td>Location:</td>
                  <td>
                  <select name="location">
                    <option value="Corvallis">Corvallis</option>
                    <option value="Salem">Salem</option>
                    <option value="Philomath">Philomath</option>
                    <option value="Albany">Albany</option>
                  </select>
                  </td>
                </tr>
              </table>
              <input type="submit" value = "Submit" name= "submit">
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
