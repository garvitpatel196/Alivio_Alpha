<?php
  session_start();
  if( isset($_SESSION['USERNAME'] ) ) {
    session_destroy();
    header("Location: index.php");
    exit;
  }
?>
