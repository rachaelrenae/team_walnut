
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
	$memberID = test($_POST['memberID']);
?>
	
<div id="container">
	<div id="header">
		<h1>
			Blue Mountian Public Library - User Account
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
			Books you have currently checked out:
		</h2>
		<p>	
<?php
		// php code to print the user's account results
		$dbhost = 'oniddb.cws.oregonstate.edu';
		$dbname = 'christme-db';
		$dbuser = 'christme-db';
		$dbpass = '0M0RvQrlk8ux5iWf';
		$dbc = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)
			or die ("Error connecting to database server");
			
		// sets up the query to retrieve the user's account results		
		$query = "Select Distinct bk.Title, a.Name, bk.genre, c.Edition, c.PubDate, bw.DueBack
					From Borrow bw, Book bk, Author a, Copy c, Member m
					Where c.copyNumber = bw.copyNumber
					And m.MemberID = bw.MemberID
					And bk.ISBN = c.ISBN
					And a.AuthorID = bk.AuthorID
					And m.MemberID = '$memberID';";
		$result = mysqli_query($dbc, $query)
			or die("Error in Querying database.");		
		
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
			echo "Due back on: ";
			echo $row['DueBack'];
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