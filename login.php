<?php
session_start();
$_SESSION['loggedin'] = true;
$_SESSION['username'] = 'okxn'; // lub dowolna inna nazwa użytkownika
header("Location: dashboard.php");
exit;
?>
