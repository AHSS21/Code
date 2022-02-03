

<!DOCTYPE html>
<html>
<head>
  <title>Tickets</title>
  <style>
body {
  background-color: lightblue;
}
</style>

</head>
<body>

<h2>TICKETS</h2>

<table border="5" width="50">
  <tr>
    <td>Fname</td>
    <td>Lname</td>
    <td>Email</td>
    <td>NumberPlate</td>
    <td>FineFee</td>
    <td>TicketNumber</td>
  </tr>

<?php
$db = mysqli_connect("localhost","Admin","Admin@2021","db_arduino");
include "conx.php"; // Using database connection file here

$records = mysqli_query($db,"select * from issueticket"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['Fname']; ?></td>
    <td><?php echo $data['Lname']; ?></td>
    <td><?php echo $data['Email']; ?></td>
    <td><?php echo $data['NumberPlate']; ?></td>
    <td><?php echo $data['FineFee']; ?></td>
    <td><?php echo $data['TicketNumber']; ?></td>

  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>

</body>
</html>

