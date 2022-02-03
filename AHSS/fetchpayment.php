

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

<h2>PAYMENTS</h2>

<table border="5" width="50">
  <tr>
    <td>FullName</td>
    <td>Receipt</td>
    <td>TicketNumber</td>
  </tr>

<?php
$db = mysqli_connect("localhost","Admin","Admin@2021","db_arduino");
include "conx.php"; // Using database connection file here

$records = mysqli_query($db,"select * from payment"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['FullName']; ?></td>
    <td><?php echo $data['Receipt']; ?></td>
    <td><?php echo $data['TicketNumber']; ?></td>

  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>

</body>
</html>

