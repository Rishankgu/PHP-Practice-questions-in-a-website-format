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
            private $title,$price;
            function setPrice($price)
            
            {
                $this->price=$price;
            }
             function setTitle($title)
             {
                 $this->title=$title;
             }
             function getTitle()
             {
                 echo "<strong>Title: ".$this->title."</strong><br><br>";
             }
             function getPrice()
             {
                 echo "<strong>Price: ".$this->price."</strong><br><br>";
             }
        }
        $obj=new Book();
        $obj->setPrice(1000);
        $obj->setTitle("PHP");
        $obj->getTitle();
        $obj->getPrice();
        
        ?>
  </div>
<divs>
<?php
show_source("Exp08ques1.php");
?>
</divs>  
    
  </body>  
    
</html>