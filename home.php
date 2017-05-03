<?php
  session_start();
  require 'model.php';

  $username = $_POST["username"];
  $_SESSION['username'] = $username;
  $password = $_POST["password"];
  $_SESSION['password'] = $password;

  $user = getuser(1)->fetch();

  $userid = $user['id'];
  $_SESSION['userid'] = $userid;

  $workspaces = getworkspaces(1)->fetchAll();

  if(isset($_POST['space'])) {
    $workspace = $_POST['space'];
    setcookie('space', $workspace, time()+10000);
  }
  else if(isset($_COOKIE['space'])) {
    $workspace = $_COOKIE['space'];
  }
  else {
    $workspace = $workspaces[0]['id'];
  }

  $fams = getfamily($workspace)->fetchAll();

  require 'view.php';
