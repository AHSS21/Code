<?php
include_once 'offex.php';
if(isset($_POST['submit']))
{    
     $Fname = $_POST['Fname'];
     $Lname = $_POST['Lname'];
     $Email = $_POST['Email'];
     $Penalty = $_POST['Penalty'];
     $Ticket_Number = $_POST['Ticket_Number'];
     $sql = "INSERT INTO offender (Fname,Lname,Email,Penalty,Ticket_Number)
     VALUES ('$Fname','$Lname','$Email','$Penalty','$Ticket_Number')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>