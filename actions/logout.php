<?php
// logout user(admin)session_start();
session_start();
unset($_SESSION['logged_user']);
echo 1;
header('Location: ../index.php');
?>

