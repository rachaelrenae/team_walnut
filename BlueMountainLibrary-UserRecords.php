
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="libraryStyle.css">
</head>
<body>

<form method = "POST"
	action ="BlueMountainLibrary-Account.php">
	
<?php 
	
	// sets up variables for the user's search term and what they are 
	// searching for
	$memberID = $_POST['memberID'];
?>
	
<div id="container">
	<div id="header">
		<h1>
			Blue Mountian Public Library - User Records
		</h1>
	</div>
	
	<div id="navigation">
		<ul>
			<li><a href="BlueMountainLibrary-Home.html">Home</a></li>
			<li><a href="BlueMountainLibrary-Catalog.php">Catalog</a></li>
			<li><a href="BlueMountainLibrary-UserRecords.php">User Records</a></li>
		</ul>
	</div>
	<div id="content">
		<p>
		<!-- sets up select box for search type -->
		Please enter the 10 digit ID number on your library card. <br /><br />
		<label for="memberID">ID Number:</label>
		<input type="text" id ="memberID" name="memberID" value = "<?php echo $memberID; ?>" /> &nbsp &nbsp	
		<input type="submit" value="Go" name="Go" />
</form>
		</p>
	</div>
	<div id="footer">
					
			Phone: (123) 456-7890 
			<br /> <br />
			Hours: 10:00am - 6:00pm Monday-Friday <br />
			&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 11:00am - 5:00pm Saturday <br />
	</div>
</div>

</body>
</html>