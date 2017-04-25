<?php
function getlist() {
  $bdd = new PDO('mysql:host=localhost;dbname=workbiche;charset=utf8', 'workbiche', 'Coucou1$');
  $toduno = $bdd->query('SELECT * FROM todo WHERE workspaceid=1 ORDER BY priority ASC');
  $todos = $bdd->query('SELECT * FROM todo WHERE workspaceid=2 ORDER BY priority ASC');
  return $toduno;
  return $todos;
};
