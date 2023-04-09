<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="prime_no.php" method="post">
  <label for="fname">1st no:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <!-- <label for="lname">2nd No:</label>
  <input type="text" id="lname" name="lname"><br><br> -->
  <input type="submit" name="submit">
</form>

<?php
if(isset($_POST['submit'])){

$fname =$_POST['fname'] ;

        for ($i = 2; $i < $fname; $i++)
        {
            if ($fname % $i == 0) 
            {
                echo "NOT prime";
               break;
            }      
            
             else 
             { echo "Prime";      
               break;}
        }
                  
    }  

?>
 

    
</body>
</html>