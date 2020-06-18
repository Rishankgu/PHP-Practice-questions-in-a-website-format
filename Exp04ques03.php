<html>
<head>
<title>question 3of 4
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css"href="style.css">
</head>
<body>
<h3 class="header"> Experiment 4 Question 3</h3>
<div class="alignleft left"><br>
<a href="index.php">HOMEPAGE</a><br>
<div  class="centered ">
<form action="" method="GET">
      <input type="text" name="name" placeholder="FullName"></input>
      <input type=radio name="Gender" value="Male">Male</input>
      <input type=radio name="Gender" value="Female">Female</input>
      <input type=submit name="submit"><br>
<?php
if(isset($_GET['Gender'])){
	$name=$_GET['name'];
	$f=$_GET['Gender'];

	function fullname($name){
		$f=" ";$l=" "; $m=" "; $final=" ";
		$n=explode(" " ,$name);
		$c=count($n);
		for($i=0;$i<$c;$i++){
			if($i==($c-1)&& $i!=0){
				$l=$l.ucfirst($n[$i]);
			}
			else if($i>=1&&$i<$c){
				$m=$m.ucfirst($n[$i]);
			}
			else {
				$f=$f.ucfirst($n[$i]);
			}
			
		}
		echo"<b>First name is </b>".$f;
		echo'<br>';
		echo"<b>Middle name is </b>".$m;
		echo'<br>';
		echo"<b>Last name is</b> ".$l;
		
	}
	fullname($name);
	
	
	function volspa($name){
		$vowels=0;
		$spaces=0;
		$vowlesarr=array('a','A','e','E','i','I','o','O','u','U');
		$sp=array(" ");
		$c=strlen($name);
		for($i=0;$i<$c;$i++){
			if(in_array($name[$i],$vowlesarr)){
				$vowels++;
			}
			else if(in_array($name[$i],$sp)){
				$spaces++;
			}
		}
		echo'<br>';
		echo"<b>No of vowels</b> ".$vowels;
		echo'<br>';
		echo"<b>No of white spaces</b> ".$spaces;
	}
	
	volspa($name);
	
	
	echo'<br>';
	
	function up($name){
		$new= strtoupper($name);
		echo"<b> The Upper case form of the String </b>".$new;
	}
	up($name);
	echo'<br>';
	
	function display($name,$f){
	
		
		if($f=='Female'){
			echo"<b>Mrs.</b>".$name;
		}
		else if($f=='Male'){
			echo"<b>Mr.</b>".$name;
		}
	}
	display($name,$f);
}
?>
</div>


<div class="alignright right" >
<?php
show_source("Exp04ques03.php");
?>
</div>
</body>
</html>