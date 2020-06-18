<!DOCTYPE html>
<html>
<head>
<title>question 5
</title>
<link rel="stylesheet" type="text/css"href="style.css">
</head>

<body>
<h3 class="header">Question 5 </h3>
<a href="index.php">HOMEPAGE</a><br>
<form action="" method="GET">
 num: <input type="text" name="num">
 <input type=submit name='submit'>
 </form>
<?php 
if(isset($_GET['submit'])){
	$s=$_GET["num"];
	

// PHP program to print 
// berth type of a provided 
// seat number. 
// function to print berth type 
function berth_type($s)  
{  
    if ($s > 0 && $s < 73) 
    { 
        if ($s % 8 == 1 ||  
            $s % 8 == 4) 
        { 
            echo sprintf("<b>%d is lower " . 
                          "berth\n</b>", $s); 
        } 
        else if ($s % 8 == 2 ||  
                 $s % 8 == 5) 
        { 
            echo sprintf("<b>%d is middle ". 
                          "berth\n</b>", $s); 
        } 
        else if($s % 8 == 3 || 
                $s % 8 == 6) 
        { 
            echo sprintf("<b>%d is upper " . 
                          "berth\n</b>", $s); 
        } 
        else if($s % 8 == 7) 
        { 
            echo sprintf("<b>%d is side lower ". 
                              "berth\n</b>", $s); 
        } 
        else
        { 
            echo sprintf("<b>%d is side upper ". 
                              "berth\n</b>", $s); 
        } 
    } 
    else
    { 
        echo sprintf("%d invalid seat ".  
                        "number\n", $s); 
    } 
}
berth_type($s);
 } 
?>
<hr>
<?php
show_source("form4.php");
?>
</body>
</html>