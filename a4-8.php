<?php
//adder.php

error_reporting(E_ERROR | E_PARSE); // show only major problems

if (isset($_POST['num1']))
{
  	$num1 = $_POST['num1'];
  	$num2 = $_POST['num2'];
  	$myTotal = $num1 + $num2;
  	echo "<h2 align=center>You added <font color=blue>". $num1 . "</font> and ";
  	echo "<font color=blue>" . $num2 . "</font> and the answer is <font color=red>" . $myTotal ."</font>!";
  	echo '<br><a href="">Reset page</a>';
}else{
echo '
   	<html>
   	<body>
   	    <h1 align="center">Adder.php</h1>
   	    <form action="" method="post">
   	        Enter the first number:<input type="text" name="num1"><br>
   	        Enter the second number:<input type="text" name="num2"><br>
   	        <input type="submit" value="Add Em!!">
   	    </form>
   	</body>
   	</html>
';
}
/*
1) missing . on line 12
2) missing ; on line 13    
3) curly brace on line 27 was backwards 
4) closing form tag needs to be open form tag on line 19
5) missing " for argument in input tag on line 22    
6) "Num1" should be "num1" (not capitalized) on line 20
7) form tag method="POST" argument missing on line 16
8) "-=" should be "=" on line 10
9) "Num2" should be "num2" (not capitalized) on line 10
10) declared error reporting level to show only major problems on line 4     
11) adjusted line numbers in previus troubleshooting comments to correct for displacement
    
    
    
    
    
*/    
?>