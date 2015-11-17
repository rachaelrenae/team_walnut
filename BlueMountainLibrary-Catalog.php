
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="libraryStyle.css">
</head>
<body>

<form method = "POST"
	action ="BlueMountainLibrary-SearchResults.php">
	
<?php 
	
	// sets up variables for the user's search term and what they are 
	// searching for
	$searchType = $_POST['searchType'];
	$searchTerm = $_POST['searchTerm'];
?>
	
<div id="container">
	<div id="header">
		<h1>
			Blue Mountian Public Library - Catalog
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
		<h2>
			Search the Blue Mountain Public Library Catalog
		</h2>
		<p>
		<!-- sets up select box for search type -->
		What would you like to search for? &nbsp &nbsp
		<select name = 'searchType'>
			<option value="Author">Author</option>
			<option value="Title">Title</option>
			<option value="Genre">Genre</option>
		</select><br /><br />
		<label for="searchTerm">Search Term:</label>
		<input type="text" id ="searchTerm" name="searchTerm" value = "<?php echo $searchTerm; ?>" /> &nbsp &nbsp	
		<input type="submit" value="search" name="search" />
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