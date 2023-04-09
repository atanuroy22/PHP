<?php

$destinations= $_POST['Islands'];

if(isset($destinations)) {
echo 'You have chosen:' . '<br>' . '<br>';
foreach ($destinations as $key => $value)
{
echo $value . '<br>';
}
}
else
{
echo "You haven't selected any destination";
}
?>