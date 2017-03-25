<?php
  echo "Thank you for Signup website is under construstion.We will contact you soon.";
  session_start();

   if( isset($_SESSION['USERNAME'] ) ) {
      echo "welcome". $_SESSION['USERNAME'];
   }else {
     header("Location: index.php");
     exit;
   }

?>
<form action="invalidate.php" method="get">
  <input type="submit" value="Logout">
</form>
