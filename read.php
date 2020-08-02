<?php
	// 1. Create a database connection
	$dbhost = "66.147.242.186";
	$dbuser = "urcscon3_chicago";
	$dbpass = "project4chicago";
	$dbname = "urcscon3_chicago";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


	// 2. Perform database query
	$query  = "SELECT * FROM classinfo";
	$result = mysqli_query($connection, $query);
?>
<!doctype html>
<html>
<head>
	<title>Database Read</title>
</head>
<body>

	<h1>Database Read</h1>

	<ul>
	<?php
		// 3. Use returned data (if any)
		while($data = mysqli_fetch_assoc($result)) {
	?>
		<li>
			<?php echo 
				$data["firstName"], " ", $data["lastName"], 
				"<br><strong>", $data["info"], "</strong>"; 
			?>
		</li>
	<?php } ?>
</ul>

</body>
</html>

<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>