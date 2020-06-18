<html>
<head>
<title>question 2 of 4
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css"href="style.css">
</head>
<body>
<h3 class="header"> Experiment 4 Question 2</h3>
<div class="alignleft left">
</div>
<a href="index.php">HOMEPAGE</a><br>
<div  class="centered ">
<form action="" method="GET">
<input type="text" name="name" placeholder=" name">
<h4>Female</h4><input type="radio" name="Gender" value="Female">
<h4>Male</h4>  <input type="radio" name="Gender" value="Male">
<input type="submit" name="submit">
</div>
<div class="alignright right" >
<?php
	if(isset($_GET['name']))
			{
				$a=$_GET['name'];
				echo "Your name is ",$a;
				echo '<br>';
				$b=$_GET['Gender'];
				echo "You Gender : ",$b;
			}
		?>
<?php
show_source("Exp04ques02.php");
?>
</div>
</body></html>