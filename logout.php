<?php
session_start();
session_destroy(); // Destroy all session data
header("Location: userlogin.php"); // Redirect to the login page
exit;
?>
