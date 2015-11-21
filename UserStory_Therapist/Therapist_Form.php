<html>
<head>
<link rel="stylesheet" type="text/css" href="styleSheet.css">
<title> Therapist Information </title>
</head>
<body>
<form method = "POST"
 action ="Confirmation.php">
 
 <?php
  if(isset($_POST['submit']))
  {
    // variables needed to check the inputs
    $output_form = false;
	$firstName = $_POST['firstname'];
	$lastName = $_POST['lastName'];
	$location = $_POST['location'];
	$phone = $_Post['phone'];
	$email = $_POST['email'];
	$specialty = $_POST['specialty'];
	$about = $_POST['about'];
	
	// series of if statements to see if any fields were left empty
	if (empty($firstName))
	{
		echo 'Please enter your first name. <br />';
		$output_form = true;
	}
	if (empty($lastName))
	{
		echo 'Please enter your last name <br />';
		$output_form = true;
	}
	if (empty($location))
	{
		echo 'Please enter your office location. <br />';
		$output_form = true;
	}
	if (empty($phone))
	{
		echo 'Please enter your phone number. <br />';
		$output_form = true;
	}
	if (empty($email))
	{
		echo 'Please enter your email adress. <br />';
		$output_form = true;
	}
	if (empty($specialty))
	{
		echo 'Please enter a specialty area. <br />';
		$output_form = true;
	}
	if (empty($about))
	{
		echo 'Please enter information about your practice and experience <br />';
		$output_form = true;
	}		
  }
  else
  {
    $output_form = true;
  }
  // displays form if output_form variable is true
  if($output_form)
  { 
?> 
<div id="container">
	<div id="header">
		<h1>
			Therapist Information
		</h1>
	</div> 
	
	<div id="content">
		<h2>
			Please enter your information:
		</h2>
		<p>	
 
	<!-- Creates the text boxes to collect information from user -->
	<label for="firstName">First Name:</label>
	<input type="text" id ="firstName" name="firstName" value = "<?php echo $firstName; ?>" /> <br /><br />
	<label for="lastNameame">Last Name:</label>
	<input type="text" id="lastName" name="lastName" value = "<?php echo $LastName; ?>" /> <br /><br />	
	<label for="location"> Office Location:</label>
	<input type="text" id="location" name="location" value = "<?php echo $location; ?>" /> <br /><br />
	<label for="phone"> Phone Number:</label>
	<input type="text" id="phone" name="phone" value = "<?php echo $phone; ?>" /> <br /><br />
	<label for="email"> Email Address:</label>
	<input type="text" id="email" name="email" value = "<?php echo $email; ?>" /> <br /><br />
	<label for="specialty"> Area of Specialty:</label> 
	<input type="text" id="specialty" name="specialty" value = "<?php echo $specialty; ?>" /> <br /><br />
	<label for="about"> About You: </label> <br />
	<textarea id="about" rows="10" cols="80" name="about" value = "<?php echo $about; ?>" ></textarea> <br /><br />
	
	<!-- Sets up the submit buttion on the bottom of the page -->
	<input type="submit" value="Submit Information" name="submit" />
		</p>
	</div>
	<div id="footer">
	</div>
</form>
<?php
  }
?>
</div>
</body>
</html>

	


	
	
	