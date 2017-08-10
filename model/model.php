<?php

function getuser($password) {
  $bdd = new PDO('mysql:host=localhost;dbname=workbiche;charset=utf8', 'workbiche', 'Coucou1$');
  $user = $bdd->query("SELECT id, name FROM users WHERE password='$password'");
  return $user;
}

function getworkspaces($userid) {
  $bdd = new PDO('mysql:host=localhost;dbname=workbiche;charset=utf8', 'workbiche', 'Coucou1$');
  $workspaces = $bdd->query("SELECT id, name FROM workspaces WHERE userid=$userid ORDER BY name ASC");
  return $workspaces;
}

function getfamily($workspace) {
  $bdd = new PDO('mysql:host=localhost;dbname=workbiche;charset=utf8', 'workbiche', 'Coucou1$');
  $fams = $bdd->query("SELECT DISTINCT family FROM todo WHERE workspaceid=$workspace ORDER BY family ASC");
  return $fams;
};

function gettasklist($family, $workspaceid) {
  $bdd = new PDO('mysql:host=localhost;dbname=workbiche;charset=utf8', 'workbiche', 'Coucou1$');
  $todos = $bdd->query("SELECT * FROM todo WHERE family='$family' AND workspaceid=$workspaceid ORDER BY family, priority ASC");
  return $todos;
};
