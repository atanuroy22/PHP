<?php
$num_to_guess = 42;
$message = "";
if ( !isset( $_POST['guess'] ) ) {
   $message = "Welcome!";
} else if ( $_POST['guess'] > $num_to_guess ) {
   $message = $_POST['guess']." is too big!";
} else if ( $_POST['guess'] < $num_to_guess ) {
   $message = $_POST['guess']." is too small!";
} else {
   $message = "Well done!";
}
?>
<html>
<body>
  <h1>
     <?php print $message ?>
  </h1>
<form method="post" action="<?php print $_SERVER['PHP_SELF']?>">
  <p>
     Type your guess here:
     <input type="text" name="guess" />
     <input type="submit" value="submit" />
  </p>
  </form>
</body>
</html>