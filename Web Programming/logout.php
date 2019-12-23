<?php
include('server.php');
session_destroy();
session_unset();
unset($_SESSION['username']);
header('location: index.php');
$_SESSION = array();
?>