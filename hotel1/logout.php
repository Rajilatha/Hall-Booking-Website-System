<?php
session_start();
session_unset($_SESSION['CustomerID']);

session_destroy();
header("Location: ./login.php");
?>