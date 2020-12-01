<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome Page</title>
	 
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
   <link rel="stylesheet" href="style/style.css">
   <style>
.button {
  background-color: #FA8072;
  color: white;
  padding: 14px ;
  margin: 8px 38%;
  border: none;
  cursor: pointer;
  width: 20%;
align: center;}
  .pageheader{

  text-align:center;	
  

}

</style>
   
        		
</head>
<body>
	
	<!-- Header -->
	<?PHP include 'include/header.php' ;?>

<!-- Navigation -->
<?PHP include 'include/navigation_nonlogin.php' ;?>

<!-- Footer -->
<?PHP include 'include/footer.php' ;?>	

<!-- Content will go here -->



<br/>
<hr>
    <div class="pageheader">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    
    <p>
       
        <a href="logout.php" class="button">Sign Out of Your Account</a>
    </p>
	</div>
</body>
</html>