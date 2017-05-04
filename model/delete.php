<?php
session_start();
$task = $_POST['task'];

$bdd = new PDO('mysql:host=localhost;dbname=workbiche;charset=utf8', 'workbiche', 'Coucou1$');
$sql = $bdd->query("DELETE FROM `todo` WHERE `id`='$task'");

header('location:../home.php');
