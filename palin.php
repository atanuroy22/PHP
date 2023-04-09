<!DOCTYPE html>
<html>
<body>
 
<?php  
 
$num = 123454321;  
$x = 0;
$n =$num;
 
while(floor($num))
{  
$mod = $num%10;
$x = $x * 10 + $mod;  
$num = $num/10;
}  
 
if($n==$x)
{  
echo "$n is a Palindrome number.";  
}
 
else
{  
echo "$n is not a Palindrome number.";  
}  
?> 
 
</body>
</html>