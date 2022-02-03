<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
// get the post records
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Id_number = $_POST['Id_number'];
//Database connection
-
$conn = new mysqli('localhost','Admin','Admin@2021','db_arduino');
if($conn->connect_error){
   die('Connection Failed : '.$conn->connect_error);
}else
{
$stmt = $conn->prepare("insert into Officer(Username,Password,Id_number)values(?,?,?)");
$stmt->execute();
echo "Success";
$stmt->close();
$conn->close();
}  


?>