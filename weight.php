<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<title>WEIGHT CONVERSION</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<link rel="stylesheet" href="style/style.css">

<script>
       function clr()
       {
        document.getElementById("gram").value=" "
        document.getElementById("kg").value=" "
        document.getElementById("pound").value=" "
        document.getElementById("ounce").value=" "
        document.getElementById("carat").value=" "
        document.getElementById("tonne").value=" "
        document.getElementById("grain").value=" "
        document.getElementById("stone").value=" "
        }

       function weightconv1(valnum)
       {
        var x=valnum*0.001
        document.getElementById("kg").value=x
        x=valnum*0.002204
        document.getElementById("pound").value=x
        x=valnum*0.035273
        document.getElementById("ounce").value=x
        x=valnum*5
        document.getElementById("carat").value=x
        x=valnum*0.000001
        document.getElementById("tonne").value=x
        x=valnum*15.43235
        document.getElementById("grain").value=x
        x=valnum*0.00015747
        document.getElementById("stone").value=x
        }

        function weightconv2(valnum)
        {
        var x=valnum*1000
        document.getElementById("gram").value=x
        x=valnum*2.20462
        document.getElementById("pound").value=x
        x=valnum*35.27396
        document.getElementById("ounce").value=x
        x=valnum*5000
        document.getElementById("carat").value=x
        x=valnum*0.001
        document.getElementById("tonne").value=x
        x=valnum*15432.35835
        document.getElementById("grain").value=x
        x=valnum*0.15747
        document.getElementById("stone").value=x
        }

        function weightconv3(valnum)
        {
        var x=valnum*0.45359
        document.getElementById("kg").value=x
        x=valnum*453.59237
        document.getElementById("gram").value=x
        x=valnum*16
        document.getElementById("ounce").value=x
        x=valnum*2267.96185
        document.getElementById("carat").value=x
        x=valnum*0.00045359
        document.getElementById("tonne").value=x
        x=valnum*7000
        document.getElementById("grain").value=x
        x=valnum*0.071429
        document.getElementById("stone").value=x
         }

         function weightconv4(valnum)
         {
        var x=valnum*0.02834952
        document.getElementById("kg").value=x
        x=valnum*28.34952
        document.getElementById("gram").value=x
        x=valnum*0.0625
        document.getElementById("pound").value=x
        x=valnum*141.74761
        document.getElementById("carat").value=x
        x=valnum*0.000028349
        document.getElementById("tonne").value=x
        x=valnum*437.5
        document.getElementById("grain").value=x
        x=valnum*0.0044643
        document.getElementById("stone").value=x
         }

        function weightconv5(valnum)
         {
        var x=valnum*0.0002
        document.getElementById("kg").value=x
        x=valnum*0.2
        document.getElementById("gram").value=x
        x=valnum*0.00004409
        document.getElementById("pound").value=x
        x=valnum*0.007054
        document.getElementById("ounce").value=x
        x=valnum*0.0000002
        document.getElementById("tonne").value=x
        x=valnum*3.0864716
        document.getElementById("grain").value=x
        x=valnum*0.000031495
        document.getElementById("stone").value=x
         }

        function weightconv6(valnum)
         {
        var x=valnum*1000
        document.getElementById("kg").value=x
        x=valnum*1000000
        document.getElementById("gram").value=x
        x=valnum*2204.62262
        document.getElementById("pound").value=x
        x=valnum*35273.96194
        document.getElementById("ounce").value=x
        x=valnum*5000000
        document.getElementById("carat").value=x
        x=valnum*15432358.35294
        document.getElementById("grain").value=x
        x=valnum*157.473
        document.getElementById("stone").value=x
         }

        function weightconv7(valnum)
         {       
        var x=valnum*0.000064798
        document.getElementById("kg").value=x
        x=valnum*0.064798
        document.getElementById("gram").value=x
        x=valnum*0.00014285
        document.getElementById("pound").value=x
        x=valnum*0.0022857
        document.getElementById("ounce").value=x
        x=valnum*0.000000064798
        document.getElementById("tonne").value=x
        x=valnum*0.32399
        document.getElementById("carat").value=x
        x=valnum*0.000031495
        document.getElementById("stone").value=x
         }

        function weightconv8(valnum)
         {
        var x=valnum/0.15747
        document.getElementById("kg").value=x
        x=valnum/0.00015747
        document.getElementById("gram").value=x
        x=valnum*14
        document.getElementById("pound").value=x
        x=valnum*224
        document.getElementById("ounce").value=x
        x=valnum*0.00635
        document.getElementById("tonne").value=x
        x=valnum*31751.4659
        document.getElementById("carat").value=x
        x=valnum*98000
        document.getElementById("grain").value=x
         }

</script>


<style>

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
    left:30px;
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
<p> <h4><b>Type a value in any of the fields to convert between weight measurements:</b></h4></p>
<label class="len"> Gram</label><br/>
<input type="text" class="text" id="gram" oninput="weightconv1(this.value)" placeholder="Gram"/><br/>
<label class="len"> Kilogram</label><br/>
<input type="text" class="text" id="kg" oninput="weightconv2(this.value)" placeholder="Kilogram"/><br/>
<label class="len"> Pound</label><br/>
<input type="text" id="pound" class="text" oninput="weightconv3(this.value)" placeholder="Pound"/><br/>
<label class="len"> Ounce</label><br/>
<input type="text" id="ounce" class="text" oninput="weightconv4(this.value)" placeholder="Ounce"/><br/>

</div>

<div class="split right">
<br/>
<input type="button" value="CLEAR" style="background-color:grey" class="text len" onclick="clr()"/>
<br/><br/>
<label class="len"> Carat</label><br/>
<input type="text" class="text" id="carat" oninput="weightconv5(this.value)" placeholder="Carat"><br/>
<label class="len"> Tonne</label><br/>
<input type="text" class="text" id="tonne" oninput="weightconv6(this.value)" placeholder="Tonne"><br/>
<label class="len"> Grains</label><br/>
<input type="text" class="text" id="grain" oninput="weightconv7(this.value)" placeholder="Grain"><br/>
<label class="len"> Stones</label><br/>
<input type="text" id="stone" class="text" oninput="weightconv8(this.value)" placeholder="Stones"/><br/>
</div>

</body>
</html>