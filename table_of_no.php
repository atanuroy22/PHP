<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="table_of_no.php" method="post">
  <label for="fname">1st no:</label>
  <input type="text" id="fname" name="fname"><br>
  <input type="submit" name="submit">
</form>

<?php
if(isset($_POST['submit'])){

$fname =$_POST['fname'] ;
   
for($i=1; $i<=10; $i++)   
{   
  echo "$fname*$i=";   
  echo $fname*$i;
  echo "<br>";     
} 
                  
    }  

?>
 

    
</body>
</html>