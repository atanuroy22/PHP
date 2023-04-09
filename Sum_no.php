<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="Sum_no.php" method="post">
  <label for="fname">1st no:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <!-- <label for="lname">2nd No:</label>
  <input type="text" id="lname" name="lname"><br><br> -->
  <input type="submit" name="submit">
</form>

<?php $sum=0;
if(isset($_POST['submit'])){

$fname =$_POST['fname'] ;
    echo "Your No is <br>$fname<br>Reverse No is <br>";
    while($fname != 0) 
    {
        $m = $fname % 10;
      $fname = $fname / 10; 
        $sum=$sum+$m;
      //  if($m>0){
      // echo " $m" ;}
    } 
    echo "<br>Sum of The Digits Are $sum";
}

?>
 

    
</body>
</html>