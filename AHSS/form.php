
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add user : Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link rel="stylesheet" href="styles.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">ADMIN</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">  </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
                    <li>
                       <a  href="home.php"><i class="fa fa-edit fa-3x"></i> Home</a> 
                    </li>
			        <li>
                       <a  href="form.php"><i class="fa fa-edit fa-3x"></i> Profile</a> 
                    </li>
                    
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>ADD USER</h2>   
                        <h5>Welcome Admin , Love to see you back. </h5>
                       
                    </div>
                </div>
                <div id="message"></div>
                <div font-size: 15px;>
                <form action="" method="post">
		Username:<br>
		<input type="text" name="Username">
		<br>
		Password:<br>
		<input type="text" name="Password">
		<br>
		Id_number :<br>
		<input type="text" name="Id_number">
		<br>
        <br>
		<input type="button" onclick="submitForm();" name="save_contact" value="ADD">
	</form>
    <div>
</body>
                   
            <script type="text/javascript">
                function submitForm()
                {
                    var Username = $('input[name=Username]').val();
                    var Password = $('input[name=Password]').val();
                    var Id_number = $('input[name=Id_number]').val();
        
                    if(Username != '' && Password!= '' && Id_number != '')
                    {
                        var formData = {Username: Username, Password: Password , Id_number: Id_number};
                        $('#message').html('<span style="color: red">Adding User. . . please wait. . .</span>');
                        $.ajax({url: "http://localhost/AHSS/user.php", type: 'POST', data: formData, success: function(response)
                        {
                            var res = JSON.parse(response);
                            console.log(res);
                            if(res.success == true)
                                $('#message').html('<span style="color: green">User added successfully</span>');
                            else
                                $('#message').html('<span style="color: red">User not added. Some error in running the database query.</span>');
                        }
                        });
                    }
                    else
                    {
                        $('#message').html('<span style="color: red">Please fill all the fields</span>');
                    }
                    
                    
                } 
            </script>
                
                 
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   

</html>
?>