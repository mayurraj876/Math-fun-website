<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	

	header("location:login1.php");
    exit;
	
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Quiz</title>
   
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
	<link rel="stylesheet" href="style/style.css">
	<style>
	form {border: 3px solid #f1f1f1; 
padding:20px ;
width:80%px;
margin:20px; }
.button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px ;
  border: none;
  cursor: pointer;
  width: 20%;
}

.button:hover {
  opacity: 0.8;
}
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

<!-- Content will go here -->

<br/>

	<div id="page-wrap">

		<h1 align="center">Special Quiz </h1>
		
		<form action="grade.php" method="post" id="quiz">
		
            <ol>
            
                <li>
                
                    <h3>If U is denoted by 7, M by 2, I by 5, O by 1, K by 8 and J by 4, then what will be the numeric form of the word MOUJIK when written in the reverse order?
</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) 857412 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) 845712</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) 854712</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) None of the above</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3> What is come in place of question mark (?) in the following series?  WE  SG  PJ  LN  ?</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) HS</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) IT</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) IS</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) HT</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>The calendar for the year 2007 will be the same for the year</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) 2017</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) 2018</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) 2016</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) 2014</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Three of the following four are alike in a certain way and hence form a group. Which one does not belong to the group?</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) 52</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) 70</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) 48</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) 68</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Your favorite website is</h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) MathFUN</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) MathFUN</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) MathFUN</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) MathFUN</label>
                    </div>
                
                </li>
            
            </ol>
            
            <input type="submit" class="button" value="Submit Quiz" />
		
		</form>
	
	</div>
	

<!-- Footer -->
<?PHP include 'include/footer.php' ;?>	

    <div class="pageheader">
        <h1> Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    
    <p>
       
        <a href="logout.php" class="button">Sign Out of Your Account</a>
    </p>
	</div>
</body>
</html>