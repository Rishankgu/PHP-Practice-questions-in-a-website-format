<!doctype html>
<html>
<head>
<script>
function add(){
var a,b,c;
a=Number(document.getElementById("first").value);
b=Number(document.getElementById("second").value);
c= a + b;
document.getElementById("answer").value= c;
}
</script>
</head>
<body>
<a href="index.php">HOMEPAGE</a><br>
Enter the First number : <input id="first"><br>
Enter the Second number: <input id="second"><br>
<button onclick="add()">Add</button><br>
<input id="answer"><br>

<button onclick="myFunction()">POP</button>

<p id="demo"></p>

<script>
var numbers = ["a", "b"];
//document.getElementById("demo").innerHTML = numbers;

function myFunction() {
  document.getElementById("demo").innerHTML = numbers.pop();
}
</script>
</body>
</html>
<div class="alignright right" >
<?php
show_source("Exp07ques1.php");
?>
</div>