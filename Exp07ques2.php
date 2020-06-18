<html>
<head>
<script>
function myfunc()
{
		document.getElementById("myImage").src="css1.jpg";
}
function myfunc1()
{
		document.getElementById("myImage").src="css2.jpg";
}
</script>
</head>
<body>
<a href="index.php">HOMEPAGE</a><br>
<img src="css2.jpg" width="400px" height="400px" alt="im" id="myImage" onmouseover="myfunc()" onmouseout="myfunc1()">
</body>
</html>
<div class="alignright right" >
<?php
show_source("Exp07ques2.php");
?>
</div>