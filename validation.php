<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a name="answer"></a>
<form action="validation.php" method="POST">
Please create a username:
<input type="text" name="username" value=''/><br>
Please create a password:
<input type="password" name="password" value=''><br>
<input type="submit" name="enterbutton" value="Enter"/><br>
</form>



<?php

$username= $_POST['username'];
$password= $_POST['password'];
$enterbutton= $_POST['enterbutton'];

$usernamelength= strlen($username);
$passwordlength= strlen($password);

if (isset($enterbutton)){
if ($usernamelength < 6){
$output= "<br><redtext> Invalid username. Username must be at least 6 characters</redtext>";
echo $output;
}
if ($usernamelength > 15){
$output= "<br><redtext'> Invalid username. Username cannot be greater than 15 characters</redtext>";
echo $output;
}
if ($passwordlength < 6){
$output2= "<br><redtext> Invalid password. Password must be at least 6 characters</redtext>";
echo $output2;
}
if ($passwordlength > 15){
$output2= "<br><redtext> Invalid password. Password cannot be greater than 15 characters</redtext>";
echo $output2;
}
}
?>




</body>
</html>