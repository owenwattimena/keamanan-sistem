<?php
session_start();

$_SESSION['logged'] = false;
unset($_SESSION['logged']);
session_destroy();
header('location:login.php');
