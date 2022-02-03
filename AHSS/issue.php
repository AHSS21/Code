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
	$sql = "INSERT INTO issueticket(Fname,Lname,Email,NumberPlate,FineFee,TicketNumber) VALUES
  ('".addslashes($_POST['Fname'])."',
   '".addslashes($_POST['Lname'])."',
   '".addslashes($_POST['Email'])."',
   '".addslashes($_POST['NumberPlate'])."',
   '".addslashes($_POST['FineFee'])."',
   '".addslashes($_POST['TicketNumber'])."')";
	
	if($conn->query($sql))
	{
		$response['success'] = true;
	}
}

echo json_encode($response);
?>