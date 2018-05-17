<?php
session_start();
?>


<?php
// remove all session variables
unset($_SESSION['user_x']);

// destroy the session 
session_destroy(); 
header("location:index.php");
?>
