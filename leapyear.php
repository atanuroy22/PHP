<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   function year_check($my_year){
      if ($my_year % 400 == 0)
         print("It is a leap year");
      else if ($my_year % 100 == 0)
         print("It is not a leap year");
      else if ($my_year % 4 == 0)
         print("It is a leap year");
      else
         print("It is not a leap year");
   }
   $my_year = 2024;
   year_check($my_year);
?>
</body>
</html>