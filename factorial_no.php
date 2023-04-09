<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="factorial_no.php" method="post">
  <label for="num">1st no:</label>
  <input type="text" id="name" name="name"><br><br>

  <input type="submit" name="submit">
</form>

<?php
if(isset($_POST['submit'])){

$num =$_POST['name'] ;
    echo "Your No is <br>$num<br>";
    
 
$factorial = 1;  
for ($x=$num; $x>=1; $x--)   
{  
  $factorial = $factorial * $x;  
}  
echo "Factorial of $num is $factorial";  
}
?> 

 

    
</body>
</html>