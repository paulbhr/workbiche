<?php session_start();
$workspace = $_POST['space'];
$_SESSION['space'] = $workspace;
header('location:../home.php');
