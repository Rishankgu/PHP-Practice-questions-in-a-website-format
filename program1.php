<!DOCTYPE html>
<html>

<head> 
<title> first program</title>
<link rel="stylesheet" type="text/css"href="style.css">

</head>
<body>
<a href="index.php">HOMEPAGE</a><br>

<div  class=" split centered ">
<form action="" method="GET">
 num: <input type="text" name="num">
 <input type=submit name='submit'>
 </form>
<?php

if(isset($_GET['submit'])){
$number=$_GET["num"];
$i;
$mul;
$sum;
$res=0;
function check($number){ 
   echo"<h3>1.Tell the user entered number is even or odd</h3>";
   echo'<br>';
    if($number % 2 == 0){ 
        echo "Even";  
		echo'<br>';
    } 
    else{ 
        echo"Odd"; 
		echo'<br>';
 }
   }
check($number); 
function table($number)
{
	echo'<h3>2.Print the table of the entered number</h3>';
	echo'<br>';
for($i=1;$i<=10;$i++){
	$mul=$number*$i;
	echo $number."*".$i."=".$mul;
	echo'<br>';
}
echo'<br>';
}
table($number);

function sumsquare($number)
{
	echo"<h3>3.To find sum of square of digits of entered number. </h3>";
	echo'<br>';
	for($i=0;$i<strlen($number);$i++)
	{
		$sum=(int)$number[$i]*(int)$number[$i];
		$res+=$sum;
		echo'';
	}
	echo "The sum of square of digites is:-  ".$res."<br>";
	
}

}?>

</div>

<div class="alignright right" >
<?php
show_source("program1.php");
?>
</div>
</body>
</html>
