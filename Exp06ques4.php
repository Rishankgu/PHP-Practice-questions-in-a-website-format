<html>
<body>
<h2>REGISTRATION FORM : INNOVATIVE LEARNING CENTER</h2>
<a href="index.php">HOMEPAGE</a><br>
<form action="" method="POST">
<br>First Name:<br>
<input type="text" name="fname"><br>
<br>Last Name:<br>
<input type="text" name="lname"><br>
<br>Age:<br>
<input type="number" name="age"><br>
<br>Gender:<br>
<input type="radio" name="gender" value="Female"> Female<br>
<input type="radio" name="gender" value="Male"> Male<br>
<br>Course:<br>
<input type="radio" name="course" value="Gate"> GATE<br>
<input type="radio" name="course" value="GRE"> GRE<br>
<input type="radio" name="course" value="CAT"> CAT<br>
<br>Submit<br>
<input type="submit" value="save">
</form>
</body>
</html>
<?php
$fp=fopen("student_detail.txt","a+");
$first_name=$_POST["fname"];
$last_name=$_POST["lname"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$course=$_POST["course"];
fwrite($fp,$first_name);
fwrite($fp,$last_name);
fwrite($fp,$age);
fwrite($fp,$gender);
fwrite($fp,$course);
$detail=fread($fp,filesize("student_detail.txt"));
echo $detail."<br>";
echo "Successfully feeded the registration details..";
?>
<div class="alignright right" >
<?php
show_source("Exp06ques4.php");
?>
</div>