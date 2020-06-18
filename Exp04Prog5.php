<html>
	<head>
		<title>Experiment-4</title>
	</head>
	
	<body>
	<header>EXPERIMENT4 PART5</header>
	<divl>
		<h2>Enter the Numbers separated by Commas</h2>
		<a href="index.php">HOMEPAGE</a><br>
		<form action="" method="GET">
			<input type="text" name="number">
			<input type="submit" name="submit">
		</form>
		<hr>
		
		<?php
			if($_GET)
			{
				$numbers = $_GET['number'];
				$arr = explode(',', $numbers);
				
				$i = -1; 
				$j = 0;
				$n = sizeof($arr);
				while ($j != $n) 
				{ 
					if ($arr[$j] % 2 == 0) 
					{ 
						$i++; 
						$x = $arr[$i]; 
						$arr[$i] = $arr[$j]; 
						$arr[$j] = $x; 
					} 
					$j++; 
				}
				for ($i = 0; $i < $n; $i++) 
					echo $arr[$i] . " ";
			}
		?> 
	</divl>
	<?php
show_source("Exp04Prog5.php");
?>
</div>
	</body>
</html>