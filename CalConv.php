<!DOCTYPE html>
<html>
<head>
<title>CALCULATOR AND CONVERSIONS</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<link rel="stylesheet" href="style/style.css">

<style>

.textalign
{
  text-align:center;
  font-size:4%;
}

.split{'
 height:50%;
 width:50%;
 position:fixed;
 }

.left{
left:7%;
background-color:white;}

.right{
right:1%;
background-color:white;}

.title{ 
         background-color: #1abc9c; 
         margin-bottom: 2%; 
         text-align:center; 
         width: 75%; 
         height:15%;
         color:black; 
         border: solid black 1px; 
         } 
  
 input[type="button"] 
         { 
         background-color:grey; 
         color: black; 
         border: solid black 2px; 
         width:100%;
		 height:47px;
         font-size:150%;
         } 
  
 input[type="text"] 
         { 
         background-color:white; 
         border: solid black 2px; 
         width:100% 
         }

</style>
<script> 
         //function that display value 
         function dis(val) 
         { 
             document.getElementById("result").value+=val 
         } 
           
         //function that evaluates the digit and return result 
         function solve() 
         { 
             let x = document.getElementById("result").value 
             let y = eval(x) 
             document.getElementById("result").value = y 
         } 
           
         //function that clear the display 
         function clr() 
         { 
             document.getElementById("result").value = "" 
         } 
         function back()
         {
          var value=document.getElementById("result").value;
          document.getElementById("result").value=value.substr(0, value.length-1);
         }
</script> 
</head>

<body>

<!-- Header -->
	<?PHP include 'include/header.php' ;?>

<!-- Navigation -->
<?PHP include 'include/navigation_nonlogin.php' ;?>


<!-- Content will go here -->

<div class="split left"><br/>
<div class = "title" ><h3><b>MATHFUN CALCULATOR<b></h3></div> 
      <table border="2" width="75%" height="20%"> 
         <tr> 
            <td colspan="2"><input type="text" id="result" style="height:100%;width:100%;font-size:20px"/></td> 
            <!-- clr() function will call clr to clear all value -->
            <td><input type="button" value="Clear" onclick="clr()"/> </td> 
            <td><input type="button" value="Back" onclick="back()"/></td>
         </tr> 
         <tr> 
            <!-- create button and assign value to each button -->
            <!-- dis("1") will call function dis to display value -->
            <td><input type="button" value="1" onclick="dis('1')"/> </td> 
            <td><input type="button" value="2" onclick="dis('2')"/> </td> 
            <td><input type="button" value="3" onclick="dis('3')"/> </td> 
            <td><input type="button" value="/" onclick="dis('/')"/> </td> 
         </tr> 
         <tr> 
            <td><input type="button" value="4" onclick="dis('4')"/> </td> 
            <td><input type="button" value="5" onclick="dis('5')"/> </td> 
            <td><input type="button" value="6" onclick="dis('6')"/> </td> 
            <td><input type="button" value="-" onclick="dis('-')"/> </td> 
         </tr> 
         <tr> 
            <td><input type="button" value="7" onclick="dis('7')"/> </td> 
            <td><input type="button" value="8" onclick="dis('8')"/> </td> 
            <td><input type="button" value="9" onclick="dis('9')"/> </td> 
            <td><input type="button" value="+" onclick="dis('+')"/> </td> 
         </tr> 
         <tr> 
            <td><input type="button" value="." onclick="dis('.')"/> </td> 
            <td><input type="button" value="0" onclick="dis('0')"/> </td> 
            <!-- solve function call function solve to evaluate value -->
            <td><input type="button" value="=" onclick="solve()"/> </td> 
            <td><input type="button" value="*" onclick="dis('*')"/> </td> 
         </tr> 
      </table> 
</div>

<div class="split right"><br/>
<div class="title" style="width:100%"><h3><b> SIMPLE MATHEMATICAL CONVERSIONS<b></h3></div>
<br/>
<nav class="w3-bar w3-grey">
  <a href="Length.php" class="w3-button w3-bar-item"><h5><b>LENGTH CONVERSIONS</b></h5></a>
</nav>
<br/>
<nav class="w3-bar w3-grey">
  <a href="weight.php" class="w3-button w3-bar-item"><h5><b>WEIGHT CONVERSIONS</b></h5></a>
</nav>
<br/>
<nav class="w3-bar w3-grey">
  <a href="temperature.php" class="w3-button w3-bar-item"><h5><b>TEMPERATURE CONVERSIONS</b></h5></a><br/>
</nav>
</div>





</body>
</html>