<?php
// Include config file
require_once "Config.php";
 
// Define variables and initialize with empty values
$Username = $Password = $Id_number = "";
$Username_err = $Password_err = $Id_number_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate Username
    $input_Username = trim($_POST["Username"]);
    if(empty($input_Username)){
        $Username_err = "Please enter a Username.";
    } elseif(!filter_var($input_Username, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $Username_err = "Please enter a valid Username.";
    } else{
        $Username = $input_Username;
    }
    
    // Validate Password
    $input_Password = trim($_POST["Password"]);
    if(empty($input_Password)){
        $Password_err = "Please enter a Password.";     
    } else{
        $Password = $input_Password;
    }
    
    // Validate Id_number
    $input_Id_number = trim($_POST["Id_number"]);
    if(empty($input_Id_number)){
        $Id_number_err = "Please enter the Id_number.";     
    } elseif(!ctype_digit($input_Id_number)){
        $Id_number_err = "Please enter Id Number.";
    } else{
        $Id_number = $input_Id_number;
    }
    
    // Check input errors before inserting in database
    if(empty($Username_err) && empty($Password_err) && empty($Id_number_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO officer (Username, Password, Id_number) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_Username, $param_Password, $param_Id_number);
            
            // Set parameters
            $param_Username = $Username;
            $param_Password = $Password;
            $param_Id_number = $Id_number;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create User</h2>
                    <p>Please fill 
                        .</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" Username="Username" class="form-control <?php echo (!empty($Username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $Username; ?>">
                            <span class="invalid-feedback"><?php echo $Username_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <textarea Username="Password" class="form-control <?php echo (!empty($Password_err)) ? 'is-invalid' : ''; ?>"><?php echo $Password; ?></textarea>
                            <span class="invalid-feedback"><?php echo $Password_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Id_number</label>
                            <input type="text" Username="Id_number" class="form-control <?php echo (!empty($Id_number_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $Id_number; ?>">
                            <span class="invalid-feedback"><?php echo $Id_number_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>