<!DOCTYPE html>
<html>
<head>
<title>question 1 of 3
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css"href="style.css">
</head>
<body>
<h3 class="header"> Experiment 4 Question 1</h3>
<a href="index.php">HOMEPAGE</a><br>
<div class="alignleft left">

<div  class="centered ">
<form action="" method="GET">
<input type="text" name="arr">
<input type="submit" name="submit">
<?php
if(isset($_GET['submit'])){
$num=$_GET["arr"];

function maxmin($num){
$temp=explode(',',$num);
$max=$temp[0];
$min=$temp[1];
foreach($temp as $sort){
	if($sort>$max){
		$max=$sort;
		
	}
	else if($sort<$min){
		$min=$sort;
	}
}
  echo"<b>maximum number is</b> ".$max;
  echo'<br>';
	echo"<b>minimum number is</b> ".$min;
}

   maxmin($num);
}
?>
</div>

<div class="alignright right" >
<?php
show_source("Exp04ques01.php");
?>
</div>
</body>
</html>