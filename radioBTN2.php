<?php
  $color = $_POST['color'];
  if( ( $color != null ) )
  {
    $msg = "a nice $color ";
    echo( $msg );
  }
?>