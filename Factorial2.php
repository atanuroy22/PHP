<?php
  print "The number is   <b>" . $_POST ['user'] . "</b><br/>";
  $num = $_POST ['user'];  
$factorial = 1;  
for ($x=$num; $x>=1; $x--)   
{  
  $factorial = $factorial * $x;  
}  
echo "Factorial of $num is $factorial";  
?>