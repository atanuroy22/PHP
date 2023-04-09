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
    function getSum($num1,$num2)
    {
        $sum=$num1+$num2;
        echo "Sum of two numbers $num1 and $num2 is :", $sum;

    }
    getSum(20,30);
    ?>
</body>
</html>