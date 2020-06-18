<!DOCTYPE html>
<html>
<head>
<title>Exp04prog_6</title>
</head>
<body>
<h3 class="header"> Experiment 4 Question 6</h3>
<a href="index.php">HOMEPAGE</a><br>
<div class="alignleft left">
<div  class="centered ">
	<form action="" method="GET">
		<table>
		<tr>
        <td>Maths : </td><td colspan=2><input type=number name="maths" class="input_num" required></td>
		</tr>
		<tr>
        <td>Science : </td><td colspan=2><input type=number name="science" class="input_num" required></td>
		</tr>
		<tr>
        <td>English : </td><td colspan=2><input type=number name="english" class="input_num" required></td>
		</tr>
		<tr>
        <td>Language : </td><td colspan=2><input type=number name="lang" class="input_num" required></td>
		</tr>
		<tr>
        <td>Moral : </td><td colspan=2><input type=number name="moral" class="input_num" required></td>
		</tr>
		 <tr>
		 <td><input type="submit" name="submit">
		 </td>
		 </tr>
		 </table>
		 </form>
		
		
		<?php
		 if(isset($_REQUEST['submit']))
		 {
			 function calc($s1,$s2,$s3,$s4,$s5)
			 {	 $average=0;
				 $average=($s1+$s2+$s3+$s4+$s5)/5;
				 return $average;
			 }
			 $s1=$_GET['maths'];
			 $s2=$_GET['science'];
			 $s3=$_GET['english'];
			 $s4=$_GET['lang'];
			 $s5=$_GET['moral'];
			 $grade='';
			 $avg=calc($s1,$s2,$s3,$s4,$s5);
			 if($avg>=90 && $avg<=100)
				$grade='o';
			 else if($avg>=70 && $avg<=89)
				$grade='a';
			 else if($avg>=60 && $avg<=69)
				$grade='b';
			 else if($avg>=50 && $avg<=59)
				$grade='c';
			 
			 
			
			echo "Average : $avg<br>Grade : ".$grade;
 		 }
			?>
		 </div>
			</div>
		</div>
		<div class="split right">
		<?php
			echo "CODE",'<br>';
			show_source("Exp04prog_6.php");
			?>
		</div>
	</div>

</body>
</html>