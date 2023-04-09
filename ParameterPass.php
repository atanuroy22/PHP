<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP functoin with OPtional Parameters/title>
</head>
<body>
    <?php
    // Defining function
function customFont($font, $size=1.5){
    echo "<p style=\"font-family: $font; font-size: {$size}em;\">Hello, world!</p>";
}
 
// Calling function
customFont("Arial", 2);
customFont("Times", 3);
customFont("Courier");
?>
</body>
</html>