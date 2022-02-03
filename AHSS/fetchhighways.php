

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

<h2>HIGHWAYS</h2>

<table border="5" width="50">
  <tr>
    <td>Name</td>
    <td>Length</td>
    <td>Officer_on_duty</td>
  </tr>

<?php
$db = mysqli_connect("localhost","root","","db_arduino");
include "conx.php"; // Using database connection file here

$records = mysqli_query($db,"select * from highway"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['Name']; ?></td>
    <td><?php echo $data['Length']; ?></td>
    <td><?php echo $data['Officer_on_duty']; ?></td>

  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>

</body>
</html>

