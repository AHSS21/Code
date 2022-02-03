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
	$sql = "INSERT INTO payment(FullName,Receipt,TicketNumber) VALUES
  ('".addslashes($_POST['FullName'])."',
   '".addslashes($_POST['Receipt'])."',
   '".addslashes($_POST['TicketNumber'])."')";
	
	if($conn->query($sql))
	{
		$response['success'] = true;
	}
}

echo json_encode($response);
?>