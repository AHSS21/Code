<?php

$db = mysqli_connect("localhost","Admin","Admin@2021","db_arduino");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>