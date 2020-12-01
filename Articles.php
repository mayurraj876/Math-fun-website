<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<link rel="stylesheet" href="style/style.css">
<style>
div.gallery {
  margin: 3px;
  border: 1px solid #ccc;
  float: left;
  width: 24.5%;
}

div.gallery:hover {
  border: 2px solid #777;
}

div.gallery img {
  width: 100%;
  height: 400px;
}

div.desc {
  padding: 15px;
  text-align: none;
}

h2.main{
  font-style:italic;
  font-family:'Times New Roman';
  font-weight:bold;
}

p.description{
font-family:'Courier New';
font-size:13pt;}

#more1 {display: none;}
#more2 {display: none;}
#more3 {display: none;}
#more4 {display: none;}

</style>
</head>
<body>

<!-- Header -->
	<?PHP include 'include/header.php' ;?>

<!-- Navigation -->
<?PHP include 'include/navigation_nonlogin.php' ;?>



<!-- Content will go here -->
<div class="gallery">
<img src="img/Magic.gif" alt="MAGIC NUMBER">
<h2 class="main">Magical digit!</h2>
<p class="description"> The number 9 is believed to be a magical number with certain very interesting properties.<span id="dots1">...</span><span id="more1">
This is because if you multiply a number with 9, and add all the digits of the resulting number, the sum would always come out to be 9.</span></p>
<button onclick="myFunction1()" id="myBtn1">Read more</button>
</div>

<div class="gallery">
<img src="img/pizza.gif" alt="PIZZA-MATH">
<h2 class="main">Pizza and math: Are they related?</h2>
<p class="description">
We may seem like someone who is ruining pizza for you but you will be amazed to know its relation with maths.<span id="dots2">...</span><span id="more2">
To find out the volume of the cylindrical shape of the pizza, the formula used is Pi x r2 x h.
So, if an ordinary pizza has a radius of 'z' and height 'a', its volume is Pi x z x z x a which makes up 'pizza'.</span></p>
<button onclick="myFunction2()" id="myBtn2">Read more</button>
</div>

<div class="gallery">
<img src="img/google.gif" alt="GOOGOL!">
<h2 class="main">Google is all about mathematics..</h2>
<p class="description">
The lifeline of today's time, Google, derived its name from the word 'googol'<span id="dots3">...</span><span id="more3">
-- a mathematical term for the number 1 followed by 100 zeros, which reflect infinite amount of search on the internet.</span></p>
<button onclick="myFunction3()" id="myBtn3">Read more</button>
</div>

<div class="gallery">
<img src="img/Dilemma.png" alt="MATH OR MATHS" width="600" height="400">
<h2 class="main">The terminology dilemma!</h2>
<p class="description">
This debate is going on for a long time now. But the answer depends on which part of the world you are in.<span id="dots4">...</span><span id="more4">Americans called mathematics 'math', saying that the function of the same is a singular noun and with that logic, they prefer saying 'math', which is singular too. On the other hand, speakers of British English would always say 'maths', as in 'I have a degree in maths'.
However, there are logical arguments for both the spellings. The Oxford and the Merriam-Webster dictionaries say the word is plural because of the letter 's' in the end. On the contrary however, it is usually used as a singular noun. For example, 'Mathematics is my favourite subject' and not 'Mathematics are my favourite subject'.Other plural nouns that are used as if they were singular are economics, ethics, politics, gymnastics, measles and dominoes. These words, however, are not habitually shortened, making math/maths rather an unusual word.</span></p>
<button onclick="myFunction4()" id="myBtn4">Read more</button>
</div>

<script>
function myFunction1() {
  var dots = document.getElementById("dots1");
  var moreText = document.getElementById("more1");
  var btnText = document.getElementById("myBtn1");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}

function myFunction2() {
  var dots = document.getElementById("dots2");
  var moreText = document.getElementById("more2");
  var btnText = document.getElementById("myBtn2");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}

function myFunction3() {
  var dots = document.getElementById("dots3");
  var moreText = document.getElementById("more3");
  var btnText = document.getElementById("myBtn3");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}

function myFunction4() {
  var dots = document.getElementById("dots4");
  var moreText = document.getElementById("more4");
  var btnText = document.getElementById("myBtn4");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>

</body>
</html>