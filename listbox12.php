<?php

$choices= $_POST['foods'];

if(isset($choices)) {
echo 'You have chosen these foods
to be in your salad:' . '<br>' . '<br>';
foreach ($choices as $key => $value)
{
echo $value . '<br>';
}
}
else
{
echo "You haven't selected any foods
to be in your salad.";
}
?>