<?php
session_start();
$workspaceid = $_SESSION['space'];

$bdd = new PDO('mysql:host=localhost;dbname=workbiche;charset=utf8', 'workbiche', 'Coucou1$');
$sql = $bdd->query("DELETE FROM todo WHERE workspaceid='$workspaceid'");
$sql = $bdd->query("DELETE FROM workspaces WHERE id='$workspaceid';");

$workspace = $workspaces[0]['id'];
$_SESSION['space'] = $workspace;

header('location:../home.php');
