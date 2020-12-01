<!DOCTYPE html>
<html>
<head>
<title>TEMPERATURE CONVERSION</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">

<script>
    function clr()
    {
     document.getElementById("cel").value=" "
     document.getElementById("k").value=" "
     document.getElementById("F").value=" "
    }

    function tempconv1(val)
    {
     var x=(val*1.8)+32;
     document.getElementById("F").value=x;
     x=(val*1)+273.15;
     document.getElementById("k").value=x
     }

    function tempconv2(val)
    {
     var x=(val-273.15)*1.8+32
     document.getElementById("F").value=x
     x=val-273.15
     document.getElementById("cel").value=x
     }

    function tempconv3(val)
    {
     var x=(val-32)/1.8
     document.getElementById("cel").value=x
     x=((val-32)/1.8)+273.15
     document.getElementById("k").value=x
     }
</script>
<style>

      .header
      {
        padding: 50px; /* some padding */
        text-align: center; /* center the text */
        background: #1abc9c; /* green background */
        color: white; /* white text color */
      }

    /* Increase the font size of the <h1> element */
     .header h1
     {
      font-size: 60px;
      font-family:cursive;
     }

     p.tagline
     {
       font-family:cursive;
       color: black;
       font-style:italic;
       font-size:20px;
     }
 
    .row1
    {
     position:absolute;
     left:100px;
     top:0px;
    }

    .row2
    {
     position:absolute;
     right:100px;
     top:0px;
    }

   .textalign
    {
     text-align:center;
     font-size:18px;
    }

   .len
  {
    font-size:20px;
    font-color:Black;
    text-align:center;
   }
   .text
   {
    border: solid black 1px; 
    width:250px;
   }

   .split
   {
     height:500px;
     width:50%;
     position:fixed;
   }

   .left
   {
    left:70px;
    background-color:white;
   }

   .right
   {
    right:0;
    background-color:white;
   }

</style>

</head>

<body>


<!-- Header -->
	<?PHP include 'include/header.php' ;?>

<!-- Navigation -->
<?PHP include 'include/navigation_nonlogin.php' ;?>

<!-- Content will go here -->

<div class="split left">
<p> <h4><b>Type a value in any of the fields to convert between Temperature measurements:</b></h4></p>
<label class="len"> Celcius</label><br/>
<input type="text" class="text" id="cel" oninput="tempconv1(this.value)" placeholder="Celcius"/><br/>
<label class="len"> Kelvin</label><br/>
<input type="text" class="text" id="k" oninput="tempconv2(this.value)" placeholder="Kelvin"/><br/>
<label class="len">Fahrenheit</label><br/>
<input type="text" id="F" class="text" oninput="tempconv3(this.value)" placeholder="Fahrenheit"/><br/>
</div>

<div class="split right">
<br/>
<input type="button" value="CLEAR" style="background-color:grey" class="text len" onclick="clr()"/>
</div>

</body>
</html>