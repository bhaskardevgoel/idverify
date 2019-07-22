<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['password1']);
header('location:index.php');
?>