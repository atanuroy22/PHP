<?php
/*
$Snorkeling= $_POST['Snorkeling'];
$Scuba_diving= $_POST['Scuba_diving'];
$Parasailing= $_POST['Parasailing'];
*/

echo 'The activities you want to do are' . '<br>';
if (isset($_POST['Snorkeling'])){
echo 'Snorkeling' . '<br>';
}
if (isset($_POST['Scuba_diving'])){
echo 'Scuba diving'. '<br>';
}
if (isset($_POST['Parasailing'])){
echo 'Parasailing' . '<br>';
}
if ((empty($_POST['Snorkeling'])) && (empty($_POST['Scuba_diving']))
 && (empty($_POST['Parasailing']))){
echo 'No activities chosen yet';
}
?>