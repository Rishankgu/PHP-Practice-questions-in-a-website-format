<!DOCTYPE html>
<html>
<head>
<title>question 4</title>
<link rel="stylesheet" type="text/css"href="style.css">
<body>
<!-- Write your comments here -->
<h3 class="header">Question 4 </h3>
<a href="index.php">HOMEPAGE</a><br>
<form action="" method="GET">
<h4>Enter the first digit </h4><input type="text" name="value1"><br>
<h4>Enter the second digit </h4><input type="text" name="value2"><br>
<input type=submit name='submit'><br>
<?php
if(isset($_GET['submit']))
{
$a=$_GET['value1'];
$b=$_GET['value2'];
$i;
 for($i=$a;$i<=$b;$i++)
 {
	 if(($i%5)==0){
		 echo $i.' is divisble by 5<br>';
	 }
	 else{
		 echo $i.' is not divisble by 5<br>';
	 }
	 
 }
 
 function prime($a,$b){
	for($i=$a;$i<=$b;$i++) {
		 
		
		
		for($j=2;$j<$a;$j++){
			
         if($i%$j==0){
			 
			  echo $i.' is not a prime number<br> ';
		            }
         else{
			 echo$i. ' is a prime number<br>';
		    }
		 }
	 
	           } 
	               }    
 
prime($a,$b);
}
?>
<hr>
<?php
  show_source("form3.php");
?>

</body>
</html>