
<html>
<body>
<a href="index.php">HOMEPAGE</a><br>
<?php
$fp=fopen("innovativelearningcenter.txt","a");
$sub1="C";
$sub2="C++";
$sub3="Java";
$sub4="Daa";
$sub5="Php";
echo fputs($fp,"Syllabus of GATE".":");
fputs($fp,$sub1);
fputs($fp," ");
fputs($fp,$sub2);
fputs($fp," ");
fputs($fp,$sub3);
fputs($fp," ");
fputs($fp,$sub4);
fputs($fp," ");
fputs($fp,$sub5);
fputs($fp," ");
echo "syllabus successfully inserted";
fclose($fp);
?>
</body>
</html>
<div class="alignright right" >
<?php
show_source("Exp06ques4.php");
?>
</div>