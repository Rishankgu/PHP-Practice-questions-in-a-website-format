<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
    width:100;
    height: 100vh;
    background-image: url(ppp2.jpg);
    background-size: cover;
}
}

/* list inside navigation bar symbol hover*/
.navbar {
  overflow: hidden;
  background-color: #333;

}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 163px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
    header
{
    text-decoration-color: chocolate;
        text-align: center;
    padding:0px;
   background-color: green;
  background-repeat: no-repeat;
  background-size: 100% 100%;
    }
</style>
<body>
<body background-color: beige>
    <header><h1>PHP LAB</h1></header>
<div class="navbar">
<a href="index.php">HOME</a>
  <div class="dropdown">
    <button class="dropbtn">EXPERIMENT 3
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href="form3.php">practical 1</a>
    <a href="form1.php">practical 2</a>
    <a href="form2.php">practical 3</a>
    <a href="program1.php">practical 4</a>
    <a href="form4.php">practical 5</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">EXPERIMENT 4,5 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="Exp04ques01.php">practical 1</a>
    <a href="frame.php">practical 2</a>
    <a href="Exp04ques03.php">practical 3</a>
    <a href="Exp04ques04.php">practical 4</a>
    <a href="Exp04prog5.php">practical 5</a>
    <a href="Exp04prog_6.php">practical 6</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">EXPERIMENT 6 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="Exp06ques1.php">practical 1</a>
    <a href="Exp06ques2.php">practical 2</a>
    <a href="Exp06ques3.php">practical 3</a>
    <a href="Exp06ques4.php">practical 4</a>
    <a href="Exp06ques5.php">practical 5</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">EXPERIMENT 7 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="Exp07ques1.php">practical 1</a>
    <a href="Exp07ques2.php">practical 2</a>
    <a href="Exp07ques3.php">practical 3</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">EXPERIMENT 8
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="Exp08ques1.php">practical 1</a>
    <a href="Exp08ques2.php">practical 2</a>
    <a href="Exp08ques3.php">practical 3</a>
    </div>
  </div> 
   <li><a href="feedback.php">FEEDBACK</a></li>
</div>
</body>
</html>
