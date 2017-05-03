<?php
  require 'model.php';
  $user = getuser($password)->fetch();
  if(isset($_COOKIE['user'])) {
    $userid = $_COOKIE['user'];
  }
  else {
    $userid = $user['id'];
    setcookie('user', $userid, time()+10000);
  }
  $workspaces = getworkspaces($userid)->fetchAll();
  echo $workspaces[0]["id"];
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
  $todos = gettasklist($fams[0][0])->fetchAll();
  require 'view.php';
