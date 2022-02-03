<?php
$servername='localhost';
$username='Admin';
$password='Admin@2021';
$dbname = "db_arduino";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>