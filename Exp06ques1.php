<html>
	<head>
		<title>Experiment-6</title>
	</head>
	</html>
	<body>
	<header>EXPERIMENT6 PART1</header>
	<a href="index.php">HOMEPAGE</a><br>
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

<h3>To save these details in a file called studentdetails.txt click<br>
<input type ="submit" name=save>
</form>
</body>
</html>

<?php
if($_POST){
    $fp=fopen("studentdetails.txt","a+");
    $rno=$_POST['roll_no'];
    $sname=$_POST['name'];
    $sage=$_POST['age'];
    $add=$_POST['address'];
    $phone=$_POST['phone_no'];
    
    fwrite($fp,$rno);
    fputs($fp,":");
    fwrite($fp,$sname);
    fputs($fp,":");
    fwrite($fp,$sage);
    fputs($fp,":");
    fwrite($fp,$add);
    fputs($fp,":");
    fwrite($fp,$phone);
    fputs($fp,"\n");
    $content=fread($fp,25);
    
    echo $content;
}
?>
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
show_source("Exp06ques1.php");
?>
</div>

		
		