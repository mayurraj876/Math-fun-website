<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<title>LENGTH CONVERSION</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<link rel="stylesheet" href="style/style.css">


<script>
       function clr()
       {
        document.getElementById("meter").value=" "
        document.getElementById("cm").value=" "
        document.getElementById("mm").value=" "
        document.getElementById("km").value=" "
        document.getElementById("feet").value=" "
        document.getElementById("inch").value=" "
        document.getElementById("yard").value=" "
        document.getElementById("miles").value=" "
        }

       function lengthconv1(valnum)
       {
        var x=valnum/3.2808
        document.getElementById("meter").value=x
        x=valnum*12
        document.getElementById("inch").value=x
        x=valnum/0.032808
        document.getElementById("cm").value=x
        x=valnum/0.0032808
        document.getElementById("mm").value=x
        x=valnum*0.00018939
        document.getElementById("miles").value=x
        x=valnum/3280.8
        document.getElementById("km").value=x
        x=valnum*0.33333
        document.getElementById("yard").value=x
        }

        function lengthconv2(valnum)
        {
         var x=valnum/39.370
         document.getElementById("meter").value=x
         x=valnum*0.083333
         document.getElementById("feet").value=x
         x=valnum/0.39370
         document.getElementById("cm").value=x
         x=valnum/0.039370
         document.getElementById("mm").value=x
         x=valnum*0.000015783
         document.getElementById("miles").value=x
         x=valnum/39370
         document.getElementById("km").value=x
         x=valnum*0.027778
         document.getElementById("yard").value=x
        }

        function lengthconv3(valnum)
        {
         var x=valnum*39.370
         document.getElementById("inch").value=x
         x=valnum*3.2808
         document.getElementById("feet").value=x
         x=valnum/0.01
         document.getElementById("cm").value=x
         x=valnum/0.001
         document.getElementById("mm").value=x
         x=valnum*0.00062137
         document.getElementById("miles").value=x
         x=valnum/1000
         document.getElementById("km").value=x
         x=valnum*1.0936
         document.getElementById("yard").value=x
         }

         function lengthconv4(valnum)
         {
          var x=valnum*39370
          document.getElementById("inch").value=x
          x=valnum*3280.8
          document.getElementById("feet").value=x
          x=valnum*100000
          document.getElementById("cm").value=x
          x=valnum*1000000
          document.getElementById("mm").value=x
          x=valnum*0.62137
          document.getElementById("miles").value=x
          x=valnum*1000
          document.getElementById("meter").value=x
          x=valnum*1093.6
          document.getElementById("yard").value=x
         }

        function lengthconv5(valnum)
         {
          var x=valnum*0.39370
          document.getElementById("inch").value=x
          x=valnum*0.032808
          document.getElementById("feet").value=x
          x=valnum/100000
          document.getElementById("km").value=x
          x=valnum*10
          document.getElementById("mm").value=x
          x=valnum*0.0000062137
          document.getElementById("miles").value=x
          x=valnum/100
          document.getElementById("meter").value=x
          x=valnum*0.010936
          document.getElementById("yard").value=x
         }

        function lengthconv6(valnum)
         {
          var x=valnum*3.9370
          document.getElementById("inch").value=x
          x=valnum*0.32808
          document.getElementById("feet").value=x
          x=valnum/10
          document.getElementById("cm").value=x
          x=valnum/1000000
          document.getElementById("km").value=x
          x=valnum*0.00000062137
          document.getElementById("miles").value=x
          x=valnum/1000
          document.getElementById("meter").value=x
          x=valnum*0.0010936
          document.getElementById("yard").value=x
         }

        function lengthconv7(valnum)
         {
          var x=valnum*63360
          document.getElementById("inch").value=x
          x=valnum*5280
          document.getElementById("feet").value=x
          x=valnum/0.0000062137
          document.getElementById("cm").value=x
          x=valnum*10/0.0000062137
          document.getElementById("mm").value=x
          x=valnum/0.62137
          document.getElementById("km").value=x
          x=valnum/0.00062137
          document.getElementById("meter").value=x
          x=valnum*1760
          document.getElementById("yard").value=x
         }

        function lengthconv8(valnum)
         {
          var x=valnum*36
          document.getElementById("inch").value=x
          x=valnum*3
          document.getElementById("feet").value=x
          x=valnum/0.010936
          document.getElementById("cm").value=x
          x=valnum/0.0010936
          document.getElementById("mm").value=x
          x=valnum*0.00056818
          document.getElementById("miles").value=x
          x=valnum/1.0936
          document.getElementById("meter").value=x
          x=valnum/1093.6
          document.getElementById("km").value=x
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
<p> <h4><b>Type a value in any of the fields to convert between Length measurements:</b></h4></p>
<label class="len"> Feet</label><br/>
<input type="text" class="text" id="feet" oninput="lengthconv1(this.value)" placeholder="Feet"/><br/>
<label class="len"> Inches</label><br/>
<input type="text" class="text" id="inch" oninput="lengthconv2(this.value)" placeholder="Inch"/><br/>
<label class="len"> Meter</label><br/>
<input type="text" id="meter" class="text" oninput="lengthconv3(this.value)" placeholder="Meter"/><br/>
<label class="len"> kilometer</label><br/>
<input type="text" id="km" class="text" oninput="lengthconv4(this.value)" placeholder="Kilometer"/><br/>

</div>

<div class="split right">
<br/>
<input type="button" value="CLEAR" style="background-color:grey" class="text len" onclick="clr()"/>
<br/><br/>
<label class="len"> cm</label><br/>
<input type="text" class="text" id="cm" oninput="lengthconv5(this.value)" placeholder="Centimeter"><br/>
<label class="len"> mm</label><br/>
<input type="text" class="text" id="mm" oninput="lengthconv6(this.value)" placeholder="Millimeter"><br/>
<label class="len"> Miles</label><br/>
<input type="text" class="text" id="miles" oninput="lengthconv7(this.value)" placeholder="Mile"><br/>
<label class="len"> Yards</label><br/>
<input type="text" id="yard" class="text" oninput="lengthconv8(this.value)" placeholder="Yard"/><br/>
</div>

</body>
</html>