<html>
<body>
<form action="" method="POST">
<a href="index.php">HOMEPAGE</a><br>
<h1>Copying file</h1>
<br>Enter File name to be copied:<br>
<input type="text" name="file1">
<br>Enter File name where to copy:<br>
<input type="text" name="file2">
<br>Click to copy content:<br>
<input type="submit" value="submit">
</form>
</body>
</html>

<?php
$file=$_POST["file1"].".txt";
$copy=$_POST["file2"].".txt";
if(copy($file,$copy))
{
echo "copied $file";
}
else
{
echo "could not copy $file";
}
?>
<div class="alignright right" >
<?php
show_source("Exp06ques2.php");
?>
</div>