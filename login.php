<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: welcome.php");
  exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="style/form.css">
	<style type="text/css">
		
form {border: 3px solid #f1f1f1; 
padding:20px ;
width:700px;
margin:5px 32%}
.helpblock
{
  
  padding: 5px;

  color: red;
}
    </style>

</head>
<body>
<!-- Header -->
	<?PHP include 'include/header.php' ;?>


<!-- Navigation -->
<?PHP include 'include/navigation_nonlogin.php' ;?>
		<div class="container"> 
		<div class="textform">
			<p style="text-align:center"><h2>Login</h2>
			Please fill in your credentials to login.</p>
			 </div>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
				
					<label><h3><b>Username</b></h3></br></label>
					<input type="text" name="username" placeholder="Enter Username" value="<?php echo $username; ?>" required>
					<span class="helpblock"></br><h4><?php echo $username_err; ?></h4></span>
				   
				<div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
					<label><h3><b>Password</b></h3></br></label>
					<input type="password" name="password" placeholder="Enter Password">
					<span class="helpblock"></br><h4><?php echo $password_err; ?></h4></span>
				</div>
			
					<input type="submit" class="button" value="Login">
				</div> 
				 <div class="container2" style="background-color:#f1f1f1">
				<p><h3>Don't have an account? <a href="register.php"><b>Sign up now.</b></a></h3></p>
				 </div>
				 
			</form>
		
    </div> 
	<!-- Footer -->
<?PHP include 'include/footer.php' ;?>	
</body>
</html>