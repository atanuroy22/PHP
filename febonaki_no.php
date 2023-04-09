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
if(isset($_POST['submit'])){

$fname =$_POST['fname'] ;

	$num1 = 0;
	$num2 = 1;

	$counter = 0;
	while ($counter < $fname){
		echo $num1."  ";
		$num3 = $num2 + $num1;
		$num1 = $num2;
		$num2 = $num3;
		$counter = $counter + 1;
	}
         
    }  

?>
 

    
</body>
</html>

