<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result
					In buffer*/
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            /*$algorithm
				PASSWORD_BCRYPT uses the CRYPT_BLOWFISH algorithm and will return a 60 character string.

					PASSWORD_DEFAULT uses the bcrypt algorithm. PHP documentation recommends that you set 
					the column size to 255 in the event the algorithm changes over time.*/
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
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
    <title>Sign Up</title>
	
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
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
		<div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label><h3><b>Username</h3></b></label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="helpblock"></br><h4><?php echo $username_err; ?></h4></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label><h3><b>Password</h3></b></label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="helpblock"></br><h4><?php echo $password_err; ?></h4></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label><h3><b>Confirm Password</h3></b></label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="helpblock"></br><h4><?php echo $confirm_password_err; ?></h4></span>
            </div>
            <div class="form-group">
                <input type="submit" class="button" value="Submit">
                
            </div>
			<div class="container2" style="background-color:#f1f1f1">
            <p><h3>Already have an account? <a href="login.php">Login here</a>.<h3></p>
        </form>
    </div>    
	<div class="footer">
  <p><b>Ever wondered Math is so much fun to do???</b></p>
  <p><b>MathFUN </b> is there to help you make your learning in maths much easier and much more fun.</p>
  <p>With all the tricks provided,you will be able to solve any problem in shorter span of time.</p>
  <p><b>Copyright &copy Team MathFUN.All rights reserved</b></p>
</div>

</body>
</html>