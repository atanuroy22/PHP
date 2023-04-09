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
    $num=153;  
    $total=0;  
    $x=$num;  
    while($x!=0)  
    {  
    $rem=$x%10;  
    $total=$total+$rem*$rem*$rem;  
    $x=$x/10;  
    }  
    // if($num==$total)  
    // {  
    // echo "Yes it is an Armstrong number";  
    // }  
    // else  
    // {  
    // echo "No it is not an armstrong number";  
    // }  
    
    ?>
</body>
</html>