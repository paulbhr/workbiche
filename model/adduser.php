<?php
session_start();
$userpass = $_POST['newuserpass'];
$username = $_POST['newusername'];


$bdd = new PDO('mysql:host=localhost;dbname=workbiche;charset=utf8', 'workbiche', 'Coucou1$');
$sql = $bdd->query("INSERT INTO users (name, password) VALUES ('$username', '$userpass')");
$_SESSION['password'] = $userpass;
$_SESSION['username'] = $username;

header('location:../home.php');
