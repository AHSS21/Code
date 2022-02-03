<?php session_start(); ?>
<?php include('dbcon.php'); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="form-wrapper">
  
  <form action="#" method="post">
    <h3><center>AHSS</center></h3>
	
    <div class="form-item">
		<input type="text" name="Username" required="required" placeholder="Username" autofocus required></input>
    </div>
    
    <div class="form-item">
		<input type="password" name="Password" required="required" placeholder="Password" required></input>
    </div>
	<div class="form-item">
		<input type="text" name="Id_number" required="required" placeholder="Id_number" required></input>
    </div>
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="login" value="Login"></input>
    </div>
  </form>
  <?php
	if (isset($_POST['login']))
		{
			$Username = mysqli_real_escape_string($con, $_POST['Username']);
			$Password = mysqli_real_escape_string($con, $_POST['Password']);
			
			
			$query 		= mysqli_query($con, "SELECT * FROM officer WHERE  Password='$Password' and Username='$Username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{			
					$_SESSION['user_id']=$row['user_id'];
					header('location:home.php');
					
				}
			else
				{
					echo 'Unknown User';
				}
		}
  ?>
  
</div>

</body>
</html>