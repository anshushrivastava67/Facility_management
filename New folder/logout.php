<?php
session_start();

session_unset();
session_destroy();

header("location: register1.php");
exit;
?>