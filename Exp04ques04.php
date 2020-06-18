<html>
<head>
<title>question 4 of 4
</title>
</head>
<body>
<h3 class="header"> Experiment 4 Question 4</h3>
<a href="index.php">HOMEPAGE</a><br>
<div class="alignleft left">
<div  class="centered ">
<form action="" method="GET">
<table>
			<h2>Fee Calculation</h2>
			<td>Tuition Fee<sup>*</sup>:</td><td><input type="number" name="num1" class="input_num" required></td><br>
			</tr>
			<tr>
			<td>Travelling:</td><td><input type="number" name="num2" class="input_num"></td><br>
			</tr>
			<tr>
			<td>Hostel Fee:</td><td><input type="number" name="num3" class="input_num"></td><br>
			</tr>
			<tr>
			<td>Mess Fee:</td><td><input type="number" name="num4" class="input_num"></td><br>
			</tr>
			<tr>
			<td>Library Fee<sup>*</sup>:</td><td><input type="number" name="num5" class="input_num" required></td><br>
			</tr>
			<tr>
			<td>Id Fee<sup>*</sup>:</td><td><input type="number" name="num6" class="input_num" required></td><br>
			</tr>
			<tr>
			<td>Exam Fee:<sup>*</sup>:</td><td><input type="number" name="num7" class="input_num" required></td><br>
		</table>
		<br>
			<h5><sup>*</sup> are Compulsary fields</h5>
			<br>
			<button type="submit">Submit</button>


</div>
<div class="alignright right" >
	<?php
			if(isset($_GET['num1']) && isset($_GET['num5']) && isset($_GET['num6']) && isset($_GET['num7']))
			{
				$travel=0;
				$mess=0;
				$hostel=0;
				if($_GET['num2']=='')
					$travel=0;
				if($_GET['num4']=='')
					$mess=0;
				if($_GET['num3']=='')
					$hostel=0;
				$tut=$_GET['num1'];
				$lib=$_GET['num5'];
				$id=$_GET['num6'];
				$exam=$_GET['num7'];
				
				$fee=$travel+$mess+$hostel+$tut+$lib+$id+$exam;
				echo "<b>Your complete fee for the Course is :</b> ".$fee;
			}
		?>

<?php
show_source("Exp04ques04.php");
?>
</div>