<?php 
session_start();
$_SESSION["userid"] = '';
session_destroy();
header("Location: index.php");
exit; // It's a good practice to exit after header redirection to prevent further execution
?>







