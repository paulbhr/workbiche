<?php
session_start();
$workspacename = $_POST['workspacename'];
$userid = $_POST['userid'];


$bdd = new PDO('mysql:host=localhost;dbname=workbiche;charset=utf8', 'workbiche', 'Coucou1$');
$sql = $bdd->query("INSERT INTO workspaces (name, userid) VALUES ('$workspacename', $userid)");

header('location:../home.php');
