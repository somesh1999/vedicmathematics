<?php
session_start();
session_destroy();

session_start();
$_SESSION['message']="Successfully logged out";
header('location:/');

?>

