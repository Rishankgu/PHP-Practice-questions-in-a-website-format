<html>
	<head>
		<title>Experiment-6</title>
	</head>
	</html>
	<body>
	<header>EXPERIMENT6 PART2</header>
	<a href="ppp.php">HOMEPAGE</a><br>
<html>
<body>
<form action ="" method="POST">
<h2>Student Details: </h2>
<h4>Student</h4>
Roll Number:<br>
<input type ="number" name="roll_no">
<br>Name:<br>
<input type ="text" name="name">
<br>Age:<br>
<input type ="number" name="age">
<br>Address:<br>
<input type ="text" name="address">
<br>Phone Number:<br>
<input type ="number" name="phone_no">
<input type ="submit" name=save>
</form>
</body>
</html>
<?php
$fp=fopen("studentdetails.txt","r");
while(!feof($fp))
{
	$content=fgets($fp);
	echo $content;
}
?>
<div class="alignright right" >
<?php
show_source("Exp06ques1b.php");
?>
</div>
