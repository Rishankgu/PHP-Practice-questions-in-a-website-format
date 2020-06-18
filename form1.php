<!DOCTYPE html>
<html>
<head>
<title>form1</title>
<link rel="stylesheet" type="text/css"href="style.css">
</head>
<body>
<h3 class="header">Question 2</h3>
<a href="index.php">HOMEPAGE</a><br>
<div class="centertext centered">
<form action="" method="get">
   a=<input type="text" name="var1"><br>
   b=<input type ="text" name= "var2"><br>
 <input type=radio name="oper" value="add">Addition </input><br>
 <input type=radio name="oper" value="sub">Subtraction</input>
 <input type=radio name="oper" value="div">Division </input><br>
 <input type=radio name="oper" value="mul">Multiplication</input>
 <input type=submit name=submit>
</form>
<?php
if(isset($_GET['submit']))
{
$x=$_GET["var1"];
$y=$_GET["var2"];
$result;
$opt=$_GET["oper"];

   if($opt=="add"){
	    $result=$x+$y;
	    echo"the addtion os the above number is".$result;
	    exit;
               }

	if($opt=="sub"){
		$result=$x-$y;
		echo"the subtration of the above given number is".$result;
		exit;
	               }

	if($opt=="div"){
		$result=$x/$y;
		echo"the division of the above given number is".$result;
		exit;
	              }
    if($opt=="mul"){
	    $result=$x*$y;
		echo"the multiplication of the above given number is".$result;
		exit;
                  }
}
?>
</div>
<hr>
<div="alignright">
<?php 
show_source("form1.php");?>
</div>
</body>
</html>