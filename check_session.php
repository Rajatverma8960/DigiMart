<?php
// Start the session
session_start();

// Set session variables
print_r($_SESSION);
echo $_SESSION['user_x'];
//$gClient->setAccessToken($_SESSION['token']);
?>
