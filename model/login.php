<?php
session_start();

if (isset($_POST['password'])) {
  $_SESSION['password'] = $_POST['password'];
}
if (isset($_POST['password'])) {
  $_SESSION['username'] = $_POST['username'];
}

$password = $_SESSION['password'];

$user = getuser($password)->fetch();

if ($user == false || $_SESSION['username'] !== $user['name']) {
  header('location:index.php');
}
else {
  $_SESSION['userid'] = $user['id'];
  $_SESSION['username'] = $user['name'];
  $userid = $_SESSION['userid'];
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
  if($workspace != null) {
    $workspacename = $bdd->query("SELECT name FROM workspaces WHERE id=$workspace")->fetch();
    $_SESSION['workspacename'] = $workspacename['name'];
  }
  else {
    $workspacename = "Ajoute un Espace de Travail!";
    $_SESSION['workspacename'] = $workspacename;
  }

  if($workspace != null) {
    $fams = getfamily($workspace)->fetchAll();
  }
}
