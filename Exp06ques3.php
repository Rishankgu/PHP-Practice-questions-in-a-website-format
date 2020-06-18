<html>
<body>
<h1>FORM</h1>
<a href="index.php">HOMEPAGE</a><br>
<form action="" method="post" enctype="multipart/form-data">
File name:
<input type="file" name="filename">
<br>
<input type="submit" name="upload" value="upload"><br>
</form>
</body>
</html>
<?php
if(isset($_FILES['upload']))
{
   $file_name= $_FILES['filename']['name'];
   $file_tem_loc= $_FILES['filename']['tmp_name'];
   $file_store= "upload/".$file_name;
   
   move_uploaded_file($file_tem_loc, $file_store);
   $f= fopen($_POST['filename'],"r");
   $content=fread($f, filesize($a));
   echo $content;
   
}
?>
<div class="alignright right" >
<?php
show_source("Exp06ques3.php");
?>
</div>