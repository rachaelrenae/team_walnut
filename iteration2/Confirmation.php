<?php
include('session.php');
include('logout.php');
include('session2.php');

//function to ensure there is no "bad"" user input
function test($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
$specialization = test($_POST['specialization']);
$price = test($_POST['price']);
$location = test($_POST['location']);
$phone = test($_POST['phone']);
$email = test($_POST['email']);
$about = test($_POST['about']);

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
            Information updated. Thank you for submitting.
          </div>

<?php
	$dbhost = 'oniddb.cws.oregonstate.edu';
	$dbname = 'christme-db';
	$dbuser = 'christme-db';
	$dbpass = '0M0RvQrlk8ux5iWf';
	$dbc = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)
		or die ("Error connecting to database server");
		
	//inserts therapist information into database
	//the if statements allow a therapist to update one field at a time, any empty fields will be ignored
	//and will not be inserted into the database
	if(!empty($specialization))
	{
		$query1 = "Update therapists Set specialty = '$specialization' Where userName = '$user_check'";
		$result1 = mysqli_query($dbc, $query1)
			or die("Error in Querying database.");
	}
	if(!empty($price))
	{
		$query2 = "Update therapists Set price = '$price' Where userName = '$user_check'";
		$result2 = mysqli_query($dbc, $query2)
			or die("Error in Querying database.");
	}
	if(!empty($location))
	{
		$query3 = "Update therapists Set location = '$location' Where userName = '$user_check'";
		$result3 = mysqli_query($dbc, $query3)
			or die("Error in Querying database.");;
	}
	if(!empty($phone))
	{
		$query4 = "Update therapists Set phone = '$phone' Where userName = '$user_check'";
		$result4 = mysqli_query($dbc, $query4)
			or die("Error in Querying database.");
	}
	if(!empty($email))
	{
		$query5 = "Update therapists Set email = '$email' Where userName = '$user_check'";
		$result5 = mysqli_query($dbc, $query5)
			or die("Error in Querying database.");
	}
	if(!empty($about))
	{
		$query6 = "Update therapists Set about = '$about' Where userName = '$user_check'";
		$result6 = mysqli_query($dbc, $query6)
			or die("Error in Querying database.");
	}

	mysqli_close($dbc);
?>
          <footer>
            Copyright © 2015 Team Walnut Incorporated
          </footer>

        </body>
</html>
