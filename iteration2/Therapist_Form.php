<?php
//include('signupFunction.php');
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
              <form method = "POST"
				action ="">
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
                 <form action = "Confirmation.php" method = "post">
			<form>
		<?php 
			if ($login_session)
			{
		?>
              <table>                
				Disorder Specialization:
				<select name = 'specialization'>
					<option value="PTSD">PTSD</option>
					<option value="Anxiety">Anxiety</option>
					<option value="Depression">Depression</option>
					<option value="OCD">OCD</option>
              </select>
            <br>
				Price Range:
				<select name = 'price'>
					<option value="$50-$100">$50-$100</option>
					<option value="$100-$150">$100-$150</option>
					<option value="$150-$200">$150-$200</option>
					<option value="$200+">$200+</option>
				</select> 
                <tr>
                  <td> Location: </td>
                  <td> <input type = "text" name = "location" placeholder = "Location"> </td> 
                </tr> 
                <tr>
                  <td> Phone: </td>
                  <td> <input type = "text" name = "phone" placeholder = "Phone"> </td> 
                </tr> 
                <tr>
                  <td> Email: </td>
                  <td> <input type = "text" name = "email" placeholder = "Email"> </td>
                </tr> 
				 <tr>
                  <td> About You: </td>
                  <td> <textarea id="about" rows="10" cols="80" name="about" value = "<?php echo $about; ?>" ></textarea> </td> 
                </tr> 
              </table>
              <input type="submit" value ="Submit" name = "submit">
            </form>
            <br>
		<?php
			}
			else
			{
		?>
			You must login to your therapist account to edit your information.
		<?php
			}
		?>
			
           <span><?php echo $msg; ?></span>
          </div>

          <footer>
            Copyright © 2015 Team Walnut Incorporated
          </footer>

        </body>
</html>
