<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="febonaki_no.php" method="post">
  <label for="fname">Enter Total  no To Print:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <input type="submit" name="submit">
</form>


<?php
 $fname =$_POST['fname'] ;
function fibonacci($x,$y)
{    
$c =  $x + $y;
return $c;
}
 
$a = 0;
$b = 2;
echo "Fibonacci series is: ";   
echo "$a, $b";  
 
for ($i = 0; $i < $fname; $i++)
{  
echo ", ";
echo fibonacci($a,$b);
$z = fibonacci($a,$b);
$a = $b;
$b = $z;
 
}  
?>
 

    
</body>
</html>

