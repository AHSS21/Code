
<!DOCTYPE html>
<html>
  <head>
    Choose File 
    <style>
body {
  background-color: lightblue;
}
</style>
</head>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
  Select Ticket Image:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Ticket" name="submit">
</form>

</body>
</html>
