<?php
$host = "localhost";
$Name = "root";
$password = "";

try 
{
    $conn = new PDO("mysql:host=$host;dbname=db_arduino", $Name, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

$response = array('success' => false);


{
	$sql = "INSERT INTO highway(Name,Length,Officer_on_duty) VALUES('".addslashes($_POST['Name'])."', '".addslashes($_POST['Password'])."', '".addslashes($_POST['Officer_on_duty'])."')";
	
	if($conn->query($sql))
	{
		$response['success'] = true;
	}
}

echo json_encode($response);
?>