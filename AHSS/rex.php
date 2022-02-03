
<?php
	// Database configuration 
	$hostname = "localhost"; 
	$username = "Admin"; 
	$password = "Admin@2021"; 
	$dbname   = "db_arduino"; 
	 
	// Create database connection 
	$conn = mysqli_connect($hostname, $username, $password, $dbname); 
	 
	// Check connection
	if(mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  exit();
	}

?>

