
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="libraryStyle.css">
</head>
<body>
	
<?php 
	
	// function to ensure the user does not input sql or html code
	function test($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	// sets up variables to use in sql queries for the user's search 
	// results
	$searchType = test($_POST['searchType']);
	$searchTerm = test($_POST['searchTerm']);
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
			Catalog Search Results
		</h2>
		<p>	
<?php
		// php code to print the user's search results
		$dbhost = 'oniddb.cws.oregonstate.edu';
		$dbname = 'christme-db';
		$dbuser = 'christme-db';
		$dbpass = '0M0RvQrlk8ux5iWf';
		$dbc = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)
			or die ("Error connecting to database server");
			
		// series of "if" statements to determine what category the user is searching in
		if ($searchType == "Author")
		{
			$query = "Select Distinct b.Title, a.Name, b.genre, c.Edition, c.PubDate, c.Section, c.Available
						From Book b, Copy c, Author a
						Where b.ISBN = c.ISBN
						And b.AuthorID = a.AuthorID
						And a.Name = '$searchTerm'";
			$result = mysqli_query($dbc, $query)
				or die("Error in Querying database.");
		}
		
		elseif ($searchType == "Title")
		{
			$query = "Select Distinct b.Title, a.Name, b.genre, c.Edition, c.PubDate, c.Section, c.Available
						From Book b, Copy c, Author a
						Where b.ISBN = c.ISBN
						And b.AuthorID = a.AuthorID
						And b.Title = '$searchTerm'";
			$result = mysqli_query($dbc, $query)
				or die("Error in Querying database.");
		}
		
		elseif ($searchType == "Genre")
		{
			$query = "Select Distinct b.Title, a.Name, b.genre, c.Edition, c.PubDate, c.Section, c.Available
						From Book b, Copy c, Author a
						Where b.ISBN = c.ISBN
						And b.AuthorID = a.AuthorID
						And b.Genre = '$searchTerm'";
			$result = mysqli_query($dbc, $query)
				or die("Error in Querying database.");				
		}
		
		while ($row = mysqli_fetch_array($result))
		{
			echo $row['Title']; 
			echo "<br />";
			echo $row['Name'];
			echo "<br />";
			echo "Genre: ";
			echo $row['genre'];
			echo "<br /> ";	
			echo "Edition: ";
			echo $row['Edition'];
			echo "<br />";
			echo "Published: ";
			echo $row['PubDate'];
			echo "<br />";
			echo "Library Location: ";
			echo $row['Section'];
			echo "<br />";
			echo "Currently Available: ";
			echo $row ['Available'];
			echo "<br />";
			echo "<br />"; 	
		}
		
		mysqli_close($mysql_handle); 
	?>		
		
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