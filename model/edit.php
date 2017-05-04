<?php
session_start();
$workspaceid = $_POST['workspaceid'];
$family = $_POST['family'];
$task = $_POST['task'];
$priority = $_POST['priority'];
$time = $_POST['time'];
$id = $_POST['submit'];

$bdd = new PDO('mysql:host=localhost;dbname=workbiche;charset=utf8', 'workbiche', 'Coucou1$');
$sql = $bdd->query("UPDATE todo SET workspaceid='$workspaceid', family='$family', task='$task', priority='$priority', time='$time' WHERE id='$id'");

header('location:../home.php');
