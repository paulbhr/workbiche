<?php
function getuser() {
  $bdd = new PDO('mysql:host=localhost;dbname=workbiche;charset=utf8', 'workbiche', 'Coucou1$');
  $user = $bdd->query('SELECT name FROM users WHERE id=1');
  return $user;
}

function getworkspaces() {
  $bdd = new PDO('mysql:host=localhost;dbname=workbiche;charset=utf8', 'workbiche', 'Coucou1$');
  $workspaces = $bdd->query('SELECT * FROM workspaces WHERE userid=1 ORDER BY name ASC');
  return $workspaces;
}

function getlist() {
  $bdd = new PDO('mysql:host=localhost;dbname=workbiche;charset=utf8', 'workbiche', 'Coucou1$');
  $todos = $bdd->query('SELECT * FROM todo WHERE workspaceid=2 ORDER BY family, priority ASC');
  return $todos;
};
