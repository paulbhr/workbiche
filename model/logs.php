<?php
session_start();
$password = $_SESSION['password'];
$user = getuser($password)->fetch();

$_SESSION['userid'] = $user['id'];
$_SESSION['username'] = $user['name'];
$username = $_SESSION['username'];

$workspaces = getworkspaces($_SESSION['userid'])->fetchAll();

if(isset($_SESSION['space'])) {
  $workspace = $_SESSION['space'];
}
else {
  $workspace = $workspaces[0]['id'];
  $_SESSION['space'] = $workspace;
}

$bdd = new PDO('mysql:host=localhost;dbname=workbiche;charset=utf8', 'workbiche', 'Coucou1$');
$workspacename = $bdd->query("SELECT name FROM workspaces WHERE id=$workspace")->fetch();
$_SESSION['workspacename'] = $workspacename['name'];

$fams = getfamily($workspace)->fetchAll();
