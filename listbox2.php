<?php

$choice= $_POST['credit_card'];

if (isset($choice)) {
echo 'The Credit Card you have selected is '. $choice;
}
else {
echo "You have not selected any credit card.";
}
?>