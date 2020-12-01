<!DOCTYPE html>
<html>
<head>
<title>QUIZ SCORE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<link rel="stylesheet" href="style/style.css">
<style>
.score {
	text-align: center;
	margin : 20%,45%;
}
</style>

</head>


<body>

<!-- Header -->
	<?PHP include 'include/header.php' ;?>

<!-- Navigation -->
<?PHP include 'include/navigation_nonlogin.php' ;?>


<!-- Content will go here -->

	<div id="page-wrap">

		<h1 align=center >Final Quiz score</h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "C") { $totalCorrect++; }
            if ($answer3 == "B") { $totalCorrect++; }
            if ($answer4 == "B") { $totalCorrect++; }
            if ($answer5) { $totalCorrect++; }
            
            
            
        ?>
		<h2 class=score><?php
		echo "<div id='results'>$totalCorrect / 5 correct</div>";
		?></h2>
	
	</div>
<!-- Footer -->
<?PHP include 'include/footer.php' ;?>	
	
</body>

</html>