
<?php
		
	// Include database connectivity
	
	include_once('rex.php');

	if (!empty($_POST['fromDate']) && !empty($_POST['toDate'])) {		
	    $fromDate = $_POST['fromDate'];
	    $toDate   = $_POST['toDate'];
	    $query = "SELECT * FROM offense WHERE Time BETWEEN '{$fromDate}' AND '{$toDate}'";
	}else{
	    $query = "SELECT * FROM offense ORDER BY speed ASC";
	}

	$result = mysqli_query($conn, $query);

	$output = "";

	if (mysqli_num_rows($result) > 0) {
	    while ($row = mysqli_fetch_assoc($result)) {
			
    	       $output.="<tr align='text-center'>
		            <td>{$row["Speed"]}</td>
		            <td>{$row["Highway"]}</td>
		            <td>{$row["NumberPlate"]}</td>
		            <td>{$row["Time"]}</td>
		         </tr>";
		}
		echo $output;
	}else{
		echo "<h3>No record found</h3>";
	}
?>

