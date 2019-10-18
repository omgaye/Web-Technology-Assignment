<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assignment 4</title>
</head>
<style>
.form{
    margin-left:335px;
    margin-top:80px;
    border:1px black;
    width:650px;
    height:470px;
    border-radius:10px;
    box-shadow:0px 10px 10px grey;
    position:absolute;
}
.form form{
    padding:40px;
}
input[type=text],select{
  width:100%;
  font-family: 'Courier New', Courier, monospace;
  margin:2px;
  padding:10px;
}
input[type=submit]{
  width:40%;
  margin-left:170px;
  padding:10px;
  background:#d10303;
  border-color:#d10303;
  align-items:center;
  justify-content:center;
  border-radius:10px;
  font-family: 'Courier New', Courier, monospace;
  color:#fff;
  cursor:pointer;
  font-size:15px;
  z-index:50px;
  
}
span{
    font-size:38px;
    font-family: 'Courier New', Courier, monospace;
}
#h {
    font-size:27px;
    margin-left:410px;
    margin-top:400px;
    position:absolute;
    font-family: 'Courier New', Courier, monospace;[''
}
</style>
<body>
<br><br>
<center><span>Assignment 4</span></center>
<div class="form">
<form action="index.php" method="get">
<input type="text" name="one" id="one" placeholder="Enter a First Number">
<br><br>
<input type="text" name="sec" id="sec" placeholder="Enter a Secound Number">
<br><br>
&nbsp;&nbsp;&nbsp;<select name="calculate" id="">
<option value="add">Addition </option>
<option value="sub">Substraction</option>
<option value="mul">Multiplication </option>
<option value="div">Division</option>
<option value="mod">Modulation</option>
<option value="avg">Avrage</option>
<option value="gre">Greatest</option>
</select><br><br><br>
<input type="submit" value="Calculate" name="sub">
<br>
<div class="h">
<h3 id="h"></h3>
</div>
</form>
</div>   

<?php
if(isset($_GET['sub']))
{
$p = $_GET['one'];
$q = $_GET['sec'];
if($_GET['calculate'] == "add" ){
    echo "<div id='h'> The Sum of Number  = ";
    echo $p+$q;
    echo "</div>";
    }    

if($_GET['calculate'] == "sub" ){
    echo "<div id='h'> The Sub of Number  = ";
    echo $p-$q;
    echo "</div>";
}
if($_GET['calculate'] == "mul" ){
    echo "<div id='h'> The Multiplication of Number  = ";   
    echo $p * $q;
    echo "</div>";
    }

if($_GET['calculate'] == "div" ){
    echo "<div id='h'> The Division of Number  = ";
    echo $p / $q;
    echo "</div>";
}

if($_GET['calculate'] == "mod" ){
    echo "<div id='h'> The Mod of Number  = ";
    echo $p % $q;
    echo "</div>";

}

if($_GET['calculate'] == "avg" ){
    echo "<div id='h'> The Avrage of Number  = ";
    echo ($p + $q)/2;
    echo "</div>";

}
if($_GET['calculate'] == "gre" ){
   

    if($p > $q){
        echo "<div id='h'> The Greatest Number  = ";
        echo $p;
        echo "<br> Square of $p is ";
        echo $p * $p;
        echo "<br> Square of $q is ";
        echo $q * $q;
        echo "</div>";
    }
    else{
        echo "<div id='h'> The Greatest Number  = ";
        echo $q;
        echo "<br> Square of $p is ";
        echo $p * $p;
        echo "<br> Square of $q is ";
        echo $q * $q;
        echo "</div>";
    }

   
}

}
?>
</body>
</html>