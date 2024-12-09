<?php
session_start();
$_SESSION['userName'] = null;
session_destroy();

session_start();
$_SESSION['userName'] = null;
header('Location: ..\index.html');
exit();
?>