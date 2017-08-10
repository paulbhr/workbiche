<?php
session_start();
$workspaceid = $_POST['workspaceid'];
$workspacename = $_POST['workspacename'];
$family = $_POST['family'];
$task = $_POST['task'];
$priority = $_POST['priority'];
if ($_POST['time'] == "") {
  $_POST['time'] = "0";
}
$time = $_POST['time'];

$bdd = new PDO('mysql:host=localhost;dbname=workbiche;charset=utf8', 'workbiche', 'Coucou1$');
$sql = $bdd->query("INSERT INTO todo (workspaceid, family, task, priority, time) VALUES ('$workspaceid', '$family', '$task', '$priority', '$time')");

header('location:../home.php');
