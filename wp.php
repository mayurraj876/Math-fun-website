
 
<!DOCTYPE html>
<html>
<head>
<title>HOME PAGE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<link rel="stylesheet" href="style/           ss">

</head>

<body>

<!-- Header -->
	<?PHP include 'include/header.php' ;?>

<!-- Navigation -->
<?PHP include 'include/navigation_nonlogin.php' ;?>

<!-- Content will go here -->

<!-- Slide Show -->
<div>
<section>
     <img class="mySlides" src="img/disp1.jpg" align="left" style="width:30%" style="height:30px">
     <img class="mySlides" src="img/disp2.jpg" align="left" style="width:30%" style="height:30px">
</section>
</div>
<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>


<!-- Footer -->
<?PHP include 'include/footer.php' ;?>	
</body>
</html>