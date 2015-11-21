<html>
<head>
	<link rel="stylesheet" type="text/css" href="styleSheet.css">
	<title> Therapist Information - Confirmation </title>
</head>
<body>
	<div id="header">
		<h1>
			Therapist Information - Confirmation
		</h1>
	</div> 
	
	<div id="content">
	<p>

<?php
	// Creates function to test and ensure the inputs are valid
	function test($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	// assigns variables with information collected from survey
	$firstName = test($_POST['firstName']);
	$lastName = test($_POST['lastName']);
	$location = test($_POST['location']);
	$phone = test($_POST['phone']);
	$email = test($_POST['email']);
	$specialty = test($_POST['specialty']);
	$about = test($_POST['about']);
	
	// prints the information on the confirmation page
	echo 'Thanks you for submitting, '. $firstName . $lastName . '<br /> ';
	echo 'Your information was successfully entered. <br />';
	echo 'Phone Number: ' . $phone . '<br />';	
	echo 'Email Address: ' . $email . '<br />';
	echo 'Office Location ' . $location . '<br />';
	
	// connects to database
	/* We will have to set up the code for this section after we have our database set up 
	and know what queries we will be using.
	$dbhost = '  ';
	$dbname = '  ';
	$dbuser = '  ';
	$dbpass = '  ';
	$dbc = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)
		or die ("Error connecting to database server");
	// inserts therapist information into database, replaces any duplicates
	$query =  	"
					";
	$result = mysqli_query($dbc, $query)
		or die("Error in Querying database.");
	mysqli_close($dbc);
	*/
?>
<!--  links to other pages -->
<br /> <br /> Back to Therapist Information page: <br />
<a href= "Therapist_Form.php"> Therapist Information </a>
<br /> <br />
	</p>
	</div>
	<div id="footer">
	</div>

</body>
</html>

	