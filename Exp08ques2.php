<html>
<head>
</head>
    <body>
	<div>
	<a href="index.php">HOMEPAGE</a><br>
	<br>
        <?php
        class Book
        {
            public $title,$price;
            function __construct($title,$price)
            {
                $this->title=$title;
                $this->price=$price;
                
            }
            
        }
        $obj=new Book("Php Refrence", 500);
        echo '<strong>Title:'.$obj->title."<br>Price :".$obj->price."</strong>";
        ?>
		</div>
	
<divs>
<?php
show_source("Exp08ques2.php");
?>
</divs>   
    </body>
</html>