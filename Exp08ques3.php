<html>
<head>
</head>
    <body>
	<div>
	<a href="index.php">HOMEPAGE</a><br>
        <h2>Innovative Learning Center </h2>
        <h3>Faculty FeedBack</h3>
        <form method="post" >  
            ID: <br><input type="text" name="id">
            <br>
            Student Name: <br><input type="text" name="sname">
            <br>
            Faculty Name: <br><input type="text" name="fname">
            <br>
            Subject: <br><input type="text" name="subject">
            <br>
            
            Rating:
            <input type="radio" name="rating" value="1">1
            <input type="radio" name="rating" value="2">2
            <input type="radio" name="rating" value="3">3
            <input type="radio" name="rating" value="4">4
            <input type="radio" name="rating" value="5">5
            <br>
            Comment: <br><textarea name="comment" rows="5" cols="40"></textarea>
            <br><br>
            <input type="submit" name="submit" value="Submit">  
        </form>
    <?php
    class Feedback
    {
        public $sname,$id;
        public $fname,$rating,$comment,$subject;
        
    }
    if($_POST)
    {
        $obj=new Feedback();
        $obj->sname=$_POST['sname'];
        $obj->id=$_POST['id'];
        $obj->fname=$_POST['fname'];
        $obj->subject=$_POST['subject'];
        $obj->rating =$_POST['rating'];       
        $obj->comment=$_POST['comment'];
        $str="\r\nStudent: ".$obj->sname."   ID: ".$obj->id."  Faculty: ".$obj->fname."  Subject: ".$obj->subject."  Rating: ".$obj->rating."  Comment: ".$obj->comment;
        $myfile=  fopen("feedback.txt", "a+");
        fwrite($myfile, $str);
        fclose($myfile);
        $myfile2=  fopen("feedback.txt", "r+");
        echo '<strong>Reading fro file</strong>';
        while(!feof($myfile2))
        {
            echo fgets($myfile2)."<br>";
        }           
    } 
    ?>   
	</div>
<divs>
<?php
show_source("Exp08ques3.php");
?>
</divs>  
   </body> 
</html>