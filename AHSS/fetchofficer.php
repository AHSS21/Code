

<!DOCTYPE html>
<html>
<head>
  <title>USERS</title>
  <style>
body {
  background-color: lightblue;
}
</style>

</head>
<body>

<h2>USERS</h2>

<table border="5" width="50">
  <tr>
    <td>Username</td>
    <td>Password</td>
    <td>Id_number</td>
  </tr>

<?php
$db = mysqli_connect("localhost","Admin","Admin@2021","db_arduino");
include "conx.php"; // Using database connection file here

$records = mysqli_query($db,"select * from officer"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['Username']; ?></td>
    <td><?php echo $data['Password']; ?></td>
    <td><?php echo $data['Id_number']; ?></td>

  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>

</body>
</html>

